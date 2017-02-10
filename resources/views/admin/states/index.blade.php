@extends('app')

    @section('content')

        @section('post-script')
            <script>
                $(function(){

                    $("#exc").click(
                            function(){
                                $("#myModal").modal('show');
                            });

                });

                $(function () {
                    $("form.form-add-state").submit(function () {


                        var dados = $(this).serialize();

                        $.ajax({
                            url: $(this).attr("send"),
                            data: dados,
                            type: "POST",
                            beforeSend: iniciaPreloader()

                        }).done(function () {

                            finalizaPreloader();
                            alert("Estado cadastrado com sucesso!");

                        }).fail(function () {

                            finalizaPreloader();
                            alert("Falha ao cadastrar!");

                        });

                        return false;
                    })
                });
                
                function iniciaPreloader() {
                    $(".preloader").show();
                }
                
                function finalizaPreloader() {
                    $(".preloader").hide();
                }
            </script>

          <div class="container">

              <h3 class="text-center"> Cadastro de estados</h3>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="exc">
                  Novo cadastro
              </button>
              {{--<a href="{{ route('admin.states.create') }}" class="btn btn-success" >Novo cadastro</a>--}}




              <table class="table table-bordered table-hover ">
                  <thead>
                  <tr>
                      <th>id</th>
                      <th>Nome</th>
                      <th>Sigla </th>
                      <th>Historico</th>
                      <th>Ação</th>
                  </tr>
                  </thead>

                  <tbody>
                  @foreach($states as $item)
                      <tr>
                          <td>{{ $item->id }}</td>
                          <td><a href="#">{!! $item->name !!} </a></td>
                          <td>{{ $item->initials }}</td>
                          <td>{{ $item->historic }}</td>

                          <td>
                            <a href="{{ route('admin.states.edit', ['id'=>$item->id]) }}" class=" btn btn-primary">Editar</a>
                            <a href="{{ route('admin.states.destroy', ['id'=>$item->id]) }}" class=" btn btn-danger">Excluir</a>
                          </td>


                      </tr>
                  @endforeach
                  </tbody>
              </table>

              {!! $states->render() !!}
          </div>

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">

                      <div class="modal-header">

                          <h5 class="modal-title" id="exampleModalLabel">Cadastrar estado</h5>

                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>

                      </div>

                      <div class="modal-body">


                          @include('errors._check')
                          {{--{!! Form::open(['url' => 'states/addViaAjax', 'send' => '/states/add', 'class' => 'form-add-state']) !!}--}}
                          {!! Form::open(['send'=>'/admin/states/ajaxAdd', 'class' => 'form-add-state']) !!}



                          @include('admin.states._form')

                          <div class="form-group">

                          </div>
                          <div class="preloader" style=" display: none">

                              Enviando dados...
                          </div>


                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                          {!! Form::submit( 'Cadastrar', ['class' => 'btn btn-primary']) !!}
                          {!! Form::close() !!}
                      </div>
                  </div>
              </div>
          </div>


    @endsection

