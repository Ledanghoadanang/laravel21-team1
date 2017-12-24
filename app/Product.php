<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Branch;
use App\OrderDetail;


class Product extends Model
{
  protected $table='products';
  protected $fillable = ['name','quantity','price','image','description','id_branch'];
  protected $dates = ['deleted_at'];

  public function branch(){
    return $this->belongsTo('App\Branch', 'id_branch', 'id');
  }

  public function order_details(){
    return $this->belongsToMany('App\OrderDetail');
  }

}
