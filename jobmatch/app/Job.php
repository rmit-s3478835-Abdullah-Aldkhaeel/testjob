<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = [

        'photo_id',
        'job_title',
        'skill1',
        'skill2',
        'skill3',
        'interests',
        'description',
        'wage',


        ];

    protected $primaryKey = 'id';

    public function user(){


        return $this->belongsTo('App\User');


    }



    public function photo(){


        return $this->belongsTo('App\Photo');


    }

}
