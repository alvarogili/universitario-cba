ï»¿<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Universitario CBA</title>
        <link rel="shortcut icon" href="imagenes/ucba.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/styles.css"/>
        <script src="js/prefixfree.min.js"></script>		
        <!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->        
    </head>
    <body>  	    
	    <section id="section">
		    <header>
		    	<center>
		    		<a href="index.html">
		    			<img id="logo" src="imagenes/logo.png" />
		            </a>
		        </center>
		    </header> 
		    <nav>
		    	<a href="index.html"><img src="imagenes/inicio.png" class="boton"/></a><a href="instituciones.html" 
		    	><img src="imagenes/instituciones.png" class="boton"/></a><a href="agenda.html" 
		    	><img src="imagenes/agenda.png" class="boton"/></a><a href="fotos.html"
		    	><img src="imagenes/fotos.png" class="boton" /></a><a href="contacto.html" 
		    	><img src="imagenes/contactoSel.png" class="boton"/></a>
		    </nav>	
	    	<article id="art_contacto">		    	
		        <?php 
				$nombre = $_POST['nombre']; 
				$apellido = $_POST['apellido']; 
				$telefono = $_POST['telefono']; 
				$localidad = $_POST['localidad']; 
                                $from = $_POST['mail'];

				$header = 'From: ' . $nombre ." " . $apellido . "<" . $from . "> \r\n"; 
				$header = 'Reply-To: ' . $nombre ." " . $apellido . "<" . $from . "> \r\n"; 
				$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
				$header .= "Mime-Version: 1.0 \r\n"; 
				$header .= "Content-Type: text/plain"; 

				$mensaje = "Este mensaje fue enviado por " . $nombre . " " . $apellido. " \r\n"; $mensaje .= "Su e-mail es: " . $_POST['mail'] . " \r\n\r\n"; 
				$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n\r\n"; 

				if((strcmp($telefono,"") != 0)){ 
					$mensaje .= "Tel. de contacto: " . $telefono . " \r\n"; 
				} 

				if((strcmp($localidad,"") != 0)){ 
					$mensaje .= "Localidad: " . $localidad . " \r\n"; 
				} 

				$mensaje .= "\r\nEnviado el " . date('d/m/Y', time()); 

				$para = 'universitariocba@gmail.com';
				//$para = 'alvarogili@gmail.com';
				$asunto = "Mensaje enviado desde universitario-cba.com.ar"; 

				mail($para, $asunto, utf8_decode($mensaje), $header); 
				header("refresh: 2; url=contacto.html");
				 ?>
				<h4 style="font-weight: normal; font-family: Calibri; text-align: center;"><big><big>&nbsp;
				Mensaje enviado Correctamente.</big></big></h4>
				<h4 style="font-weight: normal; font-family: Calibri; text-align: center;"><big><big>&nbsp;
				Aguarde un momento...</big></big></h4>
	            <br/>
	            <br/>
            </article>            
	    </section> 	    	       
 		<footer>
 		    <br>
			Diseño&nbsp;	        
			<a href="http://alvarogili.com.ar" target="_blank">
				<img alt="" src="imagenes/logo_alvaro_gili.png">
			</a>
		</footer>
</body>
</html>
