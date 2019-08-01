<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 21:48
 */

namespace Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateCommentReactionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'reaction' => [
                'required',
                Rule::in('like', 'dislike'),
            ],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
