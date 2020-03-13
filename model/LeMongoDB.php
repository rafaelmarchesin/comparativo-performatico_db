<?php

/* TELA NÚMERO 4 */

require_once __DIR__ . '/TempoInstante.php';

class LeMongoDB
{
    private $pega_tempo;

    public function pegaLinhaMongoDB()
    {
        $this->pega_tempo = new TempoInstante;

        $tempo_inicial = $this->pega_tempo->tempoResultante();
        /////////////////////
        //INSERIR LOOP AQUI//
        /////////////////////
        $tempo_final = $this->pega_tempo->tempoResultante();

        //exibe o tempo total do processo
        $this->pega_tempo->tempoResultante($tempo_inicial, $tempo_final);
    }
}