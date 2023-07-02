<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleStoreUpdateResource extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // People
            'marital_status_id' => 'required',
            'name' => 'required|max:250',
            'gender' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'date_birth' => 'required|date|before_or_equal:' . now()->subYears(18)->format('Y-m-d'),

            // Address
            'state' => 'required',
            'county' => 'required',
            'cep' => 'nullable',
            'street' => 'required',
            'number' => 'required',
            'district' => 'required',
            'complement' => 'nullable|max:250',
        ];
    }
}
