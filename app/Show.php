<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $primaryKey = 'id_show';

    public function admin(){
        return $this->hasOne(User::class,'id','id_admin');
    }
}
