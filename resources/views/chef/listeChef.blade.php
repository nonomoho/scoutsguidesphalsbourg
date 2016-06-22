@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tableau de bord</div>

                    <div class="panel-body">
                        @foreach($chefs as $chef)
                            <li> {{$chef->prenom}} </li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection