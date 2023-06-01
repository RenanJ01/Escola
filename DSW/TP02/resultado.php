<?php
// Definir as variaveis
$nameErr = $emailErr = $genderErr = $idadeErr = "";
$name = $email = $gender = $idade = "";
$jogos = null;

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
    if (empty($_POST["fjogo"])){
      $jogos = "";
    } else {
      $jogos = test_input_array($_POST["fjogo"]);
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

/*Verificação dos Valores das variaveis*/
if($name==""){
	$name = "Desconhecido";
}
if($email==""){
	$email = "Desconhecido";
}
if($idade==""){
	$idade = 0;
}
if($gender==""){
	$gender = "Desconhecido";
}

/*Funções de Segurança na Inserção*/	
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function test_input_array($data)
{
  for ($iii=0; $iii < count($data); $iii++) { 
    $data[$iii] = trim($data[$iii]);
    $data[$iii] = stripslashes($data[$iii]);
    $data[$iii] = htmlspecialchars($data[$iii]);
  }
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
    <link rel="icon" type="image/ico" href="\Escola/Imagens/title.ico"/>
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
			<p>
			Nome: $name<br>
			E-mail: $email<br>
			Idade: $idade anos<br>
			Genero: $gender<br></p><br>
			<h2>Jogos já jogados:</h2>";
			
      if($jogos==""){
        echo "<p> Nenhum jogo foi selecionado.";
      }else{
        echo "<p>";
			for ($ii=0; $ii < count($jogos); $ii++) { 
				echo $jogos[$ii]."<br>";
			}
    }
      echo "</p><br>";
		?>
    </section>
    <footer>
        <p class="ftr_direitos"> Escola - Trabalhos Praticos - 2022, todos os
            direitos reservados.</p>
        <p class="ftr_autor">Desenvolvido por: <a href="#" title="Jonatas e Eriel">Jonatas Renan e Eriel</a></p>
    </footer>
</body>

</html>
