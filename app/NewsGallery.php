<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class NewsGallery extends Model
{
    public function new()
    {
        return $this->belongsTo(News::class);
    }
}
