<?php
require 'bootstrap.php';

//interacts with database what to do with files
class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectTest($table)
    {
        try {

            $statement = $this->pdo->prepare("select * from {$table}");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectQuestions($table, $number)
    {
        try {

            $statement = $this->pdo->prepare("select * from {$table} where id = $number");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function selectOptions($table, $number)
    {
        try {

            $statement = $this->pdo->prepare("select * from {$table} where question_id = $number");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function isCorrect($table, $number)
    {
        try {

            $statement = $this->pdo->prepare("select * from {$table} where question_id = $number AND correct = 1");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function totalQuestions($table)
    {
        try {
            $statement = $this->pdo->prepare("select * from {$table} ORDER BY id DESC LIMIT 1");

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function saveScore($table, $parameters)
    {
        try {
            $sql = "INSERT INTO $table (user, score, test) VALUES (:user, :score, :test)";

            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function scores()
    {
        try {
            $statement = $this->pdo->prepare("select * from results ORDER BY score DESC LIMIT 10");

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
