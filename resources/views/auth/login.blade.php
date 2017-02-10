@extends('app')

@section('content')
<div class="container-fluid container">
	<div class="alert alert-success text-center" role="alert">
		<strong>Faça login para ter acesso ao sistema!</strong>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">



				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Opaa!</strong> Houveram alguns problemas com o seu login, tente novamente!<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<div class="col-md-12 offset-md-7">
						<form class="form" role="form" method="POST" action="{{ url('/auth/login') }}">
							{!! csrf_field() !!}

							<div class="form-group">
								<label class="col-md-4 control-label">E-Mail </label>
								<div class="col-md-6">
									<input type="email" class="form-control" name="email" value="{{ old('email') }}">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Senha</label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember"> Lembre-se de min
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">Login</button>

									<a class="btn btn-link" href="{{ url('/password/email') }}">Esqueci minha senha?</a>
								</div>
							</div>
						</form>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
