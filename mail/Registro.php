<?php
	include dirname(__DIR__).'/wp-load.php';

	$header = getTemplate('/generales/header.php');
	$footer = getTemplate('/generales/footer.php');

	$titulo = '
		<div style="font-size: 25px; background: #0b1805; color: #FFF; text-align: center; padding: 30px 20px; font-weight: 600;">
			¡Felicidades Rodrigo!
			
			<div  class="text" style="font-size: 17px; padding: 10px 20px 0px; font-weight: 400;"> 
				Tu registro fue exitoso
			</div>

		</div> 
		<div>
			<img src="[IMG_PATH]registro/registro01.png" style="width: 100%; margin: 0px 0px 10px; border-bottom: solid 10px #75e417;" />
		</div>
		<div style="font-size: 17px;line-height: 27px">
				<label><strong>¡Gracias por registrarte en Nutriheroes!</strong> <br>Ahora necesitas confirmar tu correo para activar tu cuenta.</label>

		</div>
		<br>
		<div class="mayuscula" style="text-align: left;font-size: 16px;line-height: 27px">
			<h3>la direci&oacute;n asosciada a tu cuenta es:</h3>
			<label>r.rodriguez@kmimos.la</label>
		</div>
<br><br>
			<div style="font-size: 17px;line-height: 27px">

				<label class="min-text">para confirmar la direccion de correo electr&oacute;nico <strong>haz click en este enlace:</strong> </label> 
				</div>

				<div>	
				<br><br><br>
				
				<a 	href="" 
				style="
					padding: 15px 30px;
					border-radius: 50px;
					background-color:#ffffff;
					color: #000;
					margin: 20px 0px;
					border: solid 4px #091705;
					text-align: center;
					text-decoration: none;
				"
			>confirmar correo</a>
			</div>

		<br><br>
			<label style="text-align: center;font-size: 17px;line-height: 27px">Si recibiste este correo sin haberte registrado, por favor ignoralo.</label> 
<br><br>


	';


	echo $HTML = addImgPath($header.$titulo.$footer);

	// wp_mail( "loaiza2610@gmail.com.com", "Prueba", $HTML);
?>