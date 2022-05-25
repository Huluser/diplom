<?php

function getAllDetali($db)
{
$sql="select * from detali";
$result=array();
$stmpt=$db->prepare($sql);
$stmpt->execute();
while($row = $stmpt->fetch(PDO::FETCH_ASSOC))
{
	$result[$row['koddetali']] = $row;
}
return $result;
}

function getAllPostavjiki($db)
{
$sql="select * from postavjiki";
$result=array();
$stmpt=$db->prepare($sql);
$stmpt->execute();
while($row = $stmpt->fetch(PDO::FETCH_ASSOC))
{
	$result[$row['kodpostavjika']] = $row;
}
return $result;
		
}

function getAllPostavki($db)
{
$sql="select * from postavki INNER JOIN postavjiki ON postavjiki.kodpostavjika = postavki.kodpostavjika";
$result=array();
$stmpt=$db->prepare($sql);
$stmpt->execute();
while($row = $stmpt->fetch(PDO::FETCH_ASSOC))
{
	$result[$row['kodpostavki']] = $row;
}
return $result;
		
}


function getAllPodrobnosti($db)
{
$sql="select * from detali_postavki
INNER JOIN postavki ON detali_postavki.kodpostavki = postavki.kodpostavki
INNER JOIN detali ON detali_postavki.koddetali = detali.koddetali";
$result=array();
$stmpt=$db->prepare($sql);
$stmpt->execute();
while($row = $stmpt->fetch(PDO::FETCH_ASSOC))
{
	$result[$row['kod']] = $row;
	
}

return $result;
	
}

function getPostById($db, $id)
{
$sql = "select * from postavjiki where kodpostavjika= :id";	
	$stmt=$db->prepare($sql);
	$stmt->bindValue('id', $id, PDO::PARAM_INT);
	$stmt->execute();	
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	return $row;
}
function savePost($db, $name, $id, $ad_p, $inn)
{
	
$sql = "update  postavjiki set  nazvanie = '$name', adres = '$ad_p', inn = '$inn'  where kodpostavjika = $id";	
	$stmt=$db->prepare($sql);
	$stmt->execute();	
	}

function addPostavjiki($db, $nazvanie, $adres, $inn)
{
$sql="INSERT INTO postavjiki(nazvanie, adres, inn) VALUES (:nazvanie, :adres, :inn)";
$stmt=$db->prepare($sql);
$stmt->bindValue('nazvanie', $nazvanie, PDO::PARAM_STR);
$stmt->bindValue('adres', $adres, PDO::PARAM_STR);
$stmt->bindValue('inn', $inn, PDO::PARAM_INT);
$stmt->execute();
}

function getAllPostavjik($db)
{
$sql="select * from  postavjiki";
$res=array();

$stmt=$db->prepare($sql);
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	$res[$row['kodpostavjika']] = $row;
}
return $res;
		
}

function addPostavki($db, $kodp, $data)
{
	$sql="INSERT INTO postavki(kodpostavjika, data) VALUES (:kodpostavjika,:data)";
	$stmt=$db->prepare($sql);
	$stmt->bindValue('kodpostavjika', $kodp, PDO::PARAM_INT);
	$stmt->bindParam ('data', $data, strtotime (date ("Y-m-d H:i:s")), PDO::PARAM_STR);
	$stmt->execute();
}

function deletePostavjik($db, $id)
{
	$sql="DELETE FROM postavjiki WHERE kodpostavjika=:id";
	$stmt=$db->prepare($sql);
	$stmt->bindValue('id', $id, PDO::PARAM_INT);
	
	$stmt->execute();
}
