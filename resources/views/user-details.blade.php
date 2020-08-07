@extends('layouts.app')

@section('content')
	<div class="jumbotron mx-auto col-8 text-center">
		<h3>
			Detalhes do usuário
		</h3>

		<hr>

		<div>
			<span class="text-primary">Nome:</span> 
			{{ $user->name }}
		</div>

		<div>
			<span class="text-primary">E-mail:</span> 
			{{ $user->email }}
		</div>

		<div>
			<span class="text-primary">Data do cadastro:</span> 
			{{ date('d/m/Y', strtotime($user->created_at)) }}
		</div>
	</div>
@endsection