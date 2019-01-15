@extends('principal')
@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-sm-4">
				<h4>Clientes:</h4>
			</div>
			<div class="col-sm-4 text-center">
				<a href="{{ route('clientes.create') }}" class="btn btn-success">
					<i class="fa fa-plus"></i><strong> Agregar Cliente</strong>
				</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-sm-12">
				@if(count($clientes) > 0)
					<table class="table table-bordered table-hover table-stripped" style="margin-bottom: 0px;">
						<tr class="table-primary">
							<th>Nombre</th>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>Email</th>
							<th>Acción</th>
						</tr>
						@foreach($clientes as $cliente)
							<tr>
								<td>{{ $cliente->nombre }}</td>
								<td>{{ $cliente->appaterno }}</td>
								<td>{{ $cliente->apmaterno ? $cliente->apmaterno : 'N/A' }}</td>
								<td>{{ $cliente->email ? $cliente->email : 'N/A' }}</td>
								<td class="text-center">
									<a href="{{ route('clientes.show', ['cliente' => $cliente]) }}" class="btn btn-sm btn-primary">
										<i class="fa fa-eye"></i> Ver
									</a>
									<a href="{{ route('clientes.edit', ['cliente' => $cliente]) }}" class="btn btn-sm btn-warning">
										✎ Editar
									</a>
								</td>
							</tr>
						@endforeach
					</table>
				@else
					<h4>No hay clientes disponibles.</h4>
				@endif
			</div>
		</div>
	</div>
</div>

@endsection