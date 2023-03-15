<?php
// Definir as variaveis
$nameErr = $emailErr = $genderErr = $idadeErr = $jogosErr = "";
$name = $email = $gender = $idade = $jogos = "";
$numjg = 0;

// Inserção das variaveis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "Nome é requisitada.";
  } else {
    $name = test_input($_POST["fname"]);
  }

  if (empty($_POST["femail"])) {
    $emailErr = "Email é requisitada.";
  } else {
    $email = test_input($_POST["femail"]);
  }
  if (empty($_POST["fjogo"])) {
    $jogosErr = "";
  } else {
    $jogos = test_input($_POST["fjogo"]);
  }
  if (empty($_POST["fidade"])) {
    $idadeErr = "Idade é requisitada.";
  } else {
    $idade = test_input($_POST["fidade"]);
  }

  if (empty($_POST["fgenero"])) {
    $genderErr = "Genero é requisitada.";
  } else {
    $gender = test_input($_POST["fgenero"]);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="tp02.css">
  <title>TP - Formulario - Resultado</title>
</head>

<body>
  <section>
    <?php
    echo "<h2>Informações:</h2>
      <p>Nome: $name<br>
      E-mail: $email<br>
      Idade: $idade anos<br>
      Genero: $gender<br>
      Jogos: $jogos<br>
      </p>"
    ?>
    <br><br>
    <?php
    echo "<h2>Jogos:</h2>"  

    ?>
  </section>
  <footer>
    <p class="ftr_direitos"> TP - Curriculos - 2022, todos os
      direitos reservados.</p>
    <p class="ftr_autor">Desenvolvido por: <a href="#" title="Jonatas e Eriel">Jonatas Renan e Eriel</a></p>
  </footer>
</body>

</html>