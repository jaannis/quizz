<?php

class questionsController
{
    public function questions($database)
    {
        return $database->selectQuestions($_SESSION['test'] . '_q', $_SESSION['number']);
    }

    public function options($database)
    {
        return $database->selectOptions($_SESSION['test'] . '_o', $_SESSION['number']);
    }

    public function countQuestions($database)
    {
        return $database->totalQuestions($_SESSION['test'] . '_q');

    }
}
