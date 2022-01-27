<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type_product;

class Product extends Model
{
    protected $primaryKey = 'id_product';

    public function type(){
        return $this->belongsTo(Type_product::class,'id_type');
    }

    public function admin(){
        return $this->hasOne(User::class,'id','id_admin');
    }
}