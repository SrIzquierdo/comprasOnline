<?php
	/* Formulario y como envia la información y se visualiza */
	echo "Nombre: ".$_POST["nombre"]."<br>";
	echo "Ciudad: ".$_POST["ciudad"]."<br>";
	
	/* Pregunta si existe el array de la etapa*/
	if (isset($_POST["etapa"])){
		echo "<ul>";
		$i=1;
		
		/* Hará lo siguiente del FOREACH por cada etapa */
		foreach($_POST["etapa"] as $etapa){
			
			echo "<li>Etapa ".$i.": ".$etapa."</li>";
			$i++;
		}
		echo "</ul>";
	}
	/* Si no existe hará la siguiente linea */
	else{echo "No eligió etapa";}
	echo "Letra: ".$_POST["letra"]."<br>";
	
	/* Pregunta si existe el valor de aceptar los terminos y condiciones */
	if (isset($_POST["aceptado"])){
		echo "Terminos aceptados: ".$_POST["aceptado"]."<br>";
	}
	else{
		echo "Terminos no aceptados";
	}
?>