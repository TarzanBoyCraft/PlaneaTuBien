<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<style type="text/css">
		ul,li,p{
			font-size: 9px;
			text-align:justify-all;
			margin: 0 5px;
		}
		table, td, th {  
		  border: 1px solid #ddd;
		  text-align: center;
		  font-size: 9px;
		  padding: 0 5px;
		}

		table {
		  border-collapse: collapse;
		  width: 100%;
		  padding: 0 5px;
		  /*margin-left: 20px;
		  margin-right: 40px;*/
		}
		.center{
			text-align: center;
		}
		.left{
			text-align: left;
		}
		.right{
			text-align: right;
		}
		.justify{
			text-align: justify;
		}
	</style>
	<title>Anexo Tanda</title>
</head>
<body>
	<div class="container">
		<div style="position: absolute; left: 10%; right: 25%; top: 35%; bottom: 35%;">
			<img src="img/perfil.png"  style="opacity: 0.1;filter: alpha(opacity=10); height: 100%; width: 600px">
		</div>
		<div class="row">
			<div class="twelve columns">
				<div class="ten columns u-pull-left"></div>
				<div class="two columns u-pull-right">
					<img src="img/perfil.png" height="40" width="80">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns" style="border-top: 2px solid #B8242B; margin-top: 0px;"></div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<h6 class="center"><strong>ANEXO</strong></h6>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<label class="center"><strong>CARTA DE INSTRUCCIÓN</strong></label>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<label class="center"><strong>PLAN: {{$prospecto->perfil->plan}}</strong></label>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<div class="one-half column u-pull-left">
					<div class="row">
						<div class="one-half column u-pull-left">
							<p class="right">Nombre(s):</p>
							<p class="right">Titular del contrato de adhesión número:</p>
							<p class="right">Del Grupo de Consumidores número:</p>
							<p class="right">Valor del bien:</p>
						</div>
						<div class="one-half column u-pull-right">
							<p class="center" style="border-bottom: 0.5px solid black;"><strong>{{$presolicitud->nombre." ".$presolicitud->paterno." ".$presolicitud->materno}}</strong></p>
							<p class="center" style="border-bottom: 0.5px solid black; margin-top: 15px;"><strong>{{$presolicitud->recibos->count()}}</strong></p>
							<p class="center" style="border-bottom: 0.5px solid black; margin-top: 15px;"><strong>{{$presolicitud->id}}</strong></p>
							<p class="center" style="border-bottom: 0.5px solid black;"><strong>${{number_format($presolicitud->precio_inicial,2)}}</strong></p>
						</div>
					</div>
				</div>
				<div class="one-half column u-pull-right">
					<div class="one-half column u-pull-left">
						<p class="right">Regalo de puntos:</p>
						<p class="right">Precio Total del bien:</p>
						<p class="right">Plazo del Contrato:</p>
						<p class="right">Garantía de adjudicacion a:</p>
						<p class="right">Precio de adjudicación indexado Garantizado:</p>
					</div>
					<div class="one-half column u-pull-right">
						<p class="center" style="border-bottom: 0.5px solid black;"><strong>{{$puntos}} puntos</strong></p>
						<p class="center" style="border-bottom: 0.5px solid black;"><strong>${{number_format($presolicitud->precio_inicial,2)}}</strong></p>
						<p class="center" style="border-bottom: 0.5px solid black;"><strong>{{$cotizacion->plazo}} meses</strong></p>
						<p class="center" style="border-bottom: 0.5px solid black;"><strong>{{$mensualidades}} meses</strong></p>
						<p class="center" style="border-bottom: 0.5px solid black; margin-top:15px;"><strong>${{number_format($presolicitud->precio_inicial,2)}}</strong></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<div class="row" >
						<table>
							<tbody>
								<tr>
									<th style="background: #cccc"><strong>Aportación Extraordinarias</strong></th>
									<th style="background: #cccc"><strong>%</strong></th>
									<th style="background: #cccc"><strong>Monto</strong></th>
									<th style="background: #cccc"><strong>Mes de pago</strong></th>
								</tr>
								<tr>
									<td>1</td>
									<td>{{$cotizacion->porc1}}</td>
									<td>{{$cotizacion->monto1}}</td>
									<td>{{$cotizacion->mes1}}</td>
								</tr>
								<tr>
									<td>2</td>
									<td>{{$cotizacion->porc2}}</td>
									<td>{{$cotizacion->monto2}}</td>
									<td>{{$cotizacion->mes2}}</td>
								</tr>
								<tr>
									<td>3</td>
									<td>{{$cotizacion->porc3}}</td>
									<td>{{$cotizacion->monto3}}</td>
									<td>{{$cotizacion->mes3}}</td>
								</tr>
								<tr>
									<td>4</td>
									<td>{{$cotizacion->porc4}}</td>
									<td>{{$cotizacion->monto4}}</td>
									<td>120</td>
								</tr>
								<tr>
									<td>Anual</td>
									<td>{{$cotizacion->anual}}%</td>
									<td>${{number_format($cotizacion->propiedad*(intval($cotizacion->anual)/100),2)}}</td>
									<td>Cada Diciembre</td>
								</tr>
							</tbody>
						</table>
						<p class="center">Aportaciones Extraordinarias 100% a Capital</p>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="left">
					Con fundamento en el artículo 22 fracción III del Reglamento de Sistemas de Comercialización, se expide el presente anexo.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="left" style="padding-left: 25px;">
					<strong>Aportaciones Extraodinarias 100% a Capital</strong>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="justify">
					1) % Requerido al mes {{$cotizacion->mes1}}. 2) % Requerido al mes {{$cotizacion->mes2}}. 3) % Requerido al mes {{$cotizacion->mes3}}. 4) % Requerido al mes 120. Anual) % Requerido cada Diciembre.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="left">
					Aportación Extraordinaria 1: Esta cantidad el consumidor la pagará en el mes de pago {{$cotizacion->mes1}}.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="left">
					Aportación Extraordinaria 2: Esta cantidad el consumidor la pagará en el mes de pago {{$cotizacion->mes2}}.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="left">
					Aportación Extraordinaria 3: Esta cantidad el consumidor la pagará en el mes de pago {{$cotizacion->mes3}}.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="left">
					Aportación Extraordinaria 4: Esta cantidad el consumidor la pagará en el mes de pago 120.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="left">
					Aportacion Extraordinaria Anual: Esta cantidad el consumidor la pagara hasta el 7 de diciembre de cada año.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="left" style="padding-left: 25px;">
					<strong>Garantía de adjudicación</strong>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="justify">
					El consumidor adquiere la calidad de adjudicatario en la reunión de adjudicación correspondiente al plazo que haya elegido, al mes inmediato posterior, siempre que sus pagos de cuota periodica total, los realice en los primeros 7 días de cada mes y se consideran puntuales, en caso contrario se considerara ese mes como atraso y se recorrerá su garantía de adjudicación 3 veces al número de meses con atraso. Si ocurriese un atraso, se cumplirá con el número de pagos y montos pactados en el presente anexo, aún sin adquirir la calidad de adjudicatario. Los contratos celebrados en los meses de diciembre y junio, se considerará un mes adicional para ganar el factor de actualización de dicho periodo. <strong>Una vez cubierta la aportacion extraordinaria 1, 2, 3, 4 y anual, se dará cumplimiento a la garantía de adjudicacion, en caso de no cumplir con las condiciones de este anexo, la garantía de adjudicación no se cumplirá</strong>.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="justify">
					El consumidor instruye a la proveedora PLANEA TU BIEN SA DE CV, que en su calidad de integrante los pagos mensuales de la garantía de adjudicación sean fijos, considerando los factores de actualización del periodo de la misma y cuando adquiera la calidad de adjudicatario, que su mensualidad sea fija, considerando los factores de actualización al plazo contratado y una vez entregado el bien, a esta mensualidad se le agregue el seguro de daños del bien que adquiera y cede el remanente al Proveedor, quedando de la siguiente manera. (En caso de existir un atraso el consumidor se compromete a pagar el número de pagos y montos pactados.)
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="left">
					{{$mensualidades+1}} pagos mensuales fijos de ${{$cotizacion->mensualidad}}
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="left">
					{{$cotizacion->plazo-$mensualidades+1}} pagos mensuales fijos de ${{number_format((float)str_replace(array('.', ','), array('.', ''), $cotizacion->mensualidad)+((float)str_replace(array('.', ','), array('.', ''), $cotizacion->mensualidad)*0.35),2)}}
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="center">
					<strong>
						El presente certificado promocional es personal e intransferible, no tiene validez monetaria, no implica ninguna modificación a las cláusulas del contrato de adhesión, ni exime del cumplimiento de las obligaciones contraídas en el mismo.
					</strong>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="center">
					<strong>
						Al ser un documento de manifestación voluntaria, no pretende modificar el contenido del contrato de adhesión toda vez que siempre prevalecerán las condiciones pactadas en el mismo.
					</strong>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="center">
					<strong>
						Leído que fue el presente y enteradas las partes de su alcance y contenido, manifestando que no existe, dolo, error o mala fe, ni ningún vicio oculto, lo firman de conformidad ambas partes.
					</strong>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<p class="center">
					<strong>
						PROTESTAMOS LO NECESARIO
					</strong>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<p class="center">
					<strong>
						Ciudad de México a la fecha de celebración
					</strong>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<div class="one-half column u-pull-left">
					<p class="center"><strong>Sello del proveedor</strong></p>
					<div>
						<img src="img/sello.png" style="display: block;margin-left: 125px;margin-right: auto;">
					</div>
				</div>
				<div class="one-half column u-pull-right">
					<p class="center"><strong>Nombre y firma del consumidor</strong></p>
					<div style="border-top: 1px solid black; margin-top: 50px; padding-left: 15px">
						<p class="center">{{$presolicitud->nombre." ".$presolicitud->paterno." ".$presolicitud->materno}}</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>