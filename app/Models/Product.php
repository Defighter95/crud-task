<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 20:31
 */

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
