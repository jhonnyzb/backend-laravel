<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class RequestAddRoom extends FormRequest
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
            'rooms_permitted' => 'required|integer',
            'hotel_id' => 'required|integer',
            'type_accommodation' => 'required|integer',
            'rooms' => 'required|integer|max_capacity:' . $this->input('hotel_id') . ',' . $this->input('rooms_permitted'),
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
            'hotel_id.required' => 'El Id hotel es obligatorio.',
            'hotel_id.integer' => 'El Id hotel debe ser un número entero.',
            'type_accommodation.required' => 'El campo tipo alojamiento es obligatorio.',
            'type_accommodation.integer' => 'El campo tipo alojamiento debe ser un número entero.',
            'rooms.max_capacity' => 'Excedió el número máximo de habitaciones',
            'rooms.required' => 'El campo habitaciones es obligatorio',
            'rooms.integer' => 'El campo habitaciones debe ser un número entero.',
        ];
    }
}
