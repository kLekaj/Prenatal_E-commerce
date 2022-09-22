<?php

namespace App\Models;

use App\Helpers\AssociativeArrayTree;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;

    /**
     * Get the category name in lowercase.
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
        );
    }

    //return the categories and subcategories ready to use in front-end

    public static function tree()
    {
        $allCategories = Category::orderBy("name", "desc")->get();

        $rootCategories = $allCategories->whereNull('parent_id');

        self::formatTree($rootCategories, $allCategories);
        return $rootCategories;
    }

    private static function formatTree($categories, $allCategories)
    {
        if (Str::of($categories)->trim()->isNotEmpty()) {
            foreach ($categories as $category) {
                $category->children = $allCategories->where('parent_id', $category->id)->values();

                if (Str::of($category->children)->trim()->isNotEmpty()) {
                    self::formatTree($category->children, $allCategories);
                }
            }
        }
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'category_items');
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

}
