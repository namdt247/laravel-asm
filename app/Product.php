<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    private static $cloudinary_link = 'https://res.cloudinary.com/bigbignoobbb/image/upload/';

    public function category(){
        return $this->belongsTo('App\Category', 'categoryId', 'id');
    }

    public function getLargePhotoAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $photos = explode(',', $this->thumbnail);
        return self::$cloudinary_link . $photos[0] . '.jpg';
    }

    public function getLargePhotosAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array('https://thanhtra.com.vn/image/images/noimages.png');
        }
        $list_photos = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . $p . '.jpg');
            }
        }
        return $list_photos;
    }
}
