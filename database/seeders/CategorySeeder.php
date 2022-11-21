<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::transaction(function (){
            foreach ($this->categories_data() as $data){
                Category::insert($data);
            }
        });
    }

    /**
     * Get the data from xml file to insert in db.
     */
    public function categories_data()
    {
        $xmlItems = parseXMLFile('data.xml')['channel']['item'];

        $categories = [];
        $category_unique = [];


        foreach ($xmlItems as $item){
            if($item['id'] === $item['parent_id']){
                if (! empty($item['categories'])){
                    $categoryList = $item['categories']['list'];
                    if(gettype(array_key_first($categoryList)) === 'integer'){
                        foreach ($categoryList as $list){
                            $categoriesToAdd = $this->getCategories($list, $category_unique);
                            $categories = array_merge($categories, $categoriesToAdd);
                        }
                    }
                    else{
                        $categoriesToAdd = $this->getCategories($categoryList, $category_unique);
                        $categories = array_merge($categories, $categoriesToAdd );
                    }
                }
            }
        }
        foreach ($categories as &$value){
            $value['name'] = html_entity_decode($value['name']);
        }
        return $categories;
    }

    /**
     * Get the `processed` categories list.
     * Get categories and processed them
     * if there are category duplication and set the parent_id
     * and the the php built-in function slug for each category
     */
    public function getCategories($list, &$category_unique)
    {
        $categories = [];
        $previousCategory = reset($list);
        $previousCategory['link'] = '';
        $previousCategory['id'] = null;
        foreach ($list as $category){
            $category['name'] = str_replace('&amp;', 'e',strtolower($category['name']));
//            $category['name'] = str_replace('&amp;', 'e', $category['name']);
            $category['slug'] = Str::slug($category['name']);
            $category['link'] = $previousCategory['link'].'/'.Str::slug($category['name']);
            if(! in_array($category['id'], $category_unique)){
                $category_unique[] = $category['id'];
                $category['parent_id'] = $previousCategory['id'];
                $categories[] = $category;
            }
            $previousCategory  = $category;
        }
        return $categories;
    }
}
