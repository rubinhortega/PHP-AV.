<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>"Tela de cadastro"</title>
</head>
<body>
  <?php
  $ok = 1;

  if ( (isset($_POST['nome'])) and (isset($_POST['cpf'])) and (isset($_POST['rg'])) and (isset($_POST['idade'])) )
  {
    $nome = $_POST['nome'];
    $cpf  = $_POST['cpf'];
    $rg  = $_POST['rg'];
    $idade  = $_POST['idade'];
  }
  else
  $ok = 0;

  if ($ok == 1)
  {
    echo '<br><br>Gravado com sucesso.'.'<br>';

    $arq = "registro.txt";

    if(!file_exists($arq))
    $handle = fopen($arq, "w");
    else
    $handle = fopen($arq, "a");

    fwrite($handle, "Nome:".$nome."\n");
    fwrite($handle, "CPF:".$cpf."\n");
    fwrite($handle, "RG:".$rg."\n");
    fwrite($handle, "Idade:".$idade."\n");
    fflush($handle);
    fclose($handle);
  }
  else
  echo '<br><br>Informe o Nome, CPF, RG e idade.'.'<br>';

  ?>
  <p>
    <a href="benvindo.php" class="btn btn-danger">Voltar</a>
  </p>

</body>
</html>
