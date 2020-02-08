<?php
include('valida-sessao.php')
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        include('menu.php');
    ?>
    <div class="container">
        <h3>Bem vindo, <?php echo $_SESSION['nome'];?>.</h3>
    </div>
</body>
</html>