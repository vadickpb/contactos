@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Crear nuevo contacto</div>

                <div class="card-body text-center">





                    <form action="{{ route('contact.save') }}" method="POST">
                        @csrf

                            <div class="form-group">
                                <label for="" class="from-control">Nombres y Apellidos: </label>
                                <input type="text" name="name" id="" class="form-control">
                            </div>
    
                            <div class="form-group">
                                <label for="" class="from-control">Celular: </label>
                                <input type="text" name="telefono" id="" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success btn-sm" value="Agregar Contacto">
                    </form>
                    





                    <hr>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection