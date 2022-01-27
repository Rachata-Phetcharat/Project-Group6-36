<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $primaryKey = 'id_content';

    public function admin(){
        return $this->hasOne(User::class,'id','id_admin');
    }
}
