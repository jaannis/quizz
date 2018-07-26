<?php session_start();

require 'Database/QueryBuilder.php';
require 'Controllers/questionsController.php';
require 'Controllers/processController.php';

$database  = new QueryBuilder($pdo);
$variables = new questionsController();
$process   = new processController();

$_SESSION['number'] = (int)$_GET['n'];

$process->resetScore();
if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}

if (isset($_POST['options'])) {
    $_SESSION['test'] = strtolower($_POST['options']);
}

$total    = $variables->countQuestions($database);
$answers  = $variables->options($database);
$question = $variables->questions($database);

?>
<!Doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
	      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	      crossorigin="anonymous">
	<link href="/style/main.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="container">
	<h2 class="title">
        <?= $question[0]->question; ?>
	</h2>
</div>
<div class="container switch-field">
	<form action="/process.php" method="POST">
        <?php foreach ($answers as $answer) : ?>
			<input type="radio" id="<?= $answer->Id ?>" name="choice" value="<?= $answer->Id ?>" required>
			<label for="<?= $answer->Id ?>"><?= $answer->answer; ?></label>
        <?php endforeach; ?>

		<div class="center">
			<p class="current">Question <?= $_SESSION['number'] ?> of <?= $total[0]->Id ?></p>
			<button type="submit">Nākamais</button>
			<input type="hidden" name="number" value="<?= $_SESSION['number'] ?>">
		</div>
	</form>
</div>

</body>

</html>






