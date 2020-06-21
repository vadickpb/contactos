<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Contact;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    //
    public function index(){
        $contacts = Contact::orderBy('id', 'desc')->paginate(5);

        return view('contact.index', [
            'contacts' =>$contacts
        ]);
    }

    public function create(){

        return view('contact.create');

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

    public function edit($id){

        $user = Auth::user();
        $contact = Contact::find($id);

        return view('contact.edit', [
            'user' => $user,
            'contact' => $contact
        ]);

    }

    public function update(Request $request){
        
        //validar los datos
        $validate = $request->validate([
            'name' => ['required', 'max:255'],
            'telefono' => ['required',  'int']
        ]);

        //recojer los datos por post
        $name = $request->input('name');
        $telefono = $request->input('telefono');
        $contact_id = $request->input('id');
        

       //obtener el objero del contacto selccionado por el id
       $contact = Contact::find($contact_id);

       //setear los datos al objeto
       $contact->id = $contact_id;
       $contact->name = $name;
       $contact->telefono = $telefono;

       //actualizar los datos
       $contact->update();

       return redirect()->route('contact.edit',['id' => $contact_id])
                        ->with(['message' => 'el contacto se actualizó correctamente']);


    }
}
