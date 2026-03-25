<?php
$num = $_REQUEST["num"];

require("..\..\..\db\dbConnect.php");
$db->exec("delete from menu where num=$num");

header("Location:AdminMain.php");
?>