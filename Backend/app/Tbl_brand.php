<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_brand extends Model
{
    protected $fillable = [
        'brand_code', 'brand_name', 'brand_icon','brand_id_user','brand_description'
    ];
    public function user()
    {
    	return $this->belongsTo('App\User','brand_id_user');
    }
    public function product()
    {
    	return $this->hasMany('App\Tbl_product');
    }

}
