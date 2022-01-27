<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $primaryKey = 'id_header';

    public function admin(){
        return $this->hasOne(User::class,'id','id_admin');
    }
}
