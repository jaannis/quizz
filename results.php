<?php session_start();

require 'Database/QueryBuilder.php';
require 'Controllers/questionsController.php';

$database = new QueryBuilder($pdo);
$process  = new questionsController();
$total    = $process->countQuestions($database);

?>
<!DOCTYPE html>

<html>

<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
	      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	      crossorigin="anonymous">
	<link href="/style/main.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<div class="container">
	<h2 class="title">Paldies, <?= $_SESSION['name']; ?>!</h2>
</div>

<div class="center">
	<p>Tu atbildēji pareizi uz <?= $_SESSION['score']; ?> no <?= $total[0]->Id; ?> jautājumiem.</p>
	<br>
	<a href="/index.php" class="btn btn-primary">Pildīt vēlreiz</a>
</div>
<div class="center">
	<a href="/scores.php" class="btn btn-primary">Rezultāti</a>
</div>
</body>

</html>
