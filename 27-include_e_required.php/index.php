<?php

include 'header.php';

?>

<?php 
echo "Olá pessoal!<hr>";

$datapagamento = mktime(20, 15, 00, 18, 8, 2024);

echo date('d/m - H:i', $datapagamento)."<br>";


//convertendo data de 2002-08-18 para 18/08/2002
$dataz = "2002-08-18";
echo $dataz."<br>";	
$data_timestamp = strtotime($dataz);
echo date('d/m/Y', $data_timestamp);

?>




<?php

include 'footer.php';




?>



