<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::transaction(function (){
            foreach ($this->category_item() as $data){
                CategoryItem::insert($data);
            }
        });
    }
    public function category_item()
    {
        $items = parseXMLFile('data.xml')['channel']['item'];
        $category_items = [];

        foreach ($items as $item){
            if($item['id'] === $item['parent_id']) {
                if (! empty($item['categories'])) {

                    $categoryList = $item['categories']['list'];

                    if (gettype(array_key_first($categoryList)) === 'integer') {
                        foreach ($categoryList as $list) {
                            $data = [
                                'category_id' => end($list)['id'],
                                'item_id' => $item['id']
                            ];
                            $category_items[] = $data;
                        }
                    } else {
                        $data = [
                            'category_id' => end($categoryList)['id'],
                            'item_id' => $item['id']
                        ];
                        $category_items[] = $data;
                    }
                }
            }
        }
        return $category_items;
    }
}
