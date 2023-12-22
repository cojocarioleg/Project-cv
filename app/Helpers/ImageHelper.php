<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    public static function uploadImage($file, $nameFolder = null, $image = null,)
    {
        if ($file->hasFile('image')) {
            if ($image) {
                Storage::delete($image);
            }
            return $file->file('image')->store("images/{$nameFolder}");
        }
        return $image;
    }

    public static function getImageContent($image)
    {
        if (!$image) {
            return asset('assets/images/no_img.png');
        } elseif (substr($image, 0, 5) == 'https')
            return ($image);
        return asset("uploads/{$image}");
    }
}
