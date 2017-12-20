<?php
	
	$mis_suscripciones = getSuscripciones();

	$carrusel = ""; $W = 0;

	$inicial = array();

	foreach ($mis_suscripciones as $orden_id => $planes) {
		foreach ($planes["productos"] as $suscripcion) {
			$id_suscripcion = str_pad($suscripcion["orden"], 5, "0", STR_PAD_LEFT);

			if( count($inicial) == 0 ){
				$inicial = array(
					"plan" => $suscripcion["plan"],
					"type" => "{$suscripcion["nombre"]} {$suscripcion["presentacion"]}",
					"status" => "{$suscripcion["status"]}",
					"entrega" => "{$suscripcion["entrega"]}",
					"img" => "{$suscripcion["img"]}"
				);
			}

			$carrusel .= "
				<div 
					id='plan_{$id_suscripcion}' 
					data-plan='{$suscripcion["plan"]}'
					data-type='{$suscripcion["nombre"]} {$suscripcion["presentacion"]}'
					data-status='{$suscripcion["status"]}'
					data-entrega='{$suscripcion["entrega"]}'
					data-img='{$suscripcion["img"]}'
					class='suscripcion_item'
				>
					<div>
						<div class='item_carrusel_img' style='background-image: url({$suscripcion["img"]});'></div>
						<div class='item_carrusel_orden'>
							<strong>Orden:</strong> {$id_suscripcion}
						</div>
						<div class='item_carrusel_total'>
							{$suscripcion["nombre"]}
						</div>
					</div>
				</div>
			";
			$W++;
		}
	}

/*	echo "<pre>";
		print_r($inicial);
	echo "</pre>";*/

	$HTML .= '
		<section id="tab_2" class="section_activo">
			<div class="section_box">
				<div class="carrusel_suscripciones_container">
					<div style="width: '.($W*200).'px;">
						'.$carrusel.'
					</div>
				</div>

				<div class="form_suscripcion">
					
					<div class="">
						<div class="">
							<img id="img_item" src="'.$inicial["img"].'" />
						</div>
					</div>
					
					<div class="celda_4">
						<div class="">
							<label>Tipo de suscripción</label>
						    <input readonly id="tipo_suscripcion" class="profile-content-input form-control"  value="'.$inicial["plan"].'">
						</div>
						<div class="">
							<label>Tipo de Alimento</label>
							<input readonly id="presentacion" class="profile-content-input form-control"  value="'.$inicial["type"].'">				
						</div>
						<div class="">
							<label>Estatus:</label>
							<input readonly id="status" class="profile-content-input form-control"  value="'.$inicial["status"].'">
						</div>
						<div class="">
							<label>Proxima Entrega:</label>
							<input readonly id="entrega" class="profile-content-input form-control"  value="'.$inicial["entrega"].'">
						</div>
					</div>

					<div>
						<label class="subtiulo">Entregas</label>
						<div class="celda_6 entregas">
							<div><span> <i class="fa fa-check" aria-hidden="true"></i> </span><label>Enero</label></div> 
							<div><span>&nbsp;</span><label>Febrero</label></div>
							<div><span>&nbsp;</span><label>Marzo</label></div>
							<div><span>&nbsp;</span><label>Abril</label></div>
							<div><span>&nbsp;</span><label>Mayo</label></div>
							<div><span>&nbsp;</span><label>Junio</label></div>
						</div>
						<div class="celda_6 entregas">
							<div><span>&nbsp;</span><label>Julio</label></div> 
							<div><span>&nbsp;</span><label>Agosto</label></div>
							<div><span>&nbsp;</span><label>Septiembre</label></div>
							<div><span>&nbsp;</span><label>Octubre</label></div>
							<div><span>&nbsp;</span><label>Noviembre</label></div>
							<div><span>&nbsp;</span><label>Diciembre</label></div>			
						</div>
					</div>
					<div class="hidden row progreso-entrega form-horizontal">
						<h2 class="col-md-6 caviar">Estatus del envío</h2>
						<div class="progress-content">
							<div class="border-curvo col-md-12 text-center">
								
								<div class="row">
									<div id="armada" class="col-xs-12 col-sm-12 col-md-3  pull-left">
										<img src="<?php echo get_home_url(); ?>/img/progress-box.png" class="img-responsive" >
										<label>Armada</label>
									</div>
									<div class="col-md-2 flecha hidden-xs hidden-sm">
										<img src="<?php echo get_home_url(); ?>/img/flecha.png" width="120">
									</div>
									<div id="enviada" class="col-md-3 hidden-xs hidden-sm">
										<img src="<?php echo get_home_url(); ?>/img/progress-cart.png" class="img-responsive" >
										<label>Enviada</label>
									</div>
									<div class="col-md-2 flecha hidden-xs hidden-sm">
										<img src="<?php echo get_home_url(); ?>/img/flecha.png" width="120">
									</div>
									<div id="recibida" class="col-md-3 hidden-xs hidden-sm pull-right">
									    <img src="<?php echo get_home_url(); ?>/img/progress-house.png" class="img-responsive" >
										<label>Recibida</label>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>

		</section>';
?>