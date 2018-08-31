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
            'pnombre'=>'required|regex:/^[a-zA-Z]+$/u',
            'snombre'=>'max:100|regex:/^[a-zA-Z]+$/u',
            'papellido'=>'required|regex:/^[a-zA-Z]+$/u',
            'sapellido'=>'max:100|regex:/^[a-zA-Z]+$/u',
            'genero'=>'required',
            'numcedula'=>'required|max:14',
            'correoe'=>'email',
            'tconvencional '=>'numeric|min:8|max:8',
            'tcelular'=>'required|numeric',
            'seguro'=>'required',
            'municipio'=>'required',
            'nombremadre'=>'regex:/^[a-zA-Z]+$/u',
            'telmadre'=>'min:8|max:8',
            'nombrepadre'=>'regex:/^[a-zA-Z]+$/u',
            'telpadre'=>'min:8|max:8',
            'emergencia'=>'regex:/^[a-zA-Z]+$/u',
        ];
    }
}
