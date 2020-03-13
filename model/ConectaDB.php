<?php

class ConectaDB
{
    private $mysql;
    private $mongo;

    public function conectaMySQL()
    {
        $this->mysql = new mysqli("localhost", "root", "root", "test_db", "9906");
        return $this->mysql;
    }

    //public function conectaMongoDB()
    //{
    //    $this->mongo = new MongoClient();
    //    $this->mongo->selectDB('rafael');
    //    return $this->mongo;
    //}
}