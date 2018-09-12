<?php

namespace SistemaMedico\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtletaFormRequest extends FormRequest
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
            'foto'=>'mimes:jpeg,bmp,png|required',
            'pnombre'=>'required',
            'snombre'=>'max:100',
            'papellido'=>'required',
            'sapellido'=>'max:100',
            'genero'=>'required',
            'numcedula'=>'required|max:14',
            'correoe'=>'email',
            'tconvencional '=>'numeric|min:8|max:8',
            'tcelular'=>'required|numeric',
            'seguro'=>'required',
            'municipio'=>'required',
            
        ];
    }
}
