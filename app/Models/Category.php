<?php

namespace App\Models;

use App\Traits\Slug;
use App\Traits\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, Slug, Scope;

    protected $fillable = ['name', 'slug', 'image'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected function image() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/categories/'. $value),
        );
    }
}
