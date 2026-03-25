<?php
$num = $_REQUEST["num"];

require("..\..\..\db\dbConnect.php");
$db->exec("delete from news_n_board where num=$num");

header("Location:NewsN.php");
?>