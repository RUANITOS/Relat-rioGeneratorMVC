<?php

require('C:\xampp\htdocs\testerelatorio\config\config.php');
require 'C:\xampp\htdocs\testerelatorio\controllers\RelatorioController.php';

// Verifique a ação da URL
if (isset($_GET['action']) && $_GET['action'] == 'gerarRelatorio') {
    $mysqli = new mysqli($host, $username, $password, $database);
    if ($mysqli->connect_error) {
        die('Erro na conexão com o banco de dados: ' . $mysqli->connect_error);
    }

    $controller = new RelatorioController($mysqli); // Passe a conexão como argumento
    $controller->gerarRelatorio();
} else {
    // Página inicial ou outras ações
    // Adicione aqui a lógica para outras ações
    ?>
    <html>
    <h1>
        <a href="index.php?action=gerarRelatorio">Gerar Relatório</a>
    </h1>

    </html>
    <?php
}
?>