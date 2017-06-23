<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;
class Good extends Model
{
    //
    protected $table = 'goods';
    protected $primaryKey = 'goods_id';

   // public function Type()
   //  {
   //  	return $this->hasMany('App\Type', 'id', 'typeid');
   //  }

   public function Type()
   {
   		return $this->belongsTo('App\Good','id', 'typeid');
   }

}
