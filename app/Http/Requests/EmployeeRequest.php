<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            
            "name"=>'required',
            "last_name"=>'required',
            "document_number"=>'required',
            "address"=>'required',
            "phone_number"=>'required',
            "city_id_city"=>'required',
            "document_type_id_document_type"=>'required',
            "id_job_position"=>'required',
        ];
    }
}
