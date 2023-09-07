<?php

namespace App\Http\Requests;

use App\Enums\SchoolEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StudenCardRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<int, string|Enum>|string>
     */
    public function rules(): array
    {
        return [
            'school' => ['required', new Enum(
                type: SchoolEnum::class,
            )],
            'description' => 'required',
            'is_internal' => ['required', 'boolean'],
            'user_id' => ['required',
                'exists:users,id'],
            'date_of_birth' => 'required|date',

            //
        ];
    }

   /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string>
     */
    public function messages()
    {
        return [
            'school' => 'l école est obligatoire.',
            'description' => 'la description est obligatoire.',
            'is_internal' => 'is internal est obligatoire.',
            'user_id' => 'le user id est obligatoire.',
            'date_of_birth' => 'la date de naissance est obligatoire.',
        ];
    }
}
