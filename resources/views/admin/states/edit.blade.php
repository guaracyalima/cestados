@extends('app')
@section('content')


    <div class="container">
        <div class="card text-center">

            <div class="card-block">
                <div class="card-header alert alert-success">
                    Editar estado:
                    <strong>{{$state->name}}</strong>
                </div>



                {!! Form::model($state, ['route' => ['admin.states.update', $state->id], 'class' => 'form-inline']) !!}




                @include('admin.states._form')


                    <li class="list-group-item">
                        {!! Form::submit('Alterar', ['class' => 'btn btn-success text-center']) !!}
                    </li>
                </ul>


                {!! Form::close() !!}

            </div>

        </div>



@endsection