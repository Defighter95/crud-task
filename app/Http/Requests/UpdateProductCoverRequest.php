<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 20:56
 */

namespace Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductCoverRequest extends FormRequest
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
