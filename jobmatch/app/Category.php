<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name'];


    public function getData(){

       $date= $this->where('id','>','3').get();
        return $date;
    }
}
