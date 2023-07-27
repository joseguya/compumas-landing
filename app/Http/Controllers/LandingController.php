<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\Contact;
use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{

    public function show()
    {
        return view('index');
    }

    public function sendMail(MailRequest $request)
    {

        $input = $request->input();
        $mail = $input['email'];

        try {
            Mail::to($mail) -> queue(new Contact());
            Mail::to('info@compumarket.com.py') -> queue(new ContactNotification($input));
        } catch (\Exception $exception) {
            $notification = array(
                'message' => 'No se ha podido enviar el mail.',
                'alert-type' => 'error'
            );

            return redirect('/#contacto')->with($notification);
        }

        $notification = array(
            'message' => 'Mail enviado existosamente!.',
            'alert-type' => 'success'
        );

        return redirect('/')->with($notification);
    }

}
