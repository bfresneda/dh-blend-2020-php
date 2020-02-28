<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $titulo = "Primeira aula de PHP"

    ?>
    <h1> <?php echo $titulo; ?> </h1>
 <!-- condicionais -->
    <?php
    $idade = 17;
    if ($idade >= 18) {
        echo "<h2>Pode levar a bebida </h2>";
    } else {
        echo "<h2>Não pode levar a bebida </h2>";
    }
    ?>
       <hr>
     <!-- Exercicio de if - else -->
     <p>Exercicio de condicionais</p>
     <p>1- Verificar se uma pessoa pode votar ou não, se está pessoa possui voto facultativo</p>
    
    <?php
     $idade = 71;

     if($idade <=15){
         echo "<h2>Voce ainda nao pode votar</h2>";
     }
     else if($idade >= 16 && $idade <=18 || $idade >= 70){
         echo "<h2> O seu voto é facultativo</h2>";
     }else{
         echo "<h2> Voto obrigatório </h2>";
     }


    ?>
    <hr>
        <?php
        $genero = "outros";
        switch ( $genero ) {
            case "Masculino":
                echo "É do gênero masculino";
                break;
            case "Feminino":
                echo "É do gênero feminino";
                break;
            default:
                echo "Prefere não dizer";
                break;
        }
    ?>
        <hr>
    <p>Exercicio de condicionais - switch</p>
    <p>1- Verificar se uma variavel é 0 e retornar, você informou o valor 0.
        Ou, se a variavel é 1 e retornar, você informou o valor 1.
        Se a variavel for qualquer outro numero, retornar o valor informado</p>
<?php
        $valor = 15;

        switch($valor){
            case 0:
                echo "Voce informou o valor $valor.";
                break;
            case 1:
                echo "Voce informou o valor $valor.";
                break;
            default:
                echo "Voce informou o valor $valor";
                break;
        }
  ?>
    <hr>
    <h1> arrays </h1>
    <?php 

$usuario = [
    "email" => "bruno@gmail.com",
    "senha" => "123456"   
];

// percorrendo array usuario
echo "<pre>";
    var_dump($usuario);
echo "</pre>";
        ?>
</body>
</html>
