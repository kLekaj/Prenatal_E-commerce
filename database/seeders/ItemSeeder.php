<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::transaction(function () {
            foreach ($this->items_data() as $data) {
                Item::insert($data);
            }
        });
    }


    public function items_data()
    {
        $xmlItems = parseXMLFile('data.xml')['channel']['item'];

        $items = [];

        foreach ($xmlItems as $item) {
            if ($item['id'] === $item['parent_id']) {

                /**
                 * Remove selected data from array
                 */
                foreach (['gallery', 'categories', 'parent_id'] as $key) {
                    unset($item[$key]);
                }
                $item = empty_arr_to_null($item);
                $item['hasSizes'] = false;
                $item['slug'] = Str::slug($item['title']);
                $items[] = $item;
            }
        }

        $itemIds = array_column($items, 'id');

        foreach ($xmlItems as $item) {
            if ($item['id'] !== $item['parent_id']) {
                $itemId = array_search($item['parent_id'], $itemIds);

                $items[$itemId]['price'] = $item['price'];
                $items[$itemId]['sale_price'] = $item['sale_price'];
                $items[$itemId]['vip_price'] = $item['vip_price'];
                $items[$itemId]['hasSizes'] = true;
                $items[$itemId] = empty_arr_to_null($items[$itemId]);
            }
        }

        return $items;
    }
}
