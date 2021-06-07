<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded =['id'];


    //Relacion 1  a 1

    public function description(){
        return $this->hasOne('App\Models\Description');
    }


    //Relacion uno a muchos inversa
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }
    //Relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
    //Relacion uno a uno polimorfica

    public function resource(){
        return $this->morphTo('App\Models\Resource','resourceable');

    }

    //Relacion uno a muchos Polimorfica
    public function comments(){
        return $this->morphToMany('App\Models\Comment','commentable');
    }

    public function reactions(){
        return $this->morphToMany('App\Models\Reaction','reactionable');
    }



}
