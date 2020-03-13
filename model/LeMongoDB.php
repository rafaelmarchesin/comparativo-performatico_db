<?php

/* TELA NÚMERO 4 */

require_once __DIR__ . '/ConectaDB.php';
require_once __DIR__ . '/TempoInstante.php';

class LeMongoDB
{
    private $mongodb;
    private $conn;
    private $pega_tempo;

    public function conecta()
    {
        $this->mongodb = new ConectaDB;
        $this->conn = $this->mongodb->conectaMongoDB();
    }

    public function pegaLinhaMongoDB()
    {
        $this->conecta();
        $this->pega_tempo = new TempoInstante;

            $tempo_inicial = $this->pega_tempo->pegaTempoAgora();
            for ( $i = 1; $i <= 1000; $i++ )
                {
                    $result = $this->conn->selectCollection( 'colecao_teste' )->findOne([ 'nome' => "nome{$i}"]);
                    $result = $result['nome'];
                    echo "{$result}\n";
                }
            $tempo_final = $this->pega_tempo->pegaTempoAgora();

        //exibe o tempo total do processo
        $this->pega_tempo->tempoResultante($tempo_inicial, $tempo_final);
    }
}