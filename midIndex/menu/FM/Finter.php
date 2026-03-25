<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <link href="\midIndex\css\Fin.css" rel="stylesheet">
    <title>인테리어</title>
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
        <span class="thi"><br>홈 > 창업 > 인테리어</span>
    </div>

    <!----------------------------------------------------------------------------------------------->
    <div class="FiBlock">
        <span id="fir">STORE INTERIOR</span>
        <span id="sec">정원 내부 인테리어</span>
        <span id="thi">정원은 고급스럽고 차분한 나무소재 가구와
            은은한 조명으로 고객분들이 편안하고 안락 하게
            쉬어갈 수 있는 공간으로 설계 되었습니다. </span><br><br>
        <img style="width: 100%;" src="..\..\img\Bener\inter1.jpg">
    </div>

    <div class="FiBlock2">

        <div id="left">
            <img id ="btIMG" src="..\..\img\Bener\inter2.jpg">
        </div>

        <div id="right">
            <span id="btFIR">언제나 편안하게</span>
            <span id="btSEC">더 많은 사람들이 편안함을 느낄 수 있도록.</span>
            <img  style="height: 100%; " src="..\..\img\Bener\main1.jpg">
        </div>

    </div>


    <!--하단 정보바---------------------------------------->
    <?php require_once("..\..\Footer.php"); ?>

</body>

</html>