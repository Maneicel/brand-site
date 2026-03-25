<?php
$type = "food";
$img = "/midIndex/img/DB/food1.jpg";
$semi_explan = $_REQUEST["semi_explan"];
$sub_explan = $_REQUEST["sub_explan"];
$name_en = $_REQUEST["name_en"];
$name_ko = $_REQUEST["name_ko"];

if ($semi_explan != "" && $sub_explan != "" && $name_en != "" && $name_ko != "") {
    require("..\..\..\db\dbConnect.php");

    $db->exec("insert into menu (img, semi_explan, sub_explan, name_en, name_ko, type)
                values ('$img', '$semi_explan', '$sub_explan', '$name_en', '$name_ko', '$type' )");

    header("Location:/midIndex/menu/Admin/AdminMain.php");
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