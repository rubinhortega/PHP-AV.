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
  <title>"Boas vindas"</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <style type="text/css">
  body{ font: 14px sans-serif; text-align: center; background-color: #fff !important }
  </style>
</head>
<body>
  <div class="page-header">
    <h1>Olá, tudo bem <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
      <br>
    </b>"Bem-vindo para a Avaliação"</h1>
  </div>
  <p>

    <a href="cadastro.php" class="btn btn-primary">Faça seu cadastro</a>
    <br><br>

    <a href="sair.php" class="btn btn-danger">Voltar</a>
  </p>
</body>
</html>
