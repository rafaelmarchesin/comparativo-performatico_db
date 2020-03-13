<?php

class TempoInstante
{
    private $micro_sec;
    private $sec;

    public function pegaTempoAgora()
    {
        list($this->micro_sec, $this->sec) = explode(" ", microtime());
        return ((float)$this->micro_sec + (float)$this->sec);
    }

    public function tempoResultante($tempo_inicial, $tempo_final)
    {
        $result = $tempo_final - $tempo_inicial;
        echo "\nTempo de processamento:\n";
        echo number_format($result, 3);
        echo " sec\n\n";
        return $result;
    }
}