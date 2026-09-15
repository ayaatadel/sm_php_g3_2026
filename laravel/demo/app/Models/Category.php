<?php

namespace App\Models;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // fillable , guarded
    protected $fillable=["name","description"]; // coulms that y have access to it
    // protected $guarded = ["name","description"]; // coulms that y don't have access to it

    function orders(){
        return $this->hasMany(Order::class);
    }

    function products()
    {
        return $this->hasMany(Product::class);
    }
}
