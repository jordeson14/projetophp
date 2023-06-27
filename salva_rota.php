<?php
include("conexao.php");
// Dados do cadastro a ser inserido na tabela rota
$id_Rota = $_POST['id_Rota'];
$Longitude = $_POST['Longitude'];
$Latitude = $_POST['Latitude'];
$horaS_Rota = $_POST['horaS_Rota'];
$horaC_Rota = $_POST['horaC_Rota'];
$id_Motorista = $_POST['id_Motorista'];

// Montando a query SQL para inserir o novo cadastro na tabela rota
$sql = "INSERT INTO rota (id_Rota, Longitude, Latitude, horaS_Rota, horaC_Rota, id_Motorista)
        VALUES ($id_Rota, '$Longitude', '$Latitude', '$horaS_Rota', '$horaC_Rota', $id_Motorista)";
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
