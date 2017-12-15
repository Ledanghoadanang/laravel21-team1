<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table='products';
  protected $fillable = ['name','quantity','price','image','description','id_branch'];
  protected $dates = ['deleted_at'];
  public function branch(){
    return $this->belongsTo('App\Branch');
  }
  public function order_details(){
    return $this->belongsToMany('App\OrderDetail');
  }

}
