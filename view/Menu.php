<?php

class Menu
{
    public function printMenuPrincipal()
    {
        echo "\n============== MENU ==============\n";
        echo "1 - Popular Banco de Dados MySQL\n";
        echo "2 - Popular Banco de Dados MongoDB\n";
        echo "3 - Ler dados do BD MySQl\n";
        echo "4 - Ler dados do BD MongoDB\n";
        echo "5 - Comparativo performático\n";
        echo "6 - Menu\n";
        echo "7 - Sair\n";
        echo "============== MENU ==============\n";
        echo "\n";
    }

    public function getTypedValue()
    {
        echo 'Digite: ';
        $stdin = fopen("php://stdin","r");
        $input = fgets($stdin);
        
        return $input;
    }
}