@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Créer un équipage</h1>

        <!-- if there are creation errors, they will show here -->
        {!! HTML::ul($errors->all()) !!}

        {!! Form::open(array('url' => 'equipage')) !!}

        <div class="form-group">
            {!! Form::label('nom', 'Nom') !!}
            {!! Form::text('nom', Request::old('nom'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sexe', 'Sexe') !!}
            {!! Form::text('sexe', Request::old('sexe'), array('class' => 'form')) !!}
        </div>


        {!!Form::submit('Créer un équipage', array('class' => 'btn btn-primary')) !!}

        {!!  Form::close() !!}

    </div>
@endsection