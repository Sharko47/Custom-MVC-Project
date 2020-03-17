<?php
//New Class Created QueryBuilder
class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {
        $query = $this->pdo->prepare("Select * from {$table}");

        $query->execute();
        
        return $query->fetchAll(PDO::FETCH_CLASS);
    }
}
