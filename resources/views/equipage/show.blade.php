@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tableau de bord</div>
                    <div class="panel-body">
                        <h1>{{$equipage->nom}}</h1>
                        @foreach($membres as $membre)
                            <li>{{$membre->nom}} {{$membre->prenom}}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection