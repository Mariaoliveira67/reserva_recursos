<?php
namespace App;
use PDO;
use PDOException;
class DataBase{
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DB = 'reserva';
    private $connection;
    private $table;

    private setConection()
    {
        try
        {
            $this->connection = new PDO('mysql:'.self::HOST.';dbname='.self::DB,self::USER,self::PASS);
            $this->connection->setAtribute (PDO::ATTR ERRMODE,PDO::ATTR ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            die('ERROR: '.$e->getMessage());
        }
    }

    public function insert($array)
    {

    }
    public function update($id,$array)
    {

    }
    public function delete($id)
    {

    }
    public function select()
    {

    }


}