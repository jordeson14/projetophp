<?php
include("conexao.php");
// Dados do cadastro a ser inserido na tabela rota
$id_Motorista = $_POST['id_Motorista'];
$cnh_Motorista = $_POST['cnh_Motorista'];
$salario_Motorista = $_POST['salario_Motorista'];
$id_Funcionario = $_POST['id_Funcionario'];


// Montando a query SQL para inserir o novo cadastro na tabela rota
$sql = "INSERT INTO motorista (id_Motorista, cnh_Motorista, salario_Motorista, id_Funcionario)
        VALUES ($id_Motorista, '$cnh_Motorista', '$salario_Motorista', $id_Funcionario)";

// Executando a query SQL
if (mysqli_query($conn, $sql)) {
  echo "Cadastro inserido com sucesso!";
} else {
  echo "Erro ao inserir o cadastro: " . mysqli_error($conn);
}

// Fechando a conexão com o banco de dados
mysqli_close($conn);
?>