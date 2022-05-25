<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Приложение</title>

<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<style type="text/css">
	.table-pg{width:auto}
	</style>
	
</head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">ТСЖ "Полет"</a>
</div>


<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="active"><a href="/">Главная</span></a></li>
<li><a href="pokazaniaw.php">Показания воды</a></li>
		<li><a href="pokazanial.php">Показания света</a></li>
		<li><a href="debts.php">Долги</a></li>
		<li><a href="connection.php">Обратная связь</a></li>
		<li><a href="login.php">Авторизация</a></li>
		
		
		
</ul>
</div>
</div>
</nav>
</header>

<div id="content">
<div class="container-fluid">

<?php include 'db.php';  ?>

<?php  include 'api.php'; ?>

<?php
$residents=  getAllResidents($db); 
?>

<table class="table table-bordered">
<tr>
<th>Показания света</th>
</tr>

<?php foreach ($residents as $post){?>	
<tr>
<td><a href ="edit.php?id=<?php echo $post['residents_id'];?>">
<?php echo $post['apartment_number']; ?></td>	
<td><?php echo $post['pokazanilight']; ?></td>	
<td><a class="btn btn-danger" href ="delete.php?id=<?php echo $post['residents_id'];?>">Удалить</a></td>
</tr>
<?php } 
?>
</table>

<button id="addButton" class="btn btn-primary" > Добавить показание</button>

<form action="" method="POST" role="form" style="display:none; margin-top:20px"><!--формадлядобавленияпоставщикаизначальноскрытая-->
<div class="form-group">
<label for="">Введите номер квартиры</label>
<input type="text" class="form-control" id="apartment_number" name="apartment_number" placeholder="Номер квартиры">
<label for=""> Введите показание </label>
<input type="text" class="form-control" id="pokazanilight" name="pokazanilight" placeholder="Показание света">
</div>
<input type="submit" class="btn-primary" value="Добавить">
</form>

</div>

<?php
if(isset($_POST['apartment_number'])&& $_POST['apartment_number'] != '')
{
$apartment_number=$_POST['apartment_number'];
$pokazanilight=$_POST['pokazanilight'];
addPostavjiki($db, $apartment_number, $pokazanilight);
}
?>

<footer>
	<script>
$("#addButton").click(function(){
	$("form").slideDown();
}
</script>

</footer>
</body>
</html>
