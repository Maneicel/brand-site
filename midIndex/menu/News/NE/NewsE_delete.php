<?php
$num = $_REQUEST["num"];

require("..\..\..\db\dbConnect.php");
$db->exec("delete from news_event_board where num=$num");

header("Location:NewsE.php");
?>