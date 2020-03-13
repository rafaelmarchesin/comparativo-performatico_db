<?php

/* TELA NÚMERO 2 */

require __DIR__ . '/ConectaDB.php';
require_once __DIR__ . '/TempoInstante.php';

class PopulaMongoDB
{
    private $mongo;
    private $conn;
    private $pega_tempo;
    
    public function populaMongoDB() //'rafael', 'colecao_teste_rafael', '10000'
    {
        $this->mongo = new ConectaDB;
        $this->conn = $this->mongo->conectaMongoDB();
        $this->pega_tempo = new TempoInstante;

            //Grava os dados no Banco de Dados MongoDB
            $tempo_inicial = $this->pega_tempo->tempoResultante();
            for ( $i = 1; $i <= 1000; $i++ )
            {
                $this->conn->selectDB( 'rafael' )->selectCollection( 'colecao_teste_rafael' )->insert( array( 'nome' => utf8_decode("nome{$i}") ) );
                echo "nome{$i}\n";
            }
            $tempo_final = $this->pega_tempo->tempoResultante();

        //exibe o tempo total do processo
        $this->pega_tempo->tempoResultante($tempo_inicial, $tempo_final);
    }
}

//$teste = new PopulaMongoDB;
//$teste->populaMongoDB();