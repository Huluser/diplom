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
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">ООО "Трейд""</a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="active"><a href="/">Главная</span></a></li>
<li><a href="postavjiki.php">Поставщики</a></li>
		<li><a href="detali.php">Детали</a></li>
		<li><a href="postavki.php">Поставки</a></li>
		<li><a href="detalipostavki.php">Подробностипоставки</a></li>
		
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
$id = $_REQUEST['id'];
if($id) {
$post =  getPostById($db, $id);
}
else
{
		echo "<h1>Error</h1>";
exit();
}

?>


<form action="save.php" metod="post">
<input type="hidden" name ="id" value = "<?php
echo $post['kodpostavjika']; ?>">
<div class="form-group">
<label for="name">Поставщик</label>
<input type="text" class="form-control" id="name" name="name" value="<?php
echo $post['nazvanie']; ?>">

<div class="form-group">
<label for="ad_p">Адрес</label>
<input type="text" class="form-control" id="ad_p" name="ad_p" value="<?php
echo $post['adres']; ?>">

<div class="form-group">
<label for="inn">ИНН</label>
<input type="text" class="form-control" id="inn" name="inn" value="<?php
echo $post['inn']; ?>">

</div>
<input type = "submit" class="btnbtn-default" value="Сохранить">
</form>

</div>

<footer>
</footer>
</body>
</html>
