<link href="css/app.css" rel="stylesheet">
@extends('layouts.layout')

@section('content')

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from previously active menu item
        $('#contacto').addClass('active');
    });
</script>


<section id="contacto" class="no-padding content-blue">
<div class="container" style="padding-top: 10px">
    <div class="col-md-12">
        <div class="content-green">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>ERROR!</strong> Ingresar un correo electronico valido.
                </div>
            @endforeach
        </div>
    </div>
</div>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="container">

    <div class="row form-group">
        <div class="col-md-12">
        {!! Form::label('Nombre:') !!}
        {!! Form::text('name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Nombre')) !!}
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-12">
            {!! Form::label('Correo Electronico:') !!}
            {!! Form::text('email', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Correo electrónico')) !!}
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-12">
            {!! Form::label('Mensaje:') !!}
            {!! Form::textarea('message', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Mensaje')) !!}
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-12">
            {!! Form::submit('Enviar',
              array('class'=>'btn btn-primary')) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
</section>
@endsection
