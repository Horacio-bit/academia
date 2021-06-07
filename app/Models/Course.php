<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded =['id','status'];
    protected $withCount=['students'];


    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3; 
    public function getRatingAttribute(){
        return $this->reviews->avg('rating');
    }

    //Relacion 1 a muchos
    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }
    public function requirements(){
        return $this->hasMany('App\Models\Requirement');
    }
    public function goals(){
        return $this->hasMany('App\Models\Goal');
    }   
    
    public function audiences(){
        return $this->hasMany('App\Models\Audience');
    }   
    
    public function sections(){
        return $this->hasMany('App\Models\Section');
    }

    //Relacion 1 a muchos inversa
    public function teacher(){
        return $this->belongsTo('App\Models\User','user_id');
}
    public function level(){
        return $this->belongsTo('App\Models\level');
    }
    
    public function category(){
        return $this->belongsTo('App\Models\level');
    }
    
    public function price(){
        return $this->belongsTo('App\Models\level');
    }
    
    //Relacion muchos a muchos 
    public function students(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion 1 a 1 polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }

    public function lessons(){
        return $this->hasManyThrough('App\Models\Lesson','App\Models\Section');
    }

}

