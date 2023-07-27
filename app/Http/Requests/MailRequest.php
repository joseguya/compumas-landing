<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET': {
                return [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'id_number' => 'required',
                    'email' => 'required',
                    'work_address' => 'required',
                    'antiquity' => 'required',
                    'reference_1' => 'required',
                    'phone_number' => 'required',
                    'home_address' => 'required',
                    'company' => 'required',
                    'company_phone' => 'required',
                    'reference_2' => 'required',
                    'product' => 'required',
                    'buyer' => 'required',
                    'news' => 'required',
                ];
            }
            break;

            case 'DELETE': {
                return [];
            }
                break;
            case 'POST': {

                return [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'id_number' => 'required',
                    'email' => 'required',
                    'work_address' => 'required',
                    'antiquity' => 'required',
                    'reference_1' => 'required',
                    'phone_number' => 'required',
                    'home_address' => 'required',
                    'company' => 'required',
                    'company_phone' => 'required',
                    'reference_2' => 'required',
                    'product' => 'required',
//                    'buyer' => 'required',
//                    'news' => 'required',
                ];
            }
                break;
            case 'PUT':
            case 'PATCH': {

                return [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'id_number' => 'required',
                    'email' => 'required',
                    'work_address' => 'required',
                    'antiquity' => 'required',
                    'reference_1' => 'required',
                    'phone_number' => 'required',
                    'home_address' => 'required',
                    'company' => 'required',
                    'company_phone' => 'required',
                    'reference_2' => 'required',
                    'product' => 'required',
                    'buyer' => 'required',
                    'news' => 'required',
                ];
            }
                break;
        }
    }


    public function messages()
    {
        return [
            'first_name.required' => 'Favor ingrese su nombre',
            'last_name.required' => 'Favor ingrese su apellido',
            'id_number.required' => 'Favor ingrese su número de cédula',
            'email.required' => 'Favor ingrese su mail',
            'work_address.required' => 'Favor ingrese su dirección laboral',
            'antiquity.required' => 'Favor ingrese su antigüedad laboral',
            'reference_1.required' => 'Favor ingrese una referencia laboral',
            'phone_number.required' => 'Favor ingrese un número telefónico',
            'home_address'.'required' => 'Favor ingrese su dirección particular',
            'home_address'.'required' => 'Favor ingrese su dirección particular',
            'company'.'required' => 'Favor ingrese el nombre de la empresa donde trabaja',
            'reference_2'.'required' => 'Favor ingrese otra referencia laboral',
            'product'.'required' => 'Favor ingrese el producto que desea',
            'buyer.required' => 'Favor indicar si es comprador',
            'news.required' => 'Favor indicar si desea recibir novedades',
        ];
    }
}
