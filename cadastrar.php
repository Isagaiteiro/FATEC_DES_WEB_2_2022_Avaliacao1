<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="guardar_dados.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label >Digite o nome da ração: </label><br>
        <input type="text"  name="nome_prod" value=""></input><br>
        <label >Digite a quantitade: </label><br>
        <input type="numeric"  name="quantidade" value=""></input><br>
        <label >Digite o nome do fornecedor:</label><br>
        <input type="numeric"  name="fornecedor" value=""></input><br>
        <input type="submit" name="Enviar" value="Cadastrar"></input><br>
    </form>
</body>
</html>