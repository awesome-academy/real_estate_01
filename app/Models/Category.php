<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: quantien
 * Date: 08/10/2018
 * Time: 10:46
 */
class Category extends Model
{
    protected $guarded = ['id'];
//    protected $table = 'categories';

    public function childs()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'category_id', 'id');
    }
}
