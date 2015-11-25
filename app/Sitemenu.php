<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitemenu extends Model
{
    public function getMenu(){
        return $this->active()->orderBy('weight')->get();
    }

    public function scopeActive($query){
        return $query->where(['published'=>1]);
    }

    public function getMeta($url)
    {
        return $this->where(['url'=>$url])->first();
    }
}
