
<?php
    include('conexao.php');

    $sql = $conn->prepare('SELECT*FROM DEPARTAMENTOS ORDER BY NOME');
    $sql->execute();

    $result = $sql->fetchAll();
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
    <div class="container">
        <h1>Listagem de departamentos</h1>
        <hr>
        <a href="form-departamentos.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"> </i>NOVO</a>
        <hr>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>SIGLA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($result as $r){
                ?>
                    <tr>
                        <td><?php echo $r['nome'];?></td>
                        <td><?php echo $r['sigla'];?></td>
                        <td class="text-right">
                            <a href="form-departamentos.php?id_departamento=<?php echo $r['id_departamento'];?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>

                            <a onclick="return confirm('Deseja realmente excluir?')" href="acao-departamentos.php?acao=excluir&id_departamento=<?php echo $r['id_departamento'];?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>

                        </td>
                    </tr>
                <?php
                    }
                ?>    
            </tbody>
        </table>
        <a href="index.php" class="btn btn-success"><i class="glyphicon glyphicon-chevron-left"> </i>VOLTAR</a>
    </div>
</body>
</html>