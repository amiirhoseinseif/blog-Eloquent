<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $TblName = 'categories';
    public $timestamps = false;
    function Posts()
    {
        return $this->hasmany ('App\Models\Posts','category_id','id');
    }
}
