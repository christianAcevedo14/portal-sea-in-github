<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'title_id' => 'required',
            'programmatic_unit_id' => 'required',
            'first_name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'app_id.0' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title_id.required' => 'Favor seleccionar el título que corresponde al usuario.',
            'programmatic_unit_id.required' => 'Favor seleccionar la Unidad Programática a la que pertenece el usuario.',
            'first_name.required' => 'El nombre del usuario es requerido.',
            'first_name.max' => 'El nombre debe tener menos de 255 caracteres.',
            'surname.required' => 'El primer apellido del usuario es requerido.',
            'surname.max' => 'El apellido debe tener menos de 255 caracteres.',
            'email.required' => 'El correo electrónico del usuario es requerido.',
            'email.email' => 'El correo electrónico es invalido.',
            'email.max' => 'El correo electrónico debe tener menos de 255 caracteres.',
            'email.unique' => 'El correo electrónico ingresado se encuentra en uso.',
        ];
    }
}
