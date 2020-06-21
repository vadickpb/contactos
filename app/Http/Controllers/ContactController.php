<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

    public function create(){

        return view('contacto.create');

    }

    public function save(Request $request){

        //validar los datos
        $validate= $request->validate([
            'name' => ['required', 'max:255'],
            'telefono' => ['required',  'int']
        ]);

        //instanciar ususario registrado
        $user = Auth::user();
        $user_id = $user->id;

        //recojer los datos por request
        $name = $request->input('name');
        $telefono = $request->input('telefono');


        //setear o asignar los datos al modelo
        $contact = new Contact();
        $contact->name = $name;
        $contact->telefono=$telefono;
        $contact->user_id = $user_id;
        

        //guardar los datos
        $contact->save();

        //redireccionar a la lista de contactos
        return redirect()->route('contact.index')
                        ->with(['message' => 'El contacto se agrego correctamente']);

    }
}
