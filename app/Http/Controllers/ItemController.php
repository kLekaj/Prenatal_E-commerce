<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\ItemSize;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function selectedCategoryItems()
    {

        $categories = Category::tree();
        $checked_values = $this->get_filter_checked_values();
        $marche_filter_array_to_db = $this->filter_array_to_db($checked_values, 'marche');
        $sesso_filter_array_to_db = $this->filter_array_to_db($checked_values, 'sesso');
        $min_price_filter_array_to_db = $this->filter_array_to_db($checked_values, 'filter_min_prezzo');
        $max_price_filter_array_to_db = $this->filter_array_to_db($checked_values, 'filter_max_prezzo');
        $color_filter_array_to_db = $this->filter_array_to_db($checked_values, 'filter_color');
        $search_entered_values = $this->get_search_entered_values();
        $search = $this->filter_array_to_db($search_entered_values,'search');


        $category_items = Category::with('items')
            ->where(
                'link',
                'like',
                str_replace(
                    'http://127.0.0.1:8000/categoria-prodotto/',
                    '/',
                    url()->current()) . '%')
            ->get()
            ->toArray();

        if (
            empty($marche_filter_array_to_db) or
            empty($sesso_filter_array_to_db) or
            empty($min_price_filter_array_to_db) or
            empty($max_price_filter_array_to_db) or
            empty($color_filter_array_to_db)
        ) {
            if (!empty($search[0][0])) {
                $items = Item::with(['gallery', 'sizes'])
                    ->whereIn('id', $this->items_id($category_items))
                    ->where('title', 'LIKE',$search[0][0] . '%')
//                    ->get()
                    ->paginate(12)
                    ->toArray();
            }
            else{
                $items = Item::with(['gallery', 'sizes'])
                    ->whereIn('id', $this->items_id($category_items))
//                    ->get()
                    ->paginate(12)
                    ->toArray()
                ;
            }
        }
        else
        {
            if (!empty($search[0][0])) {
                $items = Item::with(['gallery', 'sizes'])
                    ->whereIn('id', $this->items_id($category_items))
                    ->where('marche', $marche_filter_array_to_db)
                    ->where('genere', $sesso_filter_array_to_db)
                    ->where('colore', $color_filter_array_to_db)
                    ->where('title', 'LIKE',$search[0][0] . '%')
                    ->whereBetween('price', [$min_price_filter_array_to_db, $max_price_filter_array_to_db])
//                    ->get()
                    ->paginate(12)
                    ->toArray();
            }
            else{
                $items = Item::with(['gallery', 'sizes'])
                    ->whereIn('id', $this->items_id($category_items))
                    ->where('marche', $marche_filter_array_to_db)
                    ->where('genere', $sesso_filter_array_to_db)
                    ->where('colore', $color_filter_array_to_db)
                    ->whereBetween('price', [$min_price_filter_array_to_db, $max_price_filter_array_to_db])
//                    ->get()
                    ->paginate(12)
                    ->toArray();
            }
        }

//        dd( url()->current() . '?page=' . $items['last_page']-1, $items );

        $filters_properties = Item::with(['gallery', 'sizes'])
            ->whereIn('id', $this->items_id($category_items))
            ->get()->toArray();


        $size_filter = $this->size_filter_format($filters_properties);
        $marche_filter = $this->filter_format($filters_properties, 'marche');
        $genere_filter = $this->filter_format($filters_properties, 'genere');

        $product_path_url = $this->product_path_url();

//        dd($items['links']);
        return view('pages/items_page', [
            'categories' => $categories,
            'posts' => $items,

            'filtered_values' => $checked_values,
            'checked_value' => ['$checked', 'sdad'],
            'marca' => $marche_filter,
            'gendre' => $genere_filter,
            'size_filter' => $size_filter,

            'categories_urls' => $product_path_url,


            'filters_properties' => $filters_properties,
            'path_url' => explode('/', str_replace('http://127.0.0.1:8000/categoria-prodotto/', '/', url()->current())),
        ]);
    }

    public function selectedItem()
    {
        $categories = Category::tree();
        $page_slug = url()->current();
        $link = str_replace('http://127.0.0.1:8000/', 'https://www.prenatal.com/', $page_slug);

        $itemSizes = [];
        $item = (new Item())->getCurrentItem($link);
        if ($item !== null && $item['hasSizes']) {
            $itemSizes = (new ItemSize())->getSizes($item['id']);
        }
        return view('pages/item', [
            'categories' => $categories,
            'item' => $item,
            'itemSizes' => $itemSizes,

        ]);
    }


    // get all the filter values of the given arrey we enter e.x => we are in a category pappa and we wonna know all the filter values like
    //  for this category [ 'marche' => ['adidas' , 'nike' etc] ]

    public function filter_format($array, $filter)
    {
        $gendre_filter_values = [];
        foreach ($array as $f) {
            foreach ($gendre_filter_values as $i) {
                if ($f[$filter] == $i) {
                    continue 2;
                }
            }
            $gendre_filter_values[] = $f[$filter];
        }
        return $gendre_filter_values;
    }

// get all the filter values of the given arrey we enter e.x => we are in a category bambini and we wonna know all the filter values like
    //  for this category [ 'size' => ['12cm' , '13cm' ] ] etc
    public function size_filter_format($array)
    {
        $sizes_filter_values = [];
        foreach ($array as $f) {

            if (is_array($f['sizes'])) {
                foreach ($f['sizes'] as $i) {
                    $sizes_filter_values[] = $i;
                }
            } else {
                $sizes_filter_values[] = $f['sizes'];
            }
        }

        $size_filters = [];
        foreach ($sizes_filter_values as $f) {
            foreach ($size_filters as $i) {
                if ($f['taglia'] == $i or $f['taglia'] == null) {
                    continue 2;
                }
            }
            $size_filters[] = $f['taglia'];
        }
        return $size_filters;
    }

//    get the path and return the numbers of the categoires url
    public function product_path_url()
    {
        $page_url = url()->current();
        $query_url = str_replace('http://127.0.0.1:8000/categoria-prodotto/', '/', $page_url);
        $categories_urls = 0;
        foreach (str_split($query_url) as $i) {
            if ($i == '/') {
                $categories_urls += 1;
            }
        }
        return $categories_urls;
    }

    //get all the items id of the items in the choosen category
    public function items_id($category_items)
    {
        $items_id = [];
        foreach ($category_items as $q) {
            foreach ($q as $k => $i) {
                if ($k == 'items') {
                    foreach ($i as $a) {
                        foreach ($a as $key => $b) {
                            if ($key == 'id') {
                                array_push($items_id, $b);
                            }
                        }
                    }
                }
            }
        }
        return $items_id;
    }

    //  get the values of the choosen filter  e.x colore->['grey', 'black'], size->['12cm', '18cm'] etc
    public function get_filter_checked_values()
    {
        $checked_values = [];
        if (!empty($_GET['filter_marche'])) {
            $checked = $_GET['filter_marche'];
            $checked_values[] = ['marche' => $checked];
        }
        if (!empty($_GET['filter_sesso'])) {
            $checked = $_GET['filter_sesso'];
            $checked_values[] = ['sesso' => $checked];
        }
        if (!empty($_GET['filter_min_prezzo'])) {
            $checked = $_GET['filter_min_prezzo'];
            $checked_values[] = ['filter_min_prezzo' => $checked];
        }
        if (!empty($_GET['filter_max_prezzo'])) {
            $checked = $_GET['filter_max_prezzo'];
            $checked_values[] = ['filter_max_prezzo' => $checked];
        }
        if (!empty($_GET['filter_color'])) {
            $checked = $_GET['filter_color'];
            $checked_values[] = ['filter_color' => $checked];
        }
        if (!empty($_GET['filter_taglia'])) {
            $checked = $_GET['filter_taglia'];
            $checked_values[] = ['filter_taglia' => $checked];
        }
        return $checked_values;
    }

    public function get_search_entered_values()
    {
        $checked_values = [];
        if (!empty($_GET['search'])) {
            $checked = $_GET['search'];
            $checked_values[] = ['search' => $checked];
        }

        return $checked_values;
    }

    //        separete array vlaues from checked array we get to do the filtring in query
    public function filter_array_to_db($checked_values, $filter_name)
    {
        $filter_values = [];
        foreach ($checked_values as $c){
            foreach ($c as $key=>$i){
                if ($key === $filter_name){
                    $filter_values[] = $i;
                }
            }
        }
        return $filter_values;

    }

    public function search()
    {

        $item = Item::where('title', 'LIKE', "%{['title']}%")
            ->take(25)
            ->get();

        return [
            'items' => $item,
        ];
    }
}
