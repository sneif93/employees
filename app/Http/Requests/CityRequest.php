<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class CityRequest extends FormRequest
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
            'name' => 'required',
            'fk_id_country' => 'required|exists:country,id_country'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator);
         //abort(403, 'Unauthorized action.');
        // throw new HttpResponseException(response()->json($validator->errors(), 400));
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof CustomExceptio) {
            return response()->view('errors.custom', [], 500);
        }
    
        return parent::render($request, $exception);
    }
    }
