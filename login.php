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
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">LOGIN</div>
                
                    <div class="panel-body">
                        <form method="POST" action="autentica.php">
                            <div class="form-group">
                                <input type="text" name="usuario" placeholder="usuario" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="password" name="senha" placeholder="senha" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">ENTRAR</button>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
            <div class="col-lg-4"></div>
        </div>    
    </div>
</body>
</html>