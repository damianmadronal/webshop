<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersProduct extends Model
{
    protected $table = 'products_orders';
    protected $fillable = ['product_id', 'order_id', 'quantity', 'price'];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
