<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 21:32
 */

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
