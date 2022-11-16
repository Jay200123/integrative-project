<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $table = 'customers';

    public $timestamps = false;

    protected $fillable = ['fname','lname','address','phone','town','city','customer_image','user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
