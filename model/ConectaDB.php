<?php

class ConectaDB
{
    private $mysql;
    private $mongo;

    public function conectaMySQL()
    {
        $this->mysql = new mysqli("localhost:9906.", "root", "root", "test_db");
        return $this->mysql;
    }

    //public function conectaMongoDB()
    //{
    //    $this->mongo = new MongoClient();
    //    $this->mongo->selectDB('rafael');
    //    return $this->mongo;
    //}
}