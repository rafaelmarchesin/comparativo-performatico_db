<?php

/* TELA NÚMERO 3 */

require_once __DIR__ . '/ConectaDB.php';
require_once __DIR__ . '/TempoInstante.php';
require_once __DIR__ . '/ComparativoPerformatico.php';

class LeMySQL
{
    private $mysql;
    private $conn;
    private $resultado;
    private $linha;
    private $pega_tempo;
    private $performance;

    /* Método responsável por instanciar a conexão com o Banco de Dados */
    public function conecta()
    {
        $this->mysql = new ConectaDB;
        $this->conn = $this->mysql->conectaMySQL();
    }

    /* Método responsável por rodar a query de leitura de dados */
    public function pegaLinhaMySQL()
    {
        $this->conecta();
        $this->pega_tempo = new TempoInstante;
        $this->performance = new ComparativoPerformatico;

            $tempo_inicial = $this->pega_tempo->pegaTempoAgora();
            for ( $i = 1; $i <= 1000; $i++ )
            {
                //$soma = $i + 5438;
                $this->resultado = $this->conn->query("SELECT * FROM tabela_teste WHERE id={$i};");
                $this->linha = mysqli_fetch_assoc($this->resultado);

                if ($this->linha['nome'] != null)
                {
                    echo "{$this->linha['nome']}\n";
                } else
                {
                    continue;
                }

            }
            $tempo_final = $this->pega_tempo->pegaTempoAgora();

        //exibe o tempo total do processo
        $result = $this->pega_tempo->tempoResultante($tempo_inicial, $tempo_final);

        //guarda o tempo no banco de dados
        $this->performance->guardaTempo('Leitura MySQL', $result);
    }
}