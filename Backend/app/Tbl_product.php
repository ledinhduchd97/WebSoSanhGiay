<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_product extends Model
{
    protected $fillable = [
        'product_code', 
        'product_name', 
        'product_id_brand',
        'product_price',
        'product_year_birth',
        'product_made_in',
        'product_outsole',
        'product_insole',
        'product_toe',
        'product_tongue',
        'product_vamp',
        'product_quater',
        'product_lacing',
        'product_topline',
        'product_shoelace',
        'product_lining',
        'product_technology',
        'product_id_user',
        'product_weight',
        'product_status',
        'product_image_total',
        'product_image_top',
        'product_image_left',
        'product_image_right',
        'product_image_with_model'
    ];
    public function user()
    {
    	return $this->belongsTo('App\User','product_id_user');
    }
    public function brand()
    {
    	return $this->belongsTo('App\Tbl_brand','product_id_brand');
    }
}
