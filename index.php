<?php session_start();
require 'Database/QueryBuilder.php';
require 'Controllers/processController.php';

$database = new QueryBuilder($pdo);
$test     = new processController();
$options  = $test->testSelect($database);

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
	<h2 class="title">Testa uzdevums</h2>
</div>

<div class="container">
	<form action="/questions.php?n=1" method="POST">
		<input class="form-control" id="name" type="text" name="name" placeholder="Ievadi savu vārdu" required>
		<select class="form-control" name="options" required>
			<option disabled selected value> -- Izvēlies testu --</option>
            <?php foreach ($options as $option) : ?>
				<option value="<?= $option->name; ?>">
                    <?= $option->name; ?>
				</option>
            <?php endforeach; ?>;
		</select>
		<div class="center">
			<button class="btn btn-primary" role="button" type="submit" name="save"> Sākt</button>
		</div>
	</form>
</div>

</body>
</html>