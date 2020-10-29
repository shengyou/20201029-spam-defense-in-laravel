<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use nickurt\Akismet\Rules\AkismetRule;

class FeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:255',
            'email' => 'required|email',
            'mobile' => 'nullable|min:10|max:10',
            'message' => 'required',
            'akismet' => [new AkismetRule(
                request()->input('email'),
                request()->input('name')
            )]
        ];
    }
}
