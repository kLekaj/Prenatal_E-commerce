<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_items');
    }

    public function sizes()
    {
        return $this->hasMany(ItemSize::class, 'parent_id');
    }
    public function getCurrentItem($link){

        return Item::with(['gallery', 'sizes'])
            ->where('link', 'like', $link . '%')
            ->first()
            ->toArray();
    }

}
