<?php
class RelatorioModel
{
    public function buscarDadosRelatorio($mysqli)
    { // Receba a conexão como argumento

        // Consulta SQL para buscar dados do banco      
        $sql = 'SELECT ano, titulo, conteudo FROM Dados';
        // Executa a consulta usando a conexão $mysqli
        $result = $mysqli->query($sql);

        if ($result) {
            $dados = array();

            while ($row = $result->fetch_assoc()) {
                $dados[0] = $row;
            }
            
            $result->free();
            return $dados;
        } else {
            die('Erro na consulta: ' . $mysqli->error);
        }
    }
}
?>