<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        session_start();
        if ($_POST['username']=='fatec' and $_POST['password']=='araras'){
            $_SESSION['loggedin']=TRUE;

            $_SESSION['username']='Isabela';
            header("location: start.php");
        } else {
            $_SESSION['loggedin']=FALSE;
        }
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Digite seu usuário: </label><br>
        <input type="text" id="username" name="username"></input><br>
        <label for="password">Digite sua senha: </label><br>
        <input type="text" id="password" name="password"></input><br><br>
        <input type="submit" name="Enviar"></input>
    </form>
</body>
</html>