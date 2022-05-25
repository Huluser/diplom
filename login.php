<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

.container {
    padding: 16px;
    background-color: white;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

.signin {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
	text-align: left;
}

.signin:hover {
    opacity: 1;
}

a {
    color: dodgerblue;
}

.registerbtn  {
    background-color: #f1f1f1;
    text-align: left;
}
</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Вход</h1>
    <hr>

    <label for="имя"><b>Имя</b></label>
    <input type="text" placeholder="Введите имя" name="имя" required>

    <label for="psw"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="пароль" required>


    <hr>

    <button type="submit" class="signin ">Войти</button>
  </div>
  
  <div class="container registerbtn ">
    <p>Нет аккаунта? <a href="#">Зарегестрироваться</a>.</p>
  </div>
</form>

</body>
</html>
