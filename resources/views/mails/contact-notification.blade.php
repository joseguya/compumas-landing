@extends('layouts.mail')

{{--Page title--}}
@section('title')
    Contacto
    @parent
@stop


@section('content')

    <tr>
        <td colspan="2" class="content-block" style="padding-right: 15px; padding-left: 15px; padding-top: 30px; padding-bottom: 15px;">
            <h3 style="font-family: 'Trebuchet MS'; font-size: large; font-weight: 700; ">¡Solicitud Compumás!</h3>
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-right: 15px; padding-left: 15px; text-align: left; padding-top: 15px; padding-bottom: 50px; font-family: 'Trebuchet MS'; font-size: medium">
            ¡Hola Compumás! Recibimos una nueva <i>solicitud para Compumás</i>.
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Nombre: {{isset($input) ? $input['first_name'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Apellido: {{isset($input) ? $input['last_name'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Nro. C.I.: {{isset($input) ? $input['id_number'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Nro. de teléfono: {{isset($input) ? $input['phone_number'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Email ingresado: {{isset($input) ? $input['email'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Dirección particular: {{isset($input) ? $input['home_address'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Dirección laboral: {{isset($input) ? $input['work_address'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Empresa: {{isset($input) ? $input['company'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Antigüedad: {{isset($input) ? $input['antiquity'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Teléfono laboral: {{isset($input) ? $input['company_phone'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Referencia 1: {{isset($input) ? $input['reference_1'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Referencia 2: {{isset($input) ? $input['reference_2'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Producto de interés: {{isset($input) ? $input['product'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Ha comprado en compumarket?: {{isset($input) ? $input['buyer'] : '-' }}
        </td>
    </tr>

    <tr>
        <td colspan="2" class="content-block" style="padding-top: 15px; padding-right: 15px; padding-left: 15px; font-family: 'Trebuchet MS'; font-size: medium; text-align: left;">
            Quiere recibir ofertas y novedades?: {{isset($input) ? $input['news'] : '-' }}
        </td>
    </tr>

@stop