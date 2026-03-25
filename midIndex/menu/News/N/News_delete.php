<?php
$num = $_REQUEST["num"];

require("..\..\..\db\dbConnect.php");
$db->exec("delete from News_board where num=$num");

header("Location:News.php");
?>