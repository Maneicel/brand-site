<?php
    if ($_FILES["upload"]["error"] == UPLOAD_ERR_OK) {
        $temp_name = $_FILES["upload"]["tmp_name"];
        $file_name = $_FILES["upload"]["name"];

        // 파일명 인코딩 변환
        $save_name = iconv("utf-8", "cp949", $file_name);

        // 같은 이름을 가진 파일이 있으면 파일명에 "(숫자)"를 붙임
        $part = pathinfo($save_name);
        $ext = isset($part["extension"]) ? ".$part[extension]" : "";
        for ($i = 1; file_exists("../../files/$save_name"); $i++) {
            $save_name = "$part[filename] ($i)$ext";
        }

        // 임시파일을 원하는 폴더에 원하는 이름으로 이동
        if (move_uploaded_file($temp_name, "../../files/$save_name")) {
            $save_name_utf8 = iconv("cp949", "utf-8", $save_name);
            header("Location:EmployM.php");
        exit;
        } 
    }
    ?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
   
</body>

</html>