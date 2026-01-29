<?php
$type = "MD";
$img = "/midIndex/img/DB/md1.jpg";
$semi_explan = $_REQUEST["semi_explan"];
$sub_explan = $_REQUEST["sub_explan"];
$name_en = $_REQUEST["name_en"];
$name_ko = $_REQUEST["name_ko"];
$num = $_REQUEST["num"];

if ($semi_explan != "" && $sub_explan != "" && $name_en != "" && $name_ko != "") {
    require("..\..\..\db\dbConnect.php");

    $db->exec("update menu set
                img='$img', semi_explan='$semi_explan', sub_explan='$sub_explan', 
                name_en='$name_en', name_ko='$name_ko', type='$type'
                where num=$num");

    header("Location:AdminMain.php");
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