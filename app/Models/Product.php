<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_product';
    protected $primaryKey = 'product_id';
    protected $fillable =['product_name','category_id','product_desc','product_content',
    'product_price','product_image','product_status','created_at','updated_at'];
    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
    use HasFactory;
}
