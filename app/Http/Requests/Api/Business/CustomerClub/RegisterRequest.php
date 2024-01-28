<?php

namespace App\Http\Requests\Api\Business\CustomerClub;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'min:1',
            ],
            'family' => [
                'required',
                'string',
                'min:1',
            ],
            'mobile' => [
                'required',
                'string',
//                'numeric',
                'size:11',
            ],
            'birth_date' => [
                'required',
                'date',
                'min:1',
            ],
            'gender' => [
                'required',
                Rule::in(['man', 'woman',]),
                'min:1',
            ],
        ];
    }
}
