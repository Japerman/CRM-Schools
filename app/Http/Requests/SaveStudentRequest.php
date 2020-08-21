<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //return false; //$this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required',
            'surname' => 'required',
            'school_id' => 'required',
            'date' => 'required',
            'city' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El estudiante necesita un nombre',
            'slug.required' => 'El slug es necesario para la url',
            'surname.required' => 'Los apellidos son necesários',
            'school_id.required' => 'El Colegio es obligatorio',
            'date.required' => 'Indicar la fecha',
            'city.required' => 'Indicar la Ciudad Natal',
        ];
    }
}
