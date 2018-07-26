<?php

class saveController
{
    public function save($database)
    {
        $database->saveScore('results', [
                'user'  => $_SESSION['name'],
                'score' => $_SESSION['score'],
                'test'  => $_SESSION['test']
            ]
        );
    }
}