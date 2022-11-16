<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\ItemSize;

class ItemController extends Controller
{

    public function selectedItems(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages/items_page', [
            'categories' => Category::tree(),
            'categories_urls' => $this->product_path_url(),
            'path_url' => explode('/', str_replace('http://127.0.0.1:8000/categoria-prodotto/', '/', url()->current())),
            'items' => $this->items($this->get_filter_checked_values()),
            'filtered_values' => $this->get_filter_checked_values(),
            'marca' => $this->filter_format('marche'),
            'gendre' => $this->filter_format( 'genere'),
            'size_filter' => $this->size_filter_format(),
            'min_price' => $this->filter_value($this->get_filter_checked_values(), 'filter_min_prezzo'),
            'max_price' => $this->filter_value($this->get_filter_checked_values(), 'filter_max_prezzo'),
        ]);
    }

    // return products ready for front-end
    public function items($checked_values): array
    {
        $marche_filter = $this->filter_value($checked_values, 'marche');
        $sesso_filter = $this->filter_value($checked_values, 'sesso');
        $min_price_filter = $this->filter_value($checked_values, 'filter_min_prezzo');
        $max_price_filter = $this->filter_value($checked_values, 'filter_max_prezzo');
        $color_filter = $this->filter_value($checked_values, 'filter_color');
        $search_entered_values = $this->get_search_entered_value();
        $search = $this->filter_value($search_entered_values,'search');

//        if we have done the search it will return the data with the search of tittle based on the search
        if (!empty($search[0][0])){
            $items = Item::with(['gallery', 'sizes'])
                ->whereIn('id', $this->items_id($this->category_items()))
                ->where('title', 'LIKE',$search[0][0] . '%')
                ->orderBy('price', 'desc')
                ->paginate(12)
                ->toArray();
        }
        else{
//            if we have not done search and filters it will return the all the chosen category data
            if (empty($checked_values)){
                $items = Item::with(['gallery', 'sizes'])
                    ->whereIn('id', $this->items_id($this->category_items()))
                    ->orderBy('price', 'desc')
                    ->paginate(12)
                    ->toArray();
            }
//            if we have done the filters it will return the data with the specific filtration chosen
            else{
                $items = Item::with(['gallery', 'sizes'])
                    ->whereIn('id', $this->items_id($this->category_items()))
                    ->where('marche', $marche_filter)
                    ->where('genere', $sesso_filter)
                    ->where('colore', $color_filter)
                    ->orderBy('price', 'desc')
                    ->whereBetween('price', [$min_price_filter, $max_price_filter])

                    ->paginate(12)
                    ->toArray();
            }
        }
        return $items;
    }

    // get all the filter values of the given array we enter e.x => we are in a category pappa and we want to know all the filter values like
    //  for this category [ 'marche' => ['adidas' , 'nike' etc] ]

    public function filter_format($filter): array
    {
        $items = $this->getCurrentItems();

        $gendre_filter_values = [];
        foreach ($items as $vale) {
            foreach ($gendre_filter_values as $i) {
                if ($vale[$filter] == $i) {
                    continue 2;
                }
            }
            $gendre_filter_values[] = $vale[$filter];
        }
        return $gendre_filter_values;

    }
    //   get all the filter values of the given arrey we enter e.x => we are in a category bambini and we want to know all the filter values like
    //   for this category [ 'size' => ['12cm' , '13cm' ] ] etc
    public function size_filter_format(): array
    {
        $items = $this->getCurrentItems();
        $sizes_filter_values = [];
        foreach ($items as $value) {

            if (is_array($value['sizes'])) {
                foreach ($value['sizes'] as $i) {
                    $sizes_filter_values[] = $i;
                }
            } else {
                $sizes_filter_values[] = $value['sizes'];
            }
        }

        $size_filters = [];
        foreach ($sizes_filter_values as $value) {
            foreach ($size_filters as $i) {
                if ($value['taglia'] == $i or $value['taglia'] == null) {
                    continue 2;
                }
            }
            $size_filters[] = $value['taglia'];
        }
        return $size_filters;
    }

    public function category_items()
    {
        return Category::with('items')
            ->where('link', 'like', str_replace('http://127.0.0.1:8000/categoria-prodotto/', '/', url()->current()) . '%')
            ->get()
            ->toArray();
    }

    public function getCurrentItems(): array
    {


        return Item::with(['gallery', 'sizes'])
            ->whereIn('id', $this->items_id($this->category_items()))
            ->get()
            ->toArray();
    }

    //   get the path and return the numbers of the categories url
    public function product_path_url(): int
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

    //   get all the items id of the items in the choosen category
    public function items_id($category_items): array
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

    //   get the values of the choosen filter  e.x colore->['grey', 'black'], size->['12cm', '18cm'] etc
    public function get_filter_checked_values(): array
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

    //   get the values of the search  input
    public function get_search_entered_value(): array
    {
        $checked_values = [];
        if (!empty($_GET['search'])) {
            $checked = $_GET['search'];
            $checked_values[] = ['search' => $checked];
        }

        return $checked_values;
    }

    //   separete array vlaues from checked array we get to do the filtring in query
    public function filter_value($checked_values, $filter_name): array
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

    //    return selected item
    public function selectedItem()
    {

        $link = str_replace('http://127.0.0.1:8000/', 'https://www.prenatal.com/', url()->current());
        $itemSizes = [];
        $item = (new Item())->getCurrentItem($link);
        if ($item !== null && $item['hasSizes']) {
            $itemSizes = (new ItemSize())->getSizes($item['id']);
        }
        return view('pages/item', [
            'categories' => Category::tree(),
            'item' => $item,
            'itemSizes' => $itemSizes,

        ]);
    }


}
