<?php
$result="";
if(isset($_POST['submit'])){
	require 'Mailer/OAuth.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username='bestdental.supp@gmail.com';
	$mail->Password='Chococrispy747.';

	$mail->setFrom($_POST['email'],$_POST['nombre']);
	$mail->addAddress('bestdental.supp@gmail.com');
	$mail->addReplyTo($_POST['email'],$_POST['nombre']);

	$mail->isHTML(true);
	$mail->Subject='Enviado por '.$_POST['nombre'];
	$mail->Body='<h1 align-center>Nombre: '.$_POST['nombre'].'<br>Email: '.$_POST['email'].'<br>Mensaje: '.$_POST['mensaje'].'</h1>';

	if(!$mail->send()){
	$result="Algo esta mal, intentelo de nuevo";
	}
	else{
	$result="Gracias ".$_POST['nombre']." por contactarnos, espera la respuesta muy pronto";
	}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sobre Nosotros | Best Dental</title>
	<link rel="stylesheet" href="../style/styleAbout.css">
</head>
<body>
	<header>
		<div class="textos">
			<h1 class="titulo">Clinica Best Dental</h1>
			<h3 class="subtitulo">Sonrie Dios te ama!</h3>
			<a href="#" class="boton">Agenda tu cita</a>
		</div>
		<div class="sesgoabajo"></div>
	</header>
	<main>
		<section class="acerca-de">
			<div class="contenedor">
				<h2 class="sobre-nosotros">Sobre Nosotros</h2>
				<h3 class="slogan">La mejor opción para tu salud</h3>
				<p class="parrafo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus tempora doloremque officia, quia ab pariatur corporis minima ut provident libero vel magnam animi nemo suscipit! Architecto natus voluptates qui laudantium ipsum, consequatur sunt alias in, accusantium fuga ipsa consequuntur tempora. Doloremque nostrum repudiandae illo voluptatibus qui rem ullam ipsum non?</p>
				<p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis commodi fugit facilis eaque doloremque enim aliquid esse? Debitis error a, unde cupiditate quas veniam vel quo eaque molestiae? Cupiditate excepturi, iste dolor libero ducimus incidunt repellat magni explicabo ipsam illo corporis minus fugit sequi, aliquid vero totam atque culpa iusto!</p>
				<a href="#" class="boton">Agenda tu cita</a>
			</div>
		</section>
		<section class="galeria">
			<div class="sesgoarriba"></div>
			<div class="imagenes none">
				<img src="./images/imagesAbout/1.jpg" alt="">
			</div>
			<div class="imagenes">
				<img src="./images/imagesAbout/3.jpg" alt="">
			</div>
			<div class="imagenes">
				<img src="./images/imagesAbout/2.jpg" alt="">
				<div class="encima">
					<h2>Best Dental</h2>
					<div></div>
				</div>
			</div>
			<div class="imagenes">
				<img src="./images/imagesAbout/4.jpg" alt="">
			</div>
			<div class="imagenes none">
				<img src="./images/imagesAbout/5.jpg" alt="">
			</div>
			<div class="sesgoabajo"></div>
		</section>
		<section class="miembros">
			<div class="contenedor">
				<h2 class="sobre-nosotros">Nuestro Equipo</h2>
				<h3 class="slogan">Conoce a nuestro equipo de trabajo</h3>
				<div class="cards">
					<div class="card">
						<img src="./images/pics/imageUs2.jpg" alt="">
						<h4>Dra. Christie Vílchez</h4>
						<p>Cirujana Dentista</p>
					</div>
					<div class="card">
						<img src="./images/pics/imagUs1.jpg" alt="">
						<h4>Equipo Medico</h4>
						<p>Clinicas totalmente equipadas</p>
					</div>
					<div class="card">
						<img src="./images/imagesAbout/reception.jpg" alt="">
						<h4>Lorem</h4>
						<p>Lorem ipsum dolor sit.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="fondo">
			<div class="sesgoarriba"></div>
			<div class="contenedor">
				<h2 class="titulo-patrocinadores">Como te ayudamos</h2>
				<div class="clientes">
					<div class="cliente">
						<img src="./images/imagesAbout/diagnosticar.png" alt="">
						<p>Diagnosticar preocupaciones dentales</p>
					</div>
					<div class="cliente">
						<img src="./images/imagesAbout/prevenir.png" alt="">
						<p>Prevenir & detener las caries dental</p>
					</div>
					<div class="cliente">
						<img src="./images/imagesAbout/reparar.png" alt="">
						<p>Repare los dientes dañados & en descomposición</p>
					</div>
					<div class="cliente" id="cuarto">
						<img src="./images/imagesAbout/restaura.png" alt="">
						<p>Restaura la función de tu sonrisa</p>
					</div>
				</div>
			</div>
			<div class="sesgoabajo-unico"></div>
		</section>
	</main>
	<footer>
		<div class="contenedor">
            <h2 class="titulo-footer">Contactanos</h2>
            <h3 class="subtitulo-footer">Lo apreciariamos mucho</h3>
            <div class="footer">
                <form action="" name="enviar" method="post">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Ingrese su mensaje..."></textarea>
					<input type="submit" value="Enviar">
					<h5 class="notifCorrecto"> <?= $result; ?> </h5>
                </form>
            </div>
        </div>
	</footer>
</body>
</html>