<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'nombreCompleto' => 'required|string|max:255',
            'telefono' => 'required|string|unique:clientes',
            'email' => 'required|string|email|unique:clientes',
            'direccion' => 'required|string',
            'genero' => 'required|string',
            'fechaNacimiento' => 'nullable|date',
            'formaPago' => 'nullable|string',
        ];
    }
}