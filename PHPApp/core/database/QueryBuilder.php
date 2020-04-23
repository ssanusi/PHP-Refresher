<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class QueryBuilder
{
  protected PDO $pdo;

    /**
     * QueryBuilder constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table, $parameters)
    {


        try {
            $sql = sprintf(
                'insert into %s (%s) value (%s)',
                $table, implode(', ', array_keys($parameters)),
                ':' . implode(', :', array_keys($parameters))
            );

            var_dump($sql);
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }


}