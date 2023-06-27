<?php
include("conexao.php");
// Dados do cadastro a ser inserido na tabela rota
$id_Funcionario = $_POST['id_Funcionario'];
$nome_Funcionario = $_POST['nome_Funcionario'];
$cpf_Funcionario = $_POST['cpf_Funcionario'];
$endereco_Funcionario = $_POST['endereco_Funcionario'];
$telefone_Funcionario = $_POST['telefone_Funcionario'];
$dateAD_Funcionario = $_POST['dateAD_Funcionario'];



// Montando a query SQL para inserir o novo cadastro na tabela rota
$sql = "INSERT INTO funcionario (id_Funcionario, nome_Funcionario, cpf_Funcionario, endereco_Funcionario, telefone_Funcionario, dateAD_Funcionario)
        VALUES ($id_Funcionario, '$nome_Funcionario', '$cpf_Funcionario', '$endereco_Funcionario', '$telefone_Funcionario', '$dateAD_Funcionario')";
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