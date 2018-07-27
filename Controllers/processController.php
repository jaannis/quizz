<?php

require 'saveController.php';

class processController
{

    public function process($database)
    {
        $total = $database->totalQuestions($_SESSION['test'] . '_q');
        $next  = $_SESSION['number'] + 1;
        if ($_SESSION['number'] == $total[0]->Id) {

            $save = new saveController();
            $save->save($database);

            header("Location: /results.php");
            exit();
        }
        else {
            header("Location: /questions.php?n=" . $next);
        }
    }

    public function countScore($database)
    {
        if (!isset($_SESSION['score'])) {
            $_SESSION['score'] = 0;
        };

        $isCorrect = $database->isCorrect($_SESSION['test'] . '_o', $_SESSION['number']);
        if ($isCorrect[0]->Id === $_SESSION['choice']) {
            $_SESSION['score'] = $_SESSION['score'] + 1;
        }
    }

    public function testSelect($database)
    {
        return $database->selectTest('test');
    }

    public function resetScore()
    {
        if ($_SESSION['number'] == 1) {
            $_SESSION['score'] = 0;
        };
    }
}