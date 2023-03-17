<?php
// Definir as variaveis
$nameErr = $emailErr = $genderErr = $idadeErr = "";
$name = $email = $gender = $idade = "";
$jogos = array(5);/*
$jogos[0] = arroz;
$jogos[1] = arro;
$jogos[2] = arr;
$jogos[3] = ar;
*/
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
  for ($ii=1; $ii < 6; $ii++) { 
    if (empty($_POST["fjogo")) {
      $jogos[$ii-1] = "";
    } else {
      $jogos[$ii-1] = test_input($_POST["fjogo"]);
    }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>TP - Formulario - Resultado</title>
</head>

<body>

    <header>
        <nav class="nav_menu" id="topnav">
            <a href="#" class="active">Home</a>
            <a href="\Escola/DSW/menuSub.html">SubMenu - DSW</a>
            <a href="index.html">Formulario - Questão</a>
            <a href="#form_rest">Formulario - Resposta</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-bars"></i>
            </a>
        </nav>

        <script>
        function myFunction() {
            var x = document.getElementById("topnav");
            if (x.className === "nav_menu") {
                x.className += " responsive";
            } else {
                x.className = "nav_menu";
            }
        }
        </script>
        
        <div class="hdr_ctn_img">
            <img class="hdr_img" src="img/hdr_img.jpg" alt="Cidade Urbana">
        </div>
    </header>

    <section>
        <?php
			echo "<a id='form_rest'><h2>Informações:</h2></a>
			<p>Nome: $name<br>
			E-mail: $email<br>
			Idade: $idade anos<br>
			Genero: $gender<br>
			</p>
			<br><br>";
			for ($ii=0; $ii < 5; $ii++) { 
				echo $jogos[$ii]."<br>";
			}
		?>
    </section>
    <footer>
        <p class="ftr_direitos"> TP - Curriculos - 2022, todos os
            direitos reservados.</p>
        <p class="ftr_autor">Desenvolvido por: <a href="#" title="Jonatas e Eriel">Jonatas Renan e Eriel</a></p>
    </footer>
</body>

</html>
