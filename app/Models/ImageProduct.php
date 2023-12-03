<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'product_id',];

    public function getImage()
    {
       return ImageHelper::getImageContent($this->image);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
