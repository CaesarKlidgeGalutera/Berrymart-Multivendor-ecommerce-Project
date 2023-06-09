<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_name',
        'product_price',
        'category_id',
        'quantity',
        'description',
        'product_image',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    // public function orders()
    // {
    //     return $this->belongsToMany(Order::class)->withPivot('quantity', 'price');
    // }
}
