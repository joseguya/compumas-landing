<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="https://fonts.googleapis.com/css?family=Exo:500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet" type="text/css">

    <title>@yield('title')</title>

    @yield('header_styles')
    <link rel="stylesheet" href="{!! asset('css/mail.css') !!}"/>
</head>

<body>
<table class="body-wrap" style="border: 1px solid #EAE6E6; margin: 0; padding: 0;" >
    <tbody>
        <tr>
            <td></td>
            <td class="container" width="600">
                <div class="content">
                    <table class="main" width="100%" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="content-wrap" style="padding:0px;">
                                    <table cellpadding="0" cellspacing="0">
                                        <tbody>
                                        <tr style="height: 70px; vertical-align: middle;" align="center">
                                            <td colspan="2">
                                                <img class="img-responsive" alt=""
                                                     src="{{'https://'.Request::getHost().'/images/logos/compumas_logo.png'}}"
{{--                                                     src="/images/logos/compumas_logo.png"--}}
                                                     style="padding: 10px; width: 150px;" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <hr noshade width="100%" size="1px" style="border: 0.5px solid #EAE6E6;">
                                            </td>
                                        </tr>

                                        @yield('content')

                                        </tbody>
                                        <tbody>

                                        <tr>
                                            <td colspan="2">
                                                <hr noshade width="100%" size="1px" style="border: 0.5px solid #EAE6E6;">
                                            </td>
                                        </tr>

                                        <tr style="background-color: #ECEFF1; " bgcolor="aqua" >
                                            <td style="padding: 15px; font-weight: 500; text-align: left; color: #7F8080; font-family: 'Trebuchet MS'; font-size: medium;" >
                                                <p>El equipo de Compumás</p>
                                            </td>

                                            <td style="text-align: right">
                                                <img class="img-responsive" alt=""
                                                     src="{{'https://'.Request::getHost().'/images/logos/compumas_logo.png'}}"
{{--                                                     src="/images/logos/compumas_logo.png"--}}
                                                     style="width: 50px; padding: 5px;" >
                                            </td>
                                        </tr>

                                        <tr style="background-color: #6398C3; top: 0px;">
                                            <td colspan="2" style="padding: 15px; font-weight: 500; text-align: right; color: whitesmoke; font-family: 'Trebuchet MS'; font-size: small;" >
                                                <p>
                                                    <a href="tel:+59521661233" style="color: whitesmoke;">(021) 610 400</a>
                                                    <br>
                                                    <a href="https://www.google.com/search?rlz=1C1GGRV_enPY751PY751&q=compumarket&npsic=0&rflfq=1&rlha=0&rllag=-25292983,-57565216,1243&tbm=lcl&ved=2ahUKEwjp_r3r5d_iAhUuHrkGHc3hDrYQjGp6BAgGEEk&tbs=lrf:!2m4!1e17!4m2!17m1!1e2!2m1!1e2!2m1!1e3!2m1!1e16!3sIAE,lf:1,lf_ui:2&rldoc=1#rlfi=hd:;si:13512484371768371894;mv:!1m2!1d-25.2802205!2d-57.5155506!2m2!1d-25.32595!2d-57.5849091!3m12!1m3!1d22168.224836792462!2d-57.55022985000001!3d-25.30308525!2m3!1f0!2f0!3f0!3m2!1i405!2i295!4f13.1;tbs:lrf:!2m1!1e2!2m1!1e3!2m1!1e16!2m4!1e17!4m2!17m1!1e2!3sIAE,lf:1,lf_ui:2" style="color: whitesmoke;">Av. Aviadores del Chaco Nª 1728</a>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </td>
            {{--<td></td>--}}
        </tr>
    </tbody>

</table>
</body>
</html>
