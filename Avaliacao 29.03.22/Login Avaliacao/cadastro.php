<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>"Seu cadastro"</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 16px sans-serif; text-align: center; background-color: #fff !important }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Cadastro</h1>
        <form action="grava.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>RG</label>
                <input type="text" name="rg" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Idade</label>
                <input type="text" name="idade" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Salvar">
            </div>
        </form>
    </div>


    <p>
        <a href="welcome.php" class="btn btn-danger">Voltar</a>
    </p>
</body>
</html>
