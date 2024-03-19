<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'slug',
    'images',
    'description',
    'price',
    'is_active',
    'is_featured',
    'in_stock',
    'on_sale'
    ];

    protected $casts = ['images' => 'array'];

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}