<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\ItemSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::transaction(function (){
            foreach ($this->items_data() as $data){
                ItemSize::insert($data);
            }
        });
    }


    public function items_data()
    {
        $xml_data = parseXMLFile('data.xml')['channel']['item'];

        $item_sizes = [];

        foreach ($xml_data as $item) {
            if(strcmp($item['id'], $item['parent_id']) !== 0){
                $items = [
                    'id' => $item['id'],
                    'stock' => $item['stock'],
                    'availability' => $item['availability'],
                    'taglia' => $item['taglia'],
                    'parent_id' => $item['parent_id']
                ];
                $items = empty_arr_to_null($items);
                $item_sizes[] = $items;
            }
        }
        return $item_sizes;
    }
}
