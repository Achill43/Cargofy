<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Load extends Model
{
    protected $fillable = ['name', 'weight'];
    public function points(){
        return $this->hasMany('App\Point', 'load_id');
    }
}
