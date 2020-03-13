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

    public function conectaMongoDB()
    {
        $this->mongo = new MongoClient("mongodb://root:root@localhost:27017/?authSource=admin");
        $this->mongo = $this->mongo->test_db;
        //var_dump($this->mongo); die;
        return $this->mongo;
    }
}