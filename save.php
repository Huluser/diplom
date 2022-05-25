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
		<li><a href="detalipostavki.php">Подробности поставки</a></li>
		
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
if (!empty($_REQUEST['name']) && !empty($_REQUEST['id'])  && !empty($_REQUEST['ad_p']) && !empty($_REQUEST['inn'])) 
{
$name = $_REQUEST['name'];
$id = $_REQUEST['id'];
$ad_p = $_REQUEST['ad_p'];
$inn = $_REQUEST['inn'];
savePost($db, $name, $id, $ad_p, $inn);
}
else{
echo "<h1>Ошибка сохранения данных</h1>";
}

?>