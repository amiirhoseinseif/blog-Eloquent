<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Posts extends Model
{
    public $TblName = 'posts';
    public $timestamps = false;
    function categoryOfPosts()
    {
        return $this->hasmany ('App\Models\Categories','id','category_id');
    }

    function commentsOfPosts()
    {
        return $this->morphMany ('App\Models\Comments','post');
    }
}
