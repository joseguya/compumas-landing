@extends('layouts.mail')

{{--Page title--}}
@section('title')
    Contacto
    @parent
@stop


{{-- Page content --}}
@section('content')

    <tr>
        <td colspan="2" class="content-block" style="padding-right: 15px; padding-left: 15px; padding-top: 30px; padding-bottom: 15px">
            <h3 style="font-family: 'Trebuchet MS'; font-size: large; font-weight: 700; ">Solicitud Compumás</h3>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="content-block" style="padding-right: 15px; padding-left: 15px; text-align: left; padding-top: 15px; padding-bottom: 50px; font-family: 'Trebuchet MS'; font-size: medium">
            ¡Hola! Recibimos tu formulario para asociarte a Compumás.
            El equipo se pondrá en contacto con usted <strong>lo antes posible</strong>.
            <br>
            <br>
            <p style="text-align: left; font-style: italic;">
                Si no ha sido usted puede ignorar el mail o póngase en contacto con nosotros a <strong>info@compumarket.com.py</strong>.
            </p>
        </td>
    </tr>

@stop
