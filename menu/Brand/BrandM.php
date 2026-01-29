<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <link href="\midIndex\css\BrandMainCss.css" rel="stylesheet">
    <title>브랜드 메인</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            border: none;
        }

        .blockContainer {
            margin-left: 10%;
        }

        .block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid #3a2b23;
            border-radius: 8px;

            width: 230px;
            float: left;
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
        <span class="thi"><br>홈 > 브랜드</span>
    </div>

    <!-- 내부 -->
    <div id="title">
        <span id="txt_1">모두의 쉼터가 될 수 있게</span>
        <span id="txt_2">정원</span>
        <span id="txt_3">언제나 모두가 더욱 행복한 하루를 보낼 수 있도록</span>
        <span id="txt_4">노력하는 정원입니다.</span>
    </div>

    <ul class="brandUl">
        <li>
            <div>Comfort</div>
            <div>편안함</div>
            <div>최고의 서비스를 제공하여<br>모두가 편안하게</div>
        </li>
        <li><div>Comfort</div>
            <div>편안함</div>
            <div>최고의 서비스를 제공하여<br>모두가 편안하게</div>
        </li>
        <li><div>Comfort</div>
            <div>편안함</div>
            <div>최고의 서비스를 제공하여<br>모두가 편안하게</div>
        </li>
    </ul>


    <!--하단 정보바---------------------------------------->
    <?php require_once("..\..\Footer.php"); ?>

</body>

</html>