<?php
//IF AND ELSE//
$valor = 7;
if ($valor == 10){
	echo "É igual a 10";
}else{
	echo "Não é igual a 10";
}
echo "<hr>";
$media = 7;
echo($media >= 7) ? "Aporvado!!" : "reprovado";



//SWITCH CASE//
echo"<hr>";
$cor = "azul";

switch ($cor) {
	case 'vermelho':
		echo "Sua cor preferia é o vermelho";
		break;
	case 'preto':
		echo "Sua cor favorita é o preto";
		break;	
	case 'azul':
		echo "Sua cor favorita é o azul";
		break;

	default:
	   echo"Sua cor preferida não se encontra aqui";
	   break;

}