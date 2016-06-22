@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Informations</div>
                    <div class="panel-body">
                        <p>{{$user->prenom}}, tu fais partie de l'équipage : </p>
                        <a href={{url('/equipage/'.$equipage[0]->id)}}>
                            {{$equipage[0]->nom}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Informations</div>
                    <div class="panel-body">
                        <p>{{$user->prenom}}, tu fais partie de l'équipage : </p>
                        <a href={{url('/equipage/'.$equipage[0]->id)}}>
                            {{$equipage[0]->nom}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Informations</div>
                    <div class="panel-body">
                        <p>{{$user->prenom}}, tu fais partie de l'équipage : </p>
                        <a href={{url('/equipage/'.$equipage[0]->id)}}>
                            {{$equipage[0]->nom}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">Informations</div>
                    <div class="panel-body">
                        <p>{{$user->prenom}}, tu fais partie de l'équipage : </p>
                        <a href={{url('/equipage/'.$equipage[0]->id)}}>
                            {{$equipage[0]->nom}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection