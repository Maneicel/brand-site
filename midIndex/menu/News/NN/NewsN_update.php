<?php
$title = $_REQUEST["title"];
$writer = $_REQUEST["writer"];
$content = $_REQUEST["content"];
$num = $_REQUEST["num"];

if ($title != "" && $writer != "" && $content != "") {
    $regtime = date("Y-m-d");

    require("..\..\..\db\dbConnect.php");
    $db->exec("update news_n_board set
                writer='$writer', title='$title', content='$content', regtime='$regtime'
                where num=$num");

    header("Location:NewsN_view.php?num=$num");
    exit;
}
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <script>
        alert('모든 항목이 빈칸 없이 입력되어야 합니다.');
        history.back();
    </script>
</body>

</html>