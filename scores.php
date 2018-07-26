<?php session_start();
require 'Database/QueryBuilder.php';

$database = new QueryBuilder($pdo);
$scores   = $database->scores();

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
	<h2 class="title">Rezultāti</h2>
</div>

<div class="container">
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>Name</th>
			<th>Score</th>
			<th>Test</th>
		</tr>
		</thead>

        <?php foreach ($scores as $score): ?>
			<tbody>
			<tr>
				<td><?= $score->user ?> </td>
				<td><?= $score->score ?></td>
				<td><?= $score->test ?></td>
			</tr>

			</tbody>
        <?php endforeach; ?>

	</table>

	<div class="center">
		<a href="/index.php" class="btn btn-primary">Atpakaļ uz pirmo lapu</a>
	</div>
</div>

</body>
</html>