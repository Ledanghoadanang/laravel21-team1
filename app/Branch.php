<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table='branchs';
    protected $fillable = ['name','id_style'];
    protected $dates = ['deleted_at'];

    public function styles(){
      return $this->belongsToMany('App\Style');
    }
    public function products(){
      return $this->hasMany('App\Product');
    }
}
