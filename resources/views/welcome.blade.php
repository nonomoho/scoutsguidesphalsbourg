@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Bonjour</div>
                    <div class="panel-body">Bienvenue sur le site de la branche scoute-guide de Phalsbourg !</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">

                <ul>
                    <li>
                        <a href={{url('/listeJeune')}}>
                            <span>Les scouts-guides de la tribu</span>
                        </a>
                    </li>
                    <li>
                        <a href={{url('/equipage/index')}}>
                            <span>Les équipages</span>
                        </a>
                    </li>
                    <li>
                        <a href={{url('chef/listeChef')}}>
                            <span>Les chefs</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 col-lg-offset-2">
                <p class="modal-header">Découvrez les chefs !</p>
                {{--Carousel qui affiche la photo des chefs--}}
                <div id="myCarousel" class="carousel slide" style="width: 400px; height:400px;">
                    <ol class="carousel-indicators">
                        @for($i = 0; $i < count($chefs); $i++)
                            <li data-target="#myCarousel" data-slide-to="{{$i}}"
                                class="
                                                @if($i == 0)
                                        active
                                @endif"></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner">
                        @foreach($chefs as $chef)
                            <div class="item
                                            @if($chef->id == 1)
                                    active
                            @endif">
                                <img class="img-responsive center-block"
                                     src="images/photosChefs/{{$chef->photo}}" alt=""
                                     style="height: 400px;width: 400px">
                                <div class="carousel-caption">
                                    <h4>{{$chef->prenom}} {{$chef->nom}}</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>

                </div>
            </div>
        </div>
    </div>
@endsection
