<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Branch;
use App\OrderDetail;


class Product extends Model
{
  protected $table='products';
  protected $fillable = ['name','quantity','price','image','description','branch_id'];
  protected $dates = ['deleted_at'];

  public function branch(){
    return $this->belongsTo('App\Branch');
  }

  public function order_details(){
    return $this->belongsToMany('App\OrderDetail');
  }

}
