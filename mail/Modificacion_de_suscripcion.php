<?php
	include dirname(__DIR__).'/wp-load.php';

	$header = getTemplate('/generales/header.php');
	$footer = getTemplate('/generales/footer.php');

	$titulo = '
		<div style="font-size: 25px; background: #0b1805; color: #FFF; text-align: center; padding: 30px 20px; font-weight: 600;">
			¡Hola Nayely!			

		</div> 
		<div>
			<img src="[IMG_PATH]modificacion/modificacion_suscripcion01.png" style="width: 100%; margin: 0px 0px 10px; border-bottom: solid 10px #75e417;" />
		</div>
		<div style="text-align: center;font-size: 17px;line-height: 27px;">
				<strong>Tu suscripci&oacute;n ha siso modificada con &eacute;xito</strong>. 

		</div>
			<br>
		<div>
			<label style="text-align: left;font-size: 17px;line-height: 27px;">verifica los detalles de la modificaci&oacute;n que acabas de realizar</label>
		</div>
			<br>
		<div>
			<h3 style="text-align: left;font-size: 17px;line-height: 27px;" class="mayuscula">detalles del pedido</h3>
		</div>
		<div class="pull-center" style="text-align:center;font-size: 30px ! important;">
		<table cellspacing=5 cellpadding=0 style="text-align: center;">
			
			<tr>
					<td>
						<img src="[IMG_PATH]confirmacion/general.jpg"/>
					</td>
					<td >
						<div>
							<div class="mayuscula"><strong>royal canin</strong></div>							
						</div>
					</td>
					<td><div>Raza Media Adulta 10kg Mensual</td>
					<td><strong>$938,4 MXN</strong></td>
				</tr>
			</table>
			</div>
<br>
		<div style="text-align: center;font-size: 17px;line-height: 27px;">
			<h3 class="mayuscula">total de suscripcion</h3>
			<label>total</label>
		</div>
		<br><br><br>

		
		


	';


	echo $HTML = addImgPath($header.$titulo.$footer);

	// wp_mail( "loaiza2610@gmail.com.com", "Prueba", $HTML);
?>