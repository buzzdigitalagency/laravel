<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;

class ContactController extends Controller
{
    /**
     * Displaying the index
     */
    public function show()
    {
        return view('site.contact-us');
    }

    /**
     * Contact Request
     *
     * @return Response
     */
    public function contact(Request $request)
    {
        $rules = array(
            'name'  => 'required|min:10|max:255',
            'email' => 'required|email|max:255',
            'honey' => 'size:0',
            'desc' => 'required|min:200'
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->route('contact-us')
                ->withErrors($validator)
                ->withInput();
        }

        Mail::send(
            'emails.contact',
            array(
            'name'  => $request->name,
            'email' => $request->email,
            'desc' => $request->desc
            ),
            function($message) use ($request){
                //$message->from(env('CONTACT_EMAIL', 'lwcincr93@gmail.com'))->subject('Correo de contacto');
                //$message->from($request->email, $request->name);
                //$message->to(env('CONTACT_EMAIL', 'lwcincr93@gmail.com'));
            }
        );
        return redirect('/contacto')->with('status', true);
    }
}