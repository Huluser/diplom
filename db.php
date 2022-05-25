<?php
try {
    $host = 'localhost';
    $port = 5442;
    $dbname = 'postavki';
    $dsn = "pgsql:host=$host; port=$port; dbname=$dbname";
    $username = 'postgres';
    $passwd = 'postgres';
    $db = new PDO($dsn, $username, $passwd);
} 
catch (PDOException $e)
 {
    //print "Error!: " . $e->getMessage() . "<br />";
	echo $e->getMessage();
}

?>
