<?php
    include('conexao.php');
    $sql = $conn->prepare('SELECT*FROM funcionarios ORDER BY salario desc');
    $sql->execute();
    $result = $sql->fetchAll();
    var_dump($result);
    // foreach($result as $item){
    //     echo $item['nome'].' R$'.$item['salario'].'<br>';
    // }
?>