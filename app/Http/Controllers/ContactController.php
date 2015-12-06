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
        return view('site.contact');
    }

    /**
     * Contact Request
     *
     * @return Response
     */
    public function contact(Request $request)
    {
        $rules = array(
            'name'  => 'required|min:6|max:255',
            'email' => 'required|email|max:255',
            'honey' => 'size:0',
            'desc'  => 'required|min:160'
        );

        $messages = array(
            'honey.size' => 'There has been an unexpected error please try again later.'
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->route('contact.get')
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
                $message->subject('Contact');
                $message->to(env('MAIL_TO', 'lorenzo@buzzdigitalagency.com'));
            }
        );

        return redirect()->route('contact.get')->with('status', true);
    }
}