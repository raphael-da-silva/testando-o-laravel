@extends('layouts.app')

@section('content')
	<div class="col-8 mx-auto">
		<h3>
			Lista de usuário cadastrados
		</h3>

		<hr>

		@if (count($users) > 0)

			<div class="alert alert-info">
				Total de usuários: {{ $users->count() }}
			</div>

			<table class="table">
				<thead>
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($users as $user)

						<tr>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
						</tr>

					@endforeach
				</tbody>
			</table>

		@else

			<div class="alert alert-warning">
				Nenhum usuário cadastrado.
			</div>

		@endif
	</div>
@endsection