<?php

require_once __DIR__ . '/../view/Menu.php';
require_once __DIR__ . '/../model/PopulaMongoDB.php';
require_once __DIR__ . '/../model/PopulaMySQL.php';
require_once __DIR__ . '/../model/LeMySQL.php';
require_once __DIR__ . '/../model/LeMongoDB.php';

class Condicional
{

    public function selectMenu($value)
    {
        $menu = new Menu;
        //$mongodb = new ConectaMongoDB;
        $mysql = new PopulaMySQL;
        $mongodb = new PopulaMongoDB;
        $le_mysql = new LeMySQL;
        $le_mongodb = new LeMongoDB;

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
                break;
            case 6:
                return 'exit';
                break;
        }
    }
}