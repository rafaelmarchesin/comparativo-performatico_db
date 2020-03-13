<?php

require_once __DIR__ . '/../view/Menu.php';
//require_once __DIR__ . '/../model/ConectaMongoDB.php';
require_once __DIR__ . '/../model/PopulaMySQL.php';
require_once __DIR__ . '/../model/LeMySQL.php';

class Condicional
{

    public function selectMenu($value)
    {
        $menu = new Menu;
        //$mongodb = new ConectaMongoDB;
        $mysql = new PopulaMySQL;
        $le_mysql = new LeMySQL;

        switch ($value){
            case 1:
                $mysql->executaQueryMySQL();
                break;
            case 2:
                //$mongodb->populaMongoDB();
                break;
            case 3:
                $le_mysql->pegaLinhaMySQL();
                break;
            case 4:
                break;
            case 5:
                break;
            case 6:
                return 'exit';
                break;
        }
    }
}