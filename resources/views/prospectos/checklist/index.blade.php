@extends('layouts.app')
@section('content')
	<div class="card">
		<div class="card-header">
			<h4>CHECKLIST FOLDER DE {{$presolicitud->nombre." ".$presolicitud->paterno." ".$presolicitud->materno}} </h4>
		</div>
		<div class="card-body">
			<div class="d-flex flex-column justify-content-center">
				<div class="mx-auto">
					<h4>Ficha de deposito <input type="checkbox" readonly disabled {{$presolicitud->checklist->ficha_deposito_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->ficha_deposito_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Perfil <input type="checkbox" readonly disabled {{$presolicitud->checklist->perfil_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->perfil_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Presolicitud firmada <input type="checkbox" readonly disabled {{$presolicitud->checklist->presolicitud_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->presolicitud_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Contrato firmado <input type="checkbox" readonly disabled {{$presolicitud->checklist->contrato_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->contrato_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Hoja de aceptación de seguro <input type="checkbox" readonly disabled {{$presolicitud->checklist->hoja_aceptacion_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->hoja_aceptacion_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Manual del consumidor firmado <input type="checkbox" readonly disabled {{$presolicitud->checklist->manual_consumidor_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->manual_consumidor_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Cuestionario de calidad <input type="checkbox" readonly disabled {{$presolicitud->checklist->calidad_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->calidad_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Aviso de privacidad <input type="checkbox" readonly disabled {{$presolicitud->checklist->privacidad_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->privacidad_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Copia ficha de deposito <input type="checkbox" readonly disabled {{$presolicitud->checklist->copia_ficha_deposito_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->copia_ficha_deposito_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Identificación Oficial <input type="checkbox" readonly disabled {{$presolicitud->checklist->identificacion_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->identificacion_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Comprobante de Domicilio <input type="checkbox" readonly disabled {{$presolicitud->checklist->comprobante_domicilio_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->comprobante_domicilio_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Croquis de ubicación <input type="checkbox" readonly disabled {{$presolicitud->checklist->croquis_ubicacion_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->croquis_ubicacion_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Carta de Bienvenida <input type="checkbox" readonly disabled {{$presolicitud->checklist->carta_bienvenida_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->carta_bienvenida_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
				<div class="mx-auto">
					<h4 for="">Anexo <input type="checkbox" readonly disabled {{$presolicitud->checklist->anexos_path ? 'checked=""' : '' }}> <a href="{{ url('/storage/'.$presolicitud->checklist->anexos_path) }}" class="btn btn-info"><i class="far fa-eye"></i> Ver</a>  </h4>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="d-flex justify-content-center">
				<a class="btn btn-success" href="{{ route('presolicituds.checklist.create',['presolicitud'=>$presolicitud]) }}"><i class="fas fa-save"></i> Guardar</a>
			</div>
		</div>
	</div>
@endsection