<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::transaction(function (){
            foreach ($this->gallery_data() as $data){
                Gallery::insert($data);
            }
        });
    }

    public function gallery_data()
    {
        $xmlItems = parseXMLFile('data.xml')['channel']['item'];
        $gallery = [];

        foreach ($xmlItems as $item) {
            if (isset($item['gallery']['image'])) {
                $images = $item['gallery']['image'];
                if (gettype($images) === 'string') {
                    $data = [
                        'image' => $images,
                        'item_id' => $item['id']
                    ];
                    $gallery[] = $data;
                } else {
                    foreach ($images as $image) {
                        $data = [
                            'image' => $image,
                            'item_id' => $item['id']
                        ];
                        $gallery[] = $data;
                    }
                }
            }
        }
        return $gallery;
    }
}
