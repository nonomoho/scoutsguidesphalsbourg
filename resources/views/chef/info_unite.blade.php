<?php use App\User;?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Infos</a></li>
            <li><a data-toggle="tab" href="#chefs">Chefs</a></li>
            <li><a data-toggle="tab" href="#jeunes">Scouts-Guides</a></li>
            <li><a data-toggle="tab" href="#garcons">Scouts</a></li>
            <li><a data-toggle="tab" href="#filles">Guides</a></li>
            @foreach($equipages as $equipage)
                <li><a data-toggle="tab" href="#equipage{{$equipage->id}}">{{$equipage->nom}}</a></li>
            @endforeach
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>Infos</h3>
                <p>Bonjour voila les trucs à dire</p>
            </div>
            <div id="chefs" class="tab-pane fade">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Mail</th>
                        <th>Surnom</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($chefs as $chef)
                        <tr>
                            <td>{{$chef->nom}}</td>
                            <td>{{$chef->prenom}}</td>
                            <td>{{$chef->date_naissance}}</td>
                            <td>{{$chef->email}}</td>
                            <td>{{$chef->login}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div id="jeunes" class="tab-pane fade">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Mail</th>
                        <th>Surnom</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jeunes as $jeune)
                        <tr>
                            <td>{{$jeune->nom}}</td>
                            <td>{{$jeune->prenom}}</td>
                            <td>{{$jeune->date_naissance}}</td>
                            <td>{{$jeune->email}}</td>
                            <td>{{$jeune->login}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div id="garcons" class="tab-pane fade">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Mail</th>
                        <th>Surnom</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($garcons as $garcon)
                        <tr>
                            <td>{{$garcon->nom}}</td>
                            <td>{{$garcon->prenom}}</td>
                            <td>{{$garcon->date_naissance}}</td>
                            <td>{{$garcon->email}}</td>
                            <td>{{$garcon->login}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div id="filles" class="tab-pane fade">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Mail</th>
                        <th>Surnom</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($filles as $fille)
                        <tr>
                            <td>{{$fille->nom}}</td>
                            <td>{{$fille->prenom}}</td>
                            <td>{{$fille->date_naissance}}</td>
                            <td>{{$fille->email}}</td>
                            <td>{{$fille->login}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @foreach($equipages as $equipage)
                <div id="equipage{{$equipage->id}}" class="tab-pane fade">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date de naissance</th>
                            <th>Mail</th>
                            <th>Surnom</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $membres = User::where('equipage_id', $equipage->id)->orderBy('nom')->get();?>
                        @foreach($membres as $membre)
                            <tr>
                                <td>{{$membre->nom}}</td>
                                <td>{{$membre->prenom}}</td>
                                <td>{{$membre->date_naissance}}</td>
                                <td>{{$membre->email}}</td>
                                <td>{{$membre->login}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </div>

@endsection
