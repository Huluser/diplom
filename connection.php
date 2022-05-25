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
</div>
<body>


<form action="send.php" method>

	<input type="email" name="email" placeholder="Введите email" required >
	<input type="tel" name="tel" placeholder="Введите телефон" >
	<input type="mess" name="mess" placeholder="Введите ваше сообщение" >
	<input type="submit" value="Отправить данные" />



</form>

<img src="3.jpg" alt="Фотография 1" width="720" height="540">

<footer>
</footer>
</body>
</html>



