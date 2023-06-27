<?php
include("conexao.php");
// Dados do cadastro a ser inserido na tabela administrativo


$id_Administrativo = $_POST['id_Administrativo'];
$salario_Administrativo = $_POST['salario_Administrativo'];
$cargo_Administrativo = $_POST['cargo_Administrativo'];
$id_Funcionario	 = $_POST['id_Funcionario'];


// Montando a query SQL para inserir o novo cadastro na tabela administrativo
$sql = "INSERT INTO adminstrativo (id_Administrativo, salario_Administrativo, cargo_Administrativo, id_Funcionario)
        VALUES ($id_Administrativo, $salario_Administrativo, '$cargo_Administrativo', $id_Funcionario)";
        var_dump($sql);

// Executando a query SQL
if (mysqli_query($conn, $sql)) {
  echo "Cadastro inserido com sucesso!";
} else {
  echo "Erro ao inserir o cadastro: " . mysqli_error($conn);
}

// Fechando a conexão com o banco de dados
mysqli_close($conn);
?>