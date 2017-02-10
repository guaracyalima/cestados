@extends('app')

@section('content')
    @if (!Auth::check())
        <div class="card card-inverse" style="background-color: #333; border-color: #333;">
            <div class="card-block">
                <h3 class="card-title">Bem vindo</h3>
                <p class="card-text">Faça login para acessar o sistema</p>
                <a href="{{ url('/auth/login') }}" class="btn btn-primary">login</a>
            </div>
        </div>

    @else

        <div class="container">

            <h3 class="text-center"> Gerenciamento de usuarios</h3>

            <table class="table table-bordered table-hover ">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>E-mail </th>
                    <th>Role</th>
                    <th>Ação</th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href="#">{!! $item->name !!} </a></td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role }}</td>

                        <td>
                            <a href="{{ route('admin.users.edit', ['id'=>$item->id]) }}" class=" btn btn-primary">Editar</a>
                            <a href="{{ route('admin.users.destroy', ['id'=>$item->id]) }}" class=" btn btn-danger">Excluir</a>
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $users->render() !!}

        </div>
    @endif

@endsection

