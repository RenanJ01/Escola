<?php
  // Definir as variaveis
  $nameErr = $emailErr = $genderErr = $idadeErr = "";
  $name = $email = $gender = $idade = "";
  
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

  function test_input($data){
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
    <?php
      echo "<h2>Informações:</h2>";
      echo $name;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $idade;
      echo "<br>";
      echo $gender;
    ?>
    <br><br>

    <footer>
        <p class="ftr_direitos"> TP - Curriculos - 2022, todos os
            direitos reservados.</p>
        <p class="ftr_autor">Desenvolvido por: <a href="#" title="Jonatas e Eriel">Jonatas Renan e Eriel</a></p>
    </footer>
</body>

</html>