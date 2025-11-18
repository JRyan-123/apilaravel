<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'name'          => 'required|string|max:100',
            'year_level'    => 'required|in:1,2,3,4',
            'section'       => 'required|in:A,B,C',
        ];
    }
    
    public function messages(): array
    {
        return [
            'year_level.in' => 'The year level must be 1, 2, 3, or 4.',
            'section.in' => 'The section must be A, B, or C.',
        ];        
    }
}
