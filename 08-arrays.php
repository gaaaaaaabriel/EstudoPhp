	<?php
	//Arrays

	color:
	$carros = ["BMW", "Fusca", "Gol Quadrado", "Camaro", "Gol G3", "Tracker", "Amarok", "Voyage"];
	$dados = array("nome"=> "Gabriel", "idade"=> 18, "altura"=> 1.86);
	$times = array(
		"Europeu"=> array("Campeão da Champions"=> "Real Madrid", "segundo colocado kk"=> "Barcelona", 
			"Terceiro colocado"=>	"Paris Sant Germain"),
		"Brasileiro"=> array("PRIMEIRISSIMO LUGAR"=> "Santos", "segundo lugar"=> "Gremio", 
			"terceiro lugar"=> "Fluminense"),
		"Japones"=> array("Primeiro"=> "Yoriichi", "segundo"=>"Mshinazugawa", "terceiro"=> "Meiji Yasuda")
	);
 

	/////////////////////////////////////////////
	for ($i=0; $i < count($carros); $i++) { 
		echo $carros[$i]. "<br>";
		if ($i == 2) {
			$resultado = $carros[$i];
			//echo $resultado;
		}
	}
	/////////////////////////////////////////////
	echo "<hr>";
	foreach ($dados as $key => $value) {
		echo $key.": ".$value."<br>";
	}
	echo "<hr>";
	echo $resultado."<hr>";
	/////////////////////////////////////////////
	foreach($times["Europeu"] as $indices => $valor){
		echo $indices.": ".$valor. "<br>";
	}

	echo"<hr>";
	foreach($times["Brasileiro"] as $indices => $valor){
		echo $indices.": ".$valor. "<br>";
	}

	echo"<hr>";
	foreach($times["Japones"] as $indices => $valor){
		echo $indices.": ".$valor. "<br>";
	}
	echo"<hr>";


