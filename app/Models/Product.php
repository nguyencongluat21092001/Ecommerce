<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'brand_id','Product_category_id','name','description','content','price','qty','discount','weight','featured','tag','sku'
    ];
    protected $primarykey = 'id';
    protected $guarded = [];


    //productcategory
    public function productcategory()
        {  
        return $this->belongsTo(ProductCategory::class,'product_category_id','id');
        //--------------------- Name Models , FK ,PK  ---------------------//
        }

    //brands
    public function brand()
        {
        return $this->belongsTo(Brand::class,'brand_id','id');
        //--------------------- Name Models , FK ,PK  ---------------------//
        }


    //productimage

    public function productImages()
        {
        return $this->hasMany(ProductImage::class,'product_id','id');
        }


    //productcomment
    public function productComments()
        {
        return $this->hasMany(ProductComment::class,'product_id','id');
        }

    //productdetail
    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class,'product_id','id');
    }




}
