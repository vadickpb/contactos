@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agenda de Contactos</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Bienvenido a la agenda de contactos</p>
                    <a href=" {{ route('contact.index') }}" class="btn btn-primary">Ver Contactos</a>
                    <a href="" class="btn btn-success">Agregar Contacto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
