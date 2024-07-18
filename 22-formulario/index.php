<!DOCTYPE html>

<?php
// VALIDAÇÕES
    //Funções (filter_input - Filter_var)
    //FILTER_VALIDATE_INT
    //FILTER_VALIDATE_EMAIL
    //FILTER_VALIDATE_FLOAT
    //FILTER_VALIDATE_IP
    //FILTER_VALIDATE_URL
?>

<?php

if (isset($_POST['enviar_formulario'])) {
	// Array de erros
	$erros = array();
	
	// Validação dos campos do formulário
	if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
		$erros[] = "Idade precisa ser um inteiro";
	}
	if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
		$erros[] = "Email está incorreto";
	}
	if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
		$erros[] = "Peso está incorreto";
	}
	if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
		$erros[] = "IP está incorreto";
	}
	if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
		$erros[] = "URL está incorreta";
	}

	// Exibindo mensagens de erro ou sucesso
	if (!empty($erros)) {
		foreach ($erros as $erro) {
			echo "<li>$erro</li>";
		}
	} else {
		echo "Parabéns, seus dados estão corretos";
	}
}

?>


<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Idade: <input type="text" name="idade"><br>
    Email: <input type="email" name="email"><br>
    Peso: <input type="peso" name="peso"><br>
    IP: <input type="ip" name="ip"><br>
    URL: <input type="url" name="url"><br>

    <button type="submit" name="enviar_formulario">Enviar</button>
</form>

</body>
</html>
	