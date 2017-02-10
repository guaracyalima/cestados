@extends('app')


@section('content')

    <div class="container">
        <h3>Cadastrar estado</h3>

        @include('errors._check')
        {!! Form::open(['route' => 'admin.states.store']) !!}



        @include('admin.states._form')

        <div class="form-group">


            {!! Form::submit( 'Cadastrar', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection