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

                    <a href="{{ route('contact.edit', ['id' => $contact->id]) }}" class="btn btn-success btn-sm">Editar contacto</a>
                    <a href="{{ route('contact.delete',['id' => $contact->id]) }}" class="btn btn-danger btn-sm">Eliminar contacto</a>
              
                    <hr>
                    
                    @endforeach
                    
                    {{-- <div class="clearflix"></div> --}}
                    
                    <div class="pie-card">

                        <a href="{{ route('contact.create') }}" class="btn btn-success agregar-contacto">Agregar Contacto</a>
                        {{$contacts->links()}}
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection