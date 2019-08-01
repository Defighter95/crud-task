<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 21:08
 */

namespace Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductCommentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'product_id' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
