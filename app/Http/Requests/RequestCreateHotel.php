<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RequestCreateHotel extends FormRequest
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
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'rooms' => 'required|integer',
            'nit' => [
                'required',
                'string',
                'max:255',
                'existe:hotels,nit',
            ],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'status' => true
        ], 422));
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El campo nombre es obligatorio.',
            'name.max' => 'El campo nombre no debe tener más de :max caracteres.',
            'city.required' => 'El campo ciudad es obligatorio.',
            'city.max' => 'El campo ciudad no debe tener más de :max caracteres.',
            'address.required' => 'El campo dirección es obligatorio.',
            'address.max' => 'El campo dirección no debe tener más de :max caracteres.',
            'nit.required' => 'El campo NIT es obligatorio.',
            'nit.max' => 'El campo NIT no debe tener más de :max caracteres.',
            'nit.existe' => 'El Hotel asociado a este NIT ya existe',
            'rooms.required' => 'El campo habitaciones es obligatorio.',
            'rooms.integer' => 'El campo habitaciones debe ser un número entero.',
        ];
    }
}
