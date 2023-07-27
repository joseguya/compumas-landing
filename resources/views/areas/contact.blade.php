<!-- Contact section -->
<section id="contact" class="padding-top padding-bottom-small text-center">
    <div class="container hidden-sm hidden-xs">
        <h3 class="lead margin-bottom-small" data-animated="0" style="color: #0b97ff;" >
            <strong>
                Completá tus datos y empezá a disfrutar ya<br>
                de todos los beneficios de Compumás.
            </strong>
        </h3>
        <div class="row">
            <form action="{{route('mail.contact.send')}}" method="post" name="contact-form" data-name="contact-form">
                <div class="col-lg-6 col-md-6 text-left" data-animated="0">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <input type="text" name="first_name" id="first_name" placeholder="Nombre (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="id_number" id="id_number" placeholder="Número de C.I. (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="email" name="email" id="email" placeholder="Mail (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="work_address" id="work_address" placeholder="Dirección Laboral (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="antiquity" id="antiquity" placeholder="Antigüedad (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="reference_1" id="reference_1" placeholder="Referencias personales 1 / teléfono (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <div style="padding: 5px;">
                        <label style="color: #a400cc;"> <strong>Has comprado anteriormente en Compumarket? (*)</strong></label>
                        <select name="buyer" required style="background-color: #ebf7fe; padding: 5px;">
                            <option value="true" selected>Sí</option>
                            <option value="false">No</option>
                        </select>
                    </div>
                    <div style="padding: 5px;">
                        <label style="color: #a400cc;"> <strong>Te gustaría recibir nuestras ofertas y novedades a tu correo? (*)</strong></label>
                        <select name="news"  required style="background-color: #ebf7fe;  padding: 5px;">
                            <option value="true" selected>Sí</option>
                            <option value="false">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-left" data-animated="0">
                    <input type="text" name="last_name" id="last_name" placeholder="Apellido (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="phone_number" id="phone_number" placeholder="Celular (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="home_address" id="home_address" placeholder="Dirección Particular (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="company" id="company" placeholder="Empresa (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="company_phone" id="company_phone" placeholder="Teléfono laboral (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="reference_2" id="reference_2" placeholder="Referencias personales 2 / teléfono (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="product" id="product" placeholder="Que producto te interesaría adquirir? (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <br>
                </div>
                <button type="submit" class="button">Enviar</button>
            </form>
        </div>
    </div>


    <div class="container hidden-lg hidden-md">
        <h3 class="lead margin-bottom-small" data-animated="0" style="color: #0b97ff;" >
            <strong>
                Completá tus datos y empezá a disfrutar ya<br>
                de todos los beneficios de Compumás.
            </strong>
        </h3>
        <div class="row">
            <form action="{{route('mail.contact.send')}}" method="post" name="contact-form" data-name="contact-form">
                <div class="col-lg-6 col-md-6 text-left" data-animated="0">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <input type="text" name="first_name" id="first_name" placeholder="Nombre (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="last_name" id="last_name" placeholder="Apellido (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="id_number" id="id_number" placeholder="Número de C.I. (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="phone_number" id="phone_number" placeholder="Celular (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="email" name="email" id="email" placeholder="Mail (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="home_address" id="home_address" placeholder="Dirección Particular (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="work_address" id="work_address" placeholder="Dirección Laboral (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="company" id="company" placeholder="Empresa (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="antiquity" id="antiquity" placeholder="Antigüedad (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="company_phone" id="company_phone" placeholder="Teléfono laboral (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="reference_1" id="reference_1" placeholder="Referencias personales 1 / teléfono (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="reference_2" id="reference_2" placeholder="Referencias personales 2 / teléfono (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <input type="text" name="product" id="product" placeholder="Que producto te interesaría adquirir? (*)" required style="background-color: #ebf7fe; color: #a400cc;"/>
                    <div style="padding: 5px;">
                        <label style="color: #a400cc;"> <strong>Has comprado anteriormente en Compumarket? (*)</strong></label>
                        <select name="buyer" required style="background-color: #ebf7fe; padding: 5px;">
                            <option value="true" selected>Sí</option>
                            <option value="false">No</option>
                        </select>
                    </div>
                    <div style="padding: 5px;">
                        <label style="color: #a400cc;"> <strong>Te gustaría recibir nuestras ofertas y novedades a tu correo? (*)</strong></label>
                        <select name="news"  required style="background-color: #ebf7fe;  padding: 5px;">
                            <option value="true" selected>Sí</option>
                            <option value="false">No</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="button">Enviar</button>
            </form>
        </div>
    </div>


</section>
