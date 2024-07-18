<?php
/* funçoes para strings
strtoupper
strtolower
substr
str_pad
str_repeat
strlen
str_replace
strpos
*/

echo $nome = strtoupper("Gabriel Gonçalves")."<hr>";	

echo $mensagem = substr("Olá Mundo", 4)."<hr>";

echo $objeto = str_pad("gol quadrado completo", 22,"*")."<hr>";

echo $string = str_repeat("Sucesso!", 5)."<hr>";

echo $mensagens = strlen("Olá mundo")."<hr>";

$texto = "Messi é o melhor jogador do mundo!!";
echo $novoTexto = str_replace("Messi", "Cistiano Ronaldo", $texto). "<hr>";

echo strpos($texto, "jogador");
