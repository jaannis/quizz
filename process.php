<?php session_start();

require 'Controllers/processController.php';
require 'Database/QueryBuilder.php';

$database = new QueryBuilder($pdo);

if (isset($_POST)) {
    $_SESSION['number'] = $_POST['number'];
    $_SESSION['choice'] = $_POST['choice'];

    $process = new processController();
    $process->countScore($database);
    $process->process($database);
};
