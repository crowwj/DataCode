<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido_paterno' => ['required', 'string', 'max:255'],
            'apellido_materno' => ['required', 'string', 'max:255'],
            'carrera' => ['required', 'string', Rule::in(['ing_sistemas'])],
            'semestre' => ['required', 'integer', 'between:1,9'],
            'grupo' => ['required', 'string', 'max:10'],
            'turno' => ['required', 'integer', Rule::exists('shifts', 'id')],
            'matricula' => ['required', 'string', 'max:50', Rule::unique('users', 'institutional_id')],
            'contacto' => ['required', 'string', 'max:20'],
            'correo' => ['required', 'email', 'max:191', Rule::unique('users', 'email')],
            'municipio' => ['required', 'integer', Rule::exists('municipalities', 'id')],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'nombre' => 'nombre',
            'apellido_paterno' => 'apellido paterno',
            'apellido_materno' => 'apellido materno',
            'carrera' => 'carrera',
            'semestre' => 'semestre',
            'grupo' => 'grupo',
            'turno' => 'turno',
            'matricula' => 'matrícula',
            'contacto' => 'contacto',
            'correo' => 'correo electrónico',
            'municipio' => 'municipio',
            'password' => 'contraseña',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'email' => 'El campo :attribute debe ser un correo válido.',
            'between' => 'El campo :attribute debe estar entre :min y :max.',
            'in' => 'El campo :attribute seleccionado no es válido.',
            'exists' => 'El campo :attribute seleccionado no es válido.',
            'min.string' => 'El campo :attribute debe tener al menos :min caracteres.',
            'confirmed' => 'La confirmación de :attribute no coincide.',
            'correo.unique' => 'Este correo electrónico ya está registrado.',
            'matricula.unique' => 'Esta matrícula ya está registrada.',
        ];
    }
}
