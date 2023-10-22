<?php
// Configurações de conexão com o banco de dados
$host = 'localhost'; // Host do banco de dados
$username = 'root'; // Nome de usuário do banco de dados
$password = 'root'; // Senha do banco de dados
$database = 'relatorio'; // Nome do banco de dados

// Conexão com o banco de dados
$mysqli = new mysqli($host, $username, $password, $database);

// Verifica a conexão
if ($mysqli->connect_error) {
    echo('Erro na conexão com o banco de dados: ' . $mysqli->connect_error);
}
?>