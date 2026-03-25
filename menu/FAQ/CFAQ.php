<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <link href="\midIndex\css\CFAQcss.css" rel="stylesheet">
    <title>자주 묻는 질문</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            border: none;
        }
    </style>
</head>

<body>
    <!--상단 메뉴바---------------------------------------->
    <?php require_once("..\..\Header.php"); ?>

    <!--상단 배너---------------------------------------->
    <div class="TextBenner">
        <span class="fir">CAFE<br></span>
        <span class="sec">JEONG ONE<br></span>
        <span class="thi"><br>홈 > 고객지원 > FAQ</span>
    </div>

    <!--내용-->
    <div id="FAQ_container">
        <span class="FAQ">자주 묻는 질문</span>

        <?php
        require("..\..\db\dbConnect.php");
        $result = $db->query("select * from faq order by num desc");
        while ($row = $result->fetch()) {
            ?>

            <details>
                <summary onclick="$db->exec('update faq set hits=hits+1');"><?= $row["Q"] ?></summary>
                <?= $row["A"] ?>
            </details>
            <?php
        }
        ?>
    </div>

    <!--하단 정보바---------------------------------------->
    <?php require_once("..\..\Footer.php"); ?>

</body>

</html>