<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class RegisterRequest extends FormRequest
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
            'nombres' => ['required', 'string', 'min:3', 'max:30'],
            'apellidos' => ['required', 'string', 'min:3', 'max:30'],
            'cliente' => ['required', 'string'],
            'dni' => ['required', 'integer'],
            'email' => ['required', 'email', 'max:40', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }

    public function attributes() {
       
        return [
            'nombres'   => 'nombre',
            'apellidos' => 'apellido',
            'cliente'   => 'tipo de documento',
            'dni'       => 'núemro de identidad',
            'email'     => 'correo',
            'password'  => 'contraseña'
        ];
    }
    
    public function messages() {
     
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute debe tener mínimo :min caracteres',
            'max' => 'El campo :attribute debe tener máximo :max caracteres',
            'email.email' => 'El :attribute incumple formato.',

        ];
    }
    
    public function formatErrors(Validator $validator) {
      

        return [
            'error' => $validator->errors()->first()
        ];
    }
}
