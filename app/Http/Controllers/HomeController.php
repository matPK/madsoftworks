<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function send_contact_message(Request $request)
    {
        $validated_message_data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'text' => 'required|min:10|max:2000',
        ]);

        extract($validated_message_data);

        $envelope = new Contact($name, $email, $text);

        Mail::to(config('mail.from.address'))->send($envelope);

        return view('contact_thanks');
    }
}
