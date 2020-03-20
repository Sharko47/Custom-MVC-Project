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

    public function insert($table, $parameters)
    {
       $sql_query = sprintf(
        'insert into %s (%s) values (%s)',
        $table,
        implode(', ',array_keys($parameters)),
        ':'.implode(', :',array_keys($parameters))
       );
      
       try {
           $statement = $this->pdo->prepare($sql_query);
           
           $statement->execute($parameters);
       } catch (Exception $th) {
           echo 'Something went wrong, Please try again...';
           
       }
    }
}
