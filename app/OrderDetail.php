<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $table='order_details';
  protected $fillable = ['name','quantity','total_price','id_product','id_order'];
  protected $dates = ['deleted_at'];

  public function products(){
    return $this->belongsToMany('App\Product');
  }
  public function order(){
    return $this->belongsTo('App\Order');
  }
}
