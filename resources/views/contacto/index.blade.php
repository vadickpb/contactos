@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Contactos</div>
                @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>

                @endif

                <div class="card-body text-center">


                    @foreach ($contacts as $contact)



                    <p>{{'Nombres y apellidos: '. $contact->name }}</p>

                    <p>{{'Celular: '. $contact->telefono }}</p>




                    <input type="submit" class="btn btn-success btn-sm" value="Editar Contacto">
                    <input type="submit" class="btn btn-danger btn-sm" value="Eliminar Contacto">

                    <hr>



                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection