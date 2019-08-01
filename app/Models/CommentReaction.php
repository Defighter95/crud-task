<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 21:45
 */

namespace Models;

use Illuminate\Database\Eloquent\Model;

class CommentReaction extends Model
{
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
