<?php
	//include dirname(__DIR__).'/wp-load.php';

	$header = getTemplate('/generales/header.php');
	$footer = getTemplate('/generales/footer.php');

	$titulo = '
		<div style="font-size: 25px; background: #0b1805; color: #FFF; text-align: center; padding: 30px 20px; font-weight: 600;">
			Kmimos te est&aacute; contactando	

		</div> 
		<div>
			<img src="[IMG_PATH]contacto/contacto_kmimos1.png" style="width: 100%; margin: 0px 0px 10px; border-bottom: solid 10px #75e417;"/>
		</div>
		<div>
				sabemos que quiere el<strong>alimento de tu peludo en tu casa</strong> y sin costo adicional 

		</div>
		<br>
		<div>
		<label>por eso te estamos contact&aacute;ndote v&iacute;a telef&oacute;nica</label>
		<br>
		<label>si no has recibido contacto de ninguno de nuestros asesores,verifica tus datos ac&aacute;</label>
		<br><label></label>
		<label>para verificar tus datos</label>
		<a 	href="" 
				style="
					padding: 15px 30px;
					border-radius: 50px;
					background-color:#ffffff;
					color: #000;
					margin: 20px 0px;
					border: solid 2px #091705;
					text-align: center;
				"
			>has click aqui</a>
		</div>
		<br>
		<div>
		<h3>detalles del pedido</h3>
		</div>
		

	';


	echo $HTML = addImgPath($header.$titulo.$footer);

	wp_mail( "loaiza2610@gmail.com.com", "Prueba", $HTML);
?>