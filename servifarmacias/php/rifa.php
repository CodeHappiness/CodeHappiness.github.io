 <?php
	$validEntry = true;
	
	$handle = fopen("registroRifa.txt", "a+");
	
	$string = $_POST["folio"]." ".$_POST["monto"]." ".$_POST["correo"]." ".$_POST["telefono"]." ".$_POST["sucursal"];
	
	
	
	
	if($handle){
		while(($line = fgets($handle)) !== false){
			
			$segment = explode(" ", $line);
			if($segment[0] === $_POST["folio"] && $segment[1] === $_POST["monto"] && $segment[4] === $_POST["sucursal"]."\n"){
				$validEntry = false;
			}
			
		}

		
	}


	

	if($validEntry){
		fwrite($handle, $string."\n");
	}
	
	
	
	
	fclose($handle);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registro Rifa</title>
	</head>
	<body>
		<h1>Registro de rifa </h1>
		<p><?php
			if($validEntry){
				echo "Ya fue registrado en la rifa. ¡Suerte!";
			} else{
				echo "El ticket que usted registro no es valido";
			}
		?> </p>
	</body>
</html>
