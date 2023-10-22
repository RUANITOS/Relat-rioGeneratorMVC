<?php
require_once ('C:\xampp\htdocs\testerelatorio\config\config.php');
require_once('C:\xampp\htdocs\testerelatorio\models\RelatorioModel.php');


class RelatorioController {
    private $mysqli;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    public function gerarRelatorio() {
        $model = new RelatorioModel();
        $dadosRelatorio = $model->buscarDadosRelatorio($this->mysqli); // Passe a conexão como argumento

        $dadosParaView = [
            'ano' => $dadosRelatorio[0]['ano'],
            'titulo' => $dadosRelatorio[0]['titulo'],
            'conteudo' => $dadosRelatorio[0]['conteudo']
        ];

        if ($dadosRelatorio) {
            // Carrega a view para exibir o relatório e passa os dados
            include('C:\xampp\htdocs\testerelatorio\views\RelatorioView.php');
        } else {
            // Lidar com o caso em que não há dados
            //echo 'Nenhum dado encontrado.';
            echo 'ainda n funfou';
        }
    }
}