<?php

/* TELA NÚMERO 1 */

require_once __DIR__ . '/ConectaDB.php';
require_once __DIR__ . '/TempoInstante.php';

class PopulaMySQL
{

    private $mysql;
    private $conn;
    private $pega_tempo;

    /* Método responsável por instanciar a conexão com o Banco de Dados */
    public function conecta()
    {
        $this->mysql = new ConectaDB;
        $this->conn = $this->mysql->conectaMySQL();
    }

    /* Método responsável por rodar a query de inserção de dados */
    public function executaQueryMySQL()
    {
        $this->conecta(); //Conecta Banco de Dados
        $this->pega_tempo = new TempoInstante;

            $tempo_inicial = $this->pega_tempo->pegaTempoAgora();
            for ( $i = 1; $i <= 1000; $i++ )
            {
                $this->conn->query("INSERT INTO tabela_teste (nome) VALUES ('nome{$i}');");
                echo "nome{$i}\n";
            }
            $tempo_final = $this->pega_tempo->pegaTempoAgora();

        //exibe o tempo total do processo
        $this->pega_tempo->tempoResultante($tempo_inicial, $tempo_final);
        
    }
}