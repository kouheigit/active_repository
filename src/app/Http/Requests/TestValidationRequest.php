<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'comment'=>['request','string','max:300'],
        ];
    }
    public function messages(): array
    {
        return [
            'comment.require'=>'コメントを入力してください',
            'commnet.string'=>'コメントは文字列で入力してください',
            'comment.max'=>'コメントは300文字以内にしてください',
        ];
    }
}
