<?php

  $conexao = mysqli_connect("localhost","id10996549_apppizza","bananaazul2405","id10996549_apppizza");
 //                    onde está o banco, usuario banco,           senha ,     nome do banco de dados
      $codigoLista = $_POST['codigo'];

      $query = "delete from tb_pizza where cd_pizza = $codigoLista";
      
      mysqli_query($conexao,$query);

      echo "Registro deletado com sucesso!";
