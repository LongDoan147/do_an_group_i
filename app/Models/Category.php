<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tbl_category';
    protected $primaryKey = 'category_id';
    protected $fillable =['category_name','category_desc','category_status','created_at','updated_at'];
    public function product(){
        return $this->hasMany('App\Product');
    }
    use HasFactory;
}
