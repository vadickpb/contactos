@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Editar contacto</div>

                <div class="card-body text-center">
                    @if (session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
    
                    @endif





                    <form action="{{ route('contact.update') }}" method="POST">
                        @csrf

                            <div class="form-group">
                                <label for="" class="from-control">Nombres y Apellidos: </label>
                                <input type="text" name="name" id="" class="form-control" value="{{ $contact->name }}">
                            </div>
    
                            <div class="form-group">
                                <label for="" class="from-control">Celular: </label>
                                <input type="text" name="telefono" id="" class="form-control" value="{{ $contact->telefono }}">
                                <input type="hidden" name="id" id="" value="{{ $contact->id }}">
                            </div>
                            <input type="submit" class="btn btn-success btn-sm" value="Editar Contacto">
                            <a href="{{ route('contact.index') }}" class="btn btn-primary btn-sm">Volver</a>
                    </form>
                    





                    <hr>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection