@extends('app')

@section('content')
    <div class="container">
        <div class="card-deck">

            @foreach($states as $item)
            <div class="card">

                <img class="card-img-top" src="http://lorempixel.com/output/city-q-c-318-180-4.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">{{ $item->name }} - {{ $item->initials }}</h4>
                    <p class="card-text">{{ $item->historic }}</p>
                    <p class="card-text"><small class="text-muted">Leia mais</small></p>
                </div>

            </div>
                @endforeach


        </div>

        {!! $states->render() !!}
    </div>
@endsection