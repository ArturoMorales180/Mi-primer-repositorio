#matriez a debe de ir de 10 en 10 desde 100, matirz b debe de tener valores de 20 en 20 iniciando en el 500y la matriz c que debe contener las sumas del mismo inidice de la matriz a y b.
<DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>suma de matrizes</title>
 </head>
 <body>

 	<h2>SUMA DE MATRICES</h2>

 	<form method="POST" action="">

 	<button type="submit" name="guardar" value="guardar">
 		Calcular e imprimir
 	</button>

 	<?php
 	if(isset($_POST['guardar'])){
 		$ma1=[[100,110,120],[130,140,150],[160,170,180]];
 		$ma2=[[500,520,540],[560,580,600],[620,640,680]];
 		$ma3=$_POST['ma3'];

 		$subtotales=array();
 		$iva=array();
 		$totales=array();

 		for($i=0;$i<3;$i++){
 			$subtotales[$i]=$precios[$i]*$cantidades[$i];

 			$iva[$i]=$subtotales[$i]*0.16;

 			$totales[$i]=$subtotales[$i]+$iva[$i];

 		}

 		echo"<h3>ARREGLO DE PRODUCTOS</h3>";
 		for($i=0;$i<3;$i++){
 			echo$productos[$i]."<br>";
 		}
 		echo"<h3>ARREGLO DE PRECIOS</h3>";
 		for($i=0;$i<3;$i++){
 			echo"$".number_format($precios[$i],2)."<br>";
 		}
 		echo"<h3>ARREGLO DE CANTIDADES</h3>";
 		for($i=0;$i<3;$i++){
 			echo"$".number_format($cantidades[$i],2)."<br>";
 		}
 		echo"<h3>ARREGLO DE SUBTOTALES</h3>";
 		for($i=0;$i<3;$i++){
 			echo"$".number_format($subtotales[$i],2)."<br>";
 		}
 		echo"<h3>ARREGLO DE IVA</h3>";
 		for($i=0;$i<3;$i++){
 			echo"$". number_format($iva[$i],2)."<br>";
 		}
 		echo"<h3>ARREGLO DE TOTALES</h3>";
 		for($i=0;$i<3;$i++){
 			echo"$".number_format($totales[$i],2)."<br>";
 		}
 	}
 ?>
</body>
</html>