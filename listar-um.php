<?php

  $conexao = mysqli_connect("localhost","id10996549_apppizza","bananaazul2405","id10996549_apppizza");
 //                    onde está o banco, usuario banco,           senha ,     nome do banco de dados

  $codigo = $_POST['codigo'];

  $query = "SELECT * FROM tb_pizza WHERE cd_pizza = $codigo";

  $result = mysqli_query($conexao,$query);


  while($linha = mysqli_fetch_assoc($result)){
    $registro = array(
      'pizza' => array(
      'codigo' => $linha['cd_pizza'],
      'sabor' => $linha['ds_sabor'],
      'valor' => $linha['vl_pizza']
      )
    );
  }

  echo json_encode($registro);
