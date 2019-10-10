<?php

  $conexao = mysqli_connect("localhost","id10996549_apppizza","bananaazul2405","id10996549_apppizza");
 //                    onde está o banco, usuario banco,           senha ,     nome do banco de dados

  $sabor = $_POST['sabor'];
  $valor = $_POST['valor'];

  $query = "insert into tb_pizza values (null,'$sabor',$valor)";

  mysqli_query($conexao,$query);

  echo "Registro salvo com sucesso!";

   ?>
