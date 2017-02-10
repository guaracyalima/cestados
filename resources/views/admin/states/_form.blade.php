<ul class="list-group list-group-flush">
    <li class="list-group-item">

        {!! Form::label('name', 'Nome: ') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Acre']) !!}

    </li>
    <li class="list-group-item">
        {!! Form::label('initials', 'Sigla: ') !!}
        {!! Form::text('initials', null, ['class' => 'form-control', 'placeholder' => 'AC']) !!}
    </li>
    <li class="list-group-item">
        {!! Form::label('historic', 'Historico: ') !!}
        {!! Form::textarea('historic', null, ['class' => 'form-control', 'placeholder' => 'Acre']) !!}
    </li>
