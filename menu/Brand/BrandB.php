<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <title>BI</title>

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
        <span class="thi"><br>홈 > 브랜드 > BI</span>
    </div>

    <!--1-->
    <div id="sec01">
        <div style="float: left;">
            <img src="\midIndex\img\Icon\logo.png" width=30% >
        </div>
        <div style="float: left;">
            123
        </div>
    </div>
    <br>
    <!--2-->
    <div id="sec02">
        2번
    </div>
    <!--3-->
    <div id="sec03">
        3번
    </div>

    <!--하단 정보바---------------------------------------->
    <?php require_once("..\..\Footer.php"); ?>

</body>

</html>