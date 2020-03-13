<?php

require_once __DIR__ . '/ConectaDB.php';

class ComparativoPerformatico
{
    private $mysql;
    private $conn;
    private $resultado;
    private $linha;
    private $linha_db;
    private $linha_tempo;

    public function conecta()
    {
        $this->mysql = new ConectaDB;
        $this->conn = $this->mysql->conectaMySQL();
    }

    public function guardaTempo($db, $tempo)
    {
        $this->conecta();
        //$tempo = strval($tempo);
        $this->conn->query("INSERT INTO quarda_tempo (banco_dados, tempo) VALUES ('{$db}', {$tempo});");
    }

    public function leTempo()
    {
        $this->conecta();

        for ($i = 1; $i <= 4; $i++) 
        {
            $this->resultado = $this->conn->query("SELECT * FROM quarda_tempo WHERE id={$i};");
            $this->linha = mysqli_fetch_assoc($this->resultado);

            $this->linha_db = $this->linha['banco_dados'];
            $this->linha_tempo = $this->linha['tempo'];
            echo "\n--------------------\n";
            echo "$this->linha_db\n";
            echo "{$this->linha_tempo} sec";
        }

        echo "\n--------------------\n\n";
    }
}