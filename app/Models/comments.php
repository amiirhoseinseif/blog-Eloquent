<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Comments extends Model
{
    public $TblName = 'comments';
    public $timestamps = false;
//    function CommentPost()
//    {
//        return $this->morphMany('App\Models\Posts','id','post_id');
//    }
}
