@extends('layouts.app')

@section('content')
	<div class="col-8 mx-auto">
		<h3>
			Lista de usuário cadastrados
		</h3>

		<?php if(count($users) > 0){ ?>

			<table class="table">
				<thead>
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($users as $user){ ?>

						<tr>
							<td><?php echo $user->name; ?></td>
							<td><?php echo $user->email; ?></td>
						</tr>

					<?php } ?>
				</tbody>
			</table>

		<?php }else{ ?>

			<div class="alert alert-warning">
				Nenhum usuário cadastrado.
			</div>

		<?php } ?>
	</div>
@endsection