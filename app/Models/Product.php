<?php

namespace App\Models;

use App\Traits\TimestampSerializable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;


class Product extends Model implements TranslatableContract
{
    use HasFactory,Translatable,TimestampSerializable;

    protected $guarded = [];

    public $translatedAttributes = ['title', 'text'];

    public function Category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    
    public function ProductTranslation()
    {
        return $this->hasMany(ProductTranslation::class,'product_id','id');
    }
}
