<div id="content">
<div class="container-fluid">
<?php include 'db.php';  ?>
<?php  include 'api.php';?>
<?php
$id = $_REQUEST['id'];
if($id) {
deletePostavjik($db, $id);
}
else
{
		echo "<h1>Error</h1>";
exit();
}
?>
</div>
</div>
