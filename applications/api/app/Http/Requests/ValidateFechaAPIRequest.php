<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateFechaAPIRequest extends Request
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
        $this->sanitize();
        return [
                'from' =>'required',
                'to' => 'required'    
        ];
    }

    public function sanitize()
    {
        $input = $this->all();      
        if ($this->has('from') && $this->has('to')){
            $input['from'] = filter_var($input['from'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW); //FILTER_FLAG_STRIP_LOW Remove characters with ASCII value < 32 
            //$input['fechaini'] = filter_var($input['fechaini'], FILTER_FLAG_STRIP_HIGH); No se pudo hacer petición a la API con esta validación (ASCII > 127)
            $input['to'] = filter_var($input['to'], 
            FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW); 
            $this->replace($input);
        }     
    }
}
