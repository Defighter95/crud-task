<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 21:32
 */

namespace Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePaymentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'order_id' => 'required',
            'system' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
