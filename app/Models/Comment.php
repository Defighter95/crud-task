<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 21:05
 */

namespace Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 *
 * @property int product_id
 */
class Comment extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
