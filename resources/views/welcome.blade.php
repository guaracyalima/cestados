@extends('app')

@section('content')

    <div class="container" >
        @if (!Auth::check())
        <div class="card card-inverse" style="background-color: #333; border-color: #333;">
            <div class="card-block">
                <h3 class="card-title">Bem vindo</h3>
                <p class="card-text">Faça login para acessar o sistema</p>
                <a href="{{ url('/auth/login') }}" class="btn btn-primary">login</a>
            </div>
        </div>
            @else
            <div class="card" style="width: 20rem;">

                <img class="card-img-top" src="http://lorempixel.com/output/city-q-c-318-180-4.jpg" alt="Card image cap">

                <div class="card-block">

                    <h4 class="card-title"> Estado - sigla</h4>
                    <p class="card-text">Lorem</p>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nome: </li>
                    <li class="list-group-item">Sigla: </li>
                    <li class="list-group-item">Pais: Brasil</li>
                </ul>
                <div class="card-block">
                    <a href="#exampleModalLabel" class="card-link">Leia mais...</a>

                </div>
            </div>
        @endif

    </div>
@endsection