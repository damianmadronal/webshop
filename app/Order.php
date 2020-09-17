<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = ['user_id'];
    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany('App\Product', 'products_orders')->withPivot('quantity')->withPivot('price');
    }
}
