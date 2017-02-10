@extends('app')

@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-10 col-md-offset-1">

				<div class="panel panel-default">

					<div class="panel-heading">Home</div>

				<div class="panel-body">

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
				</div>
			</div>
		</div>
	</div>


</div>
@endsection