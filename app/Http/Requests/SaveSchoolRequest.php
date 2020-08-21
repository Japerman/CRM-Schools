<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveSchoolRequest extends FormRequest
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
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            //'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=200,min_height=200,max_width=20000,max_height=20000',
            'email' => 'required|email',
            'phone' => 'required',
            'website' => 'required|url'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El colegio necesita un nombre',
            'slug.required' => 'El slug es necesario para la url',
            'description.required' => 'La descripción es necesária',
            //'logo.required' => 'El logo es necesário',
            'email.required' => 'El Email es necesário',
            'phone.required' => 'El Teléfono es necesário',
            'website.required' => 'La página web es necesário'
        ];
    }
}
