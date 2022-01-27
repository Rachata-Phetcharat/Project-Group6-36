<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Type_product extends Model
{
    protected $primaryKey = 'id_type';

    public function product(){
        return $this->hasMany(Product::class,'id_type');
    }

    public function admin(){
        return $this->hasOne(User::class,'id','id_admin');
    }
}
