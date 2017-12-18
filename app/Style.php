<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
  protected $table='styles';
  protected $fillable = ['name'];
  public $timestamp = false;
  public function branchs(){
    return $this->belongsToMany('App\Branch');
  }
}
