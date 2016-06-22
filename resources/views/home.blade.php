@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tableau de bord</div>

                    <div class="panel-body">
                        Tu es connecté, {{Auth::user()->prenom}}
                    </div>
                    <a href={{url('/listeJeune')}}>
                        <span>afficher la liste</span>
                    </a>
                    <a href={{url('/equipage')}}>
                        <span>equipage</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
