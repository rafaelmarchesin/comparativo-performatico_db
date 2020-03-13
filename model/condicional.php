<?php

require_once __DIR__ . '/../view/Menu.php';
require_once __DIR__ . '/../model/PopulaMongoDB.php';
require_once __DIR__ . '/../model/PopulaMySQL.php';
require_once __DIR__ . '/../model/LeMySQL.php';
require_once __DIR__ . '/../model/LeMongoDB.php';
require_once __DIR__ . '/../model/ComparativoPerformatico.php';

class Condicional
{

    public function selectMenu($value)
    {
        $menu = new Menu;
        $mysql = new PopulaMySQL;
        $mongodb = new PopulaMongoDB;
        $le_mysql = new LeMySQL;
        $le_mongodb = new LeMongoDB;
        $performatico = new ComparativoPerformatico;

        switch ($value){
            case 1:
                $mysql->executaQueryMySQL();
                break;
            case 2:
                $mongodb->executaQueryMongoDB();
                break;
            case 3:
                $le_mysql->pegaLinhaMySQL();
                break;
            case 4:
                $le_mongodb->pegaLinhaMongoDB();
                break;
            case 5:
                $performatico->leTempo();
                break;
            case 6:
                $menu->printMenuPrincipal();
                break;
            case 7:
                return 'exit';
                break;
        }
    }
}