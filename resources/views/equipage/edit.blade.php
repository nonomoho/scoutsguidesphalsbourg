@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit {{ $equipage->name }}</h1>

        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}

        {{ Form::model($equipage, array('route' => array('equipage.update', $equipage->id), 'method' => 'PATCH')) }}

        <div class="form-group">
            {{ Form::label('nom', 'Nom') }}
            {{ Form::text('nom', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('sexe', 'Sexe') }}
            {{ Form::email('sexe', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Modifier l\'équipage!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>
@endsection
