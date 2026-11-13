 <DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>Registro de prodctos</title>
 </head>
 <body>

 	<h2>REGISTRO DE TRES PRODUCTOS</h2>

 	<form method="POST" action="">

 	<?php
 	for($i=0;$i<3;$i++){
 		echo"Numero1:";
 		echo"<input type='number' name='n1[]'>"."";

 		echo"Numero2:";
 		echo"<input type='number' name='n2[]'>"."";
 		echo"<br><br>";
 	if(n1<51 or n1>100){
		alert("Los primeros numeros tienen que estar en el rango 51-99");
		return;
	}
	if(n2<-50 or n2>-1){
		alert("Los segundos numeros tienen que estar en el rango -50 - -1");
		return;
 	}
 	?>

 	<button type="submit" name="guardar" value="guardar">
 		Guardar y calcular
 	</button>

 	<?php
 	if(isset($_POST['guardar'])){
 		$n1=$_POST['n1'];
 		$n2=$_POST['n2'];
	}
 		$suma=array();
 		$resta=array();
 		$multi=array();
 		$divicion=array();

 		for($i=0;$i<3;$i++){
 			$suma[$i]=$n1[$i]+$n2[$i];

 			$resta[$i]=$n1[$i]-$n2[$i];

 			$multi[$i]=$n1[$i]*$n2[$i];

 			$divicion[$i]=$n1[$i]/$n2[$i];
 		}

 		echo"<h3>PRIMER NUMERO</h3>";
 		for($i=0;$i<3;$i++){
 			echo$n1[$i]."<br>";
 		}
 		echo"<h3>SEGUNDO NUMERO</h3>";
 		for($i=0;$i<3;$i++){
 			echo number_format($n2[$i])."<br>";
 		}
  		echo"<h3>SUMA</h3>";
 		for($i=0;$i<3;$i++){
 			echo number_format($suma[$i])."<br>";
 		}
 		echo"<h3>RESTA</h3>";
 		for($i=0;$i<3;$i++){
 			echo number_format($resta[$i])."<br>";
 		}
 		echo"<h3>MULTIPLICACION</h3>";
 		for($i=0;$i<3;$i++){
 			echo number_format($multi[$i])."<br>";
 		}
 		echo"<h3>DIVICION</h3>";
 		for($i=0;$i<3;$i++){
 			echo number_format($divicion[$i],2)."<br>";
 		}
 	}
 ?>
</body>
</html>