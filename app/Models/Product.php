<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Helpers\ImageHelper;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class)->withTimestamps();
    }

    public function types()
    {
        return $this->belongsToMany(Type::class)->withTimestamps();
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class)->withTimestamps();
    }

    public function offers()
    {
        return $this->belongsToMany(Offer::class)->withTimestamps();
    }

    protected $fillable = ['title', 'description', 'image', 'category_id', 'price', 'new_price', 'qty',];

    public function getImage()
    {
       return ImageHelper::getImageContent($this->image);
    }
}
