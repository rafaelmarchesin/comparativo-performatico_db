<?php

require __DIR__ . '/view/Menu.php';
require __DIR__ . '/model/condicional.php';

$exit = false;

$menu = new Menu;
$condicional = new Condicional;

$menu->printMenuPrincipal();

//A aplicação é executada dentro do laço de repetição
do
{
    $value = $menu->getTypedValue();
    $retorno = $condicional->selectMenu($value);
} while ( $retorno != 'exit' );

