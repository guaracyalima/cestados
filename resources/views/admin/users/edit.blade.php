@extends('app')
@section('content')


    <div class="container">
        <div class="card text-center" style="width: 35rem;">

            <div class="card-block">
                <div class="card-header alert alert-success">
                    Definir nivel de acesso (role) de:
                    <strong>{{$user->name}}</strong>
                </div>
                @include('errors._check')
                {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'class' => 'form-inline']) !!}

                @include('admin.users._form')

                <li class="list-group-item">
                    {!! Form::submit('Alterar', ['class' => 'btn btn-success text-center']) !!}
                </li>
                </ul>

                {!! Form::close() !!}

            </div>

        </div>



@endsection