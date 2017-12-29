<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table='orders';
  protected $fillable = ['name','date_order','note','status','amount','name','phone',
  'adress','user_id'];
  protected $dates = ['deleted_at'];

  public function order_details(){
    return $this->hasMany('App\OrderDetail');
  }
  public function user(){
    return $this->belongsTo('App\User');
  }

}
