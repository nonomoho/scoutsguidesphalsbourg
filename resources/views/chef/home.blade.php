@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Informations de la tribu</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>Nombre de chefs</td>
                                <td>{{$chefs->count()}}</td>
                            </tr>
                            <tr>
                                <td>Nombre de jeunes</td>
                                <td>{{$jeunes->count()}}</td>
                            </tr>
                            <tr>
                                <td>Nombre de fille</td>
                                <td>{{$jeunes->where('sexe', 'F')->count()}}</td>
                            </tr>
                            <tr>
                                <td>Nombre de garçons</td>
                                <td>{{$jeunes->where('sexe', 'M')->count()}}</td>
                            </tr>
                            <tr>
                                <td>Nombre d'équipages</td>
                                <td>{{$equipages->count()}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">Actions possibles</div>
                    <div class="panel-body">
                        <div class="btn-group btn-group-vertical">

                            <a class="btn btn-default" href={{url('chef/info_unite')}} }}>information de l'unité</a>
                            <a class="btn btn-default" href={{url('chef/listeChef')}}>Afficher la liste des chefs</a>
                            <a class="btn btn-default">Ajouter un jeunes</a>
                            <a class="btn btn-default">Ajouter un chef</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
