<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'products';

    public $timestamps = false;

    protected $fillable = ['brand','description','cost_price','sell_price','product_image'];

    public function customers(){
        return $this->belongsTo('App/Models/Customer');
    }
}
