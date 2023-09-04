<?php
namespace Core;
class   Database
{

    public $connection;
    public  $statement;
    public function __construct($config)
    {

        $dsn = "mysql:".http_build_query($config,'',';');
        $this->connection = new \PDO($dsn, 'root','',[
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ]);
    }
    public function query($query,$params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }


    public function find()
    {
        return $this->statement->fetch();
    }

    public function FindOrFail()
    {
        $result = $this->find();
        if(! $result)
        {
            abort('404');
        }
        return $result;
    }

    public function getAll()
    {
        return $this->statement->fetchAll();

    }
}