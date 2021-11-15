<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormationUpdateRequest extends FormRequest
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
            'nom'=> 'required|string',
            'description'=>'required|string',
            'categorie'=>'required|string',
            'chapitres'=>'required|string',
            'prix'=>'required|integer',
            'picture'=>'required|image'
        ];
    }
}