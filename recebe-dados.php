<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
  
 <h1> Fundamentos do PHP - listaL1 - exercicio2 </h1>

 <?php
// Entrada de dados

$distancia = $_POST["Distancia"] ;
$consumo = $_POST["Consumo"] ;
$precoPorLitro = $_POST["Preco"] ;


// calculando quantos litros serão gastos na viagem

$quantosLitros = $distancia / $consumo;

// calculando quanto foi gasto na viagem

$quantosReais = $quantosLitros * $precoPorLitro;

// Saida de dados


// formatando variaveis numericas. Faça isso antes do comando echo!


$quantosReaisFormatado = number_format ($quantosReais, 2, ",", ".") ;

$quantosLitrosFormatado = number_format ($quantosLitros, 2, ",", ".") ;

$precoPorLitroFormatado = number_format ($precoPorLitro, 2, ",", ".") ;

echo "<p> Processando os dados da viagem: <br>
Gastos em reais com a viagem = <span> R$$quantosReaisFormatado </span> <br>
Gastos em litros de combustível = <span> R$$quantosLitrosFormatado litros </span> <br>
Preço por litro de combustível = <span> R$$precoPorLitroFormatado</p>";

 ?>

 </body>
 </html>