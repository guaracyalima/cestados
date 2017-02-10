<ul class="list-group list-group-flush">
    <li class="list-group-item">

        {!! Form::label('role', 'Role: ') !!}
        {!! Form::select('role',$list_roles ,null, ['class' => 'form-control']) !!}

    </li>