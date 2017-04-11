<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = [

        'photo_id',
        'title',
        'description'

        ];

    public function user(){


        return $this->belongsTo('App\User');


    }



    public function photo(){


        return $this->belongsTo('App\Photo');


    }

}
