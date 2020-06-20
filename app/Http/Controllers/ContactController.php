<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    public function index(){
        $contacts = Contact::orderBy('id', 'desc')->paginate(5);

        return view('contacto.index', [
            'contacts' =>$contacts
        ]);
    }
}
