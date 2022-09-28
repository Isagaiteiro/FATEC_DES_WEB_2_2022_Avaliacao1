<?php

$nome_prod=$_POST['nome_prod'];
$quantidade=$_POST['quantidade'];
$fornecedor=$_POST['fornecedor'];

$filename = "lista_prod.txt";
if(!file_exists($filename)){
    $handle=fopen($filename, "w");
} else {
    $handle=fopen($filename, "a");
}

fwrite($handle,$nome_prod."\n");
fwrite($handle,$quantidade."\n");
fwrite($handle,$fornecedor."\n");
flush($handle);
fclose($handle);
    
$handle=fopen($filename,"r");
while(!feof($handle)){
    $line = fgets($handle);
    echo $line. "<br>";
}

fclose($handle);    
?>
