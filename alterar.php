<?php

  $conexao = mysqli_connect("localhost","id10996549_apppizza","bananaazul2405","id10996549_apppizza");
 //                    onde está o banco, usuario banco,           senha ,     nome do banco de dados
      $codigoLista = $_POST['codigo'];
      $saborLista = $_POST['sabor'];
      $precoLista = $_POST['preco'];

      $query = "update tb_pizza set ds_sabor = '$saborLista',vl_pizza = $precoLista where cd_pizza = $codigoLista";

      mysqli_query($conexao,$query);

echo "Registro alterado com sucesso!";
