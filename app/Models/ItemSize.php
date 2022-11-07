<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSize extends Model
{
    use HasFactory;

    public function getSizes($itemId){
        return ItemSize::where('parent_id', $itemId)->get();
    }

}
