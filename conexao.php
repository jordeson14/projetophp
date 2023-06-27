<?php
// Conectando ao banco de dados
$servername = 'Localhost';
$username = 'root';
$password ='';
$dbname = 'sigabemcaminhoneiro';
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificando a conexão
if (!$conn) {
  die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
