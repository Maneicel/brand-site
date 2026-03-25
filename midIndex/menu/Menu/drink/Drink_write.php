<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <link href="\midIndex\css\Table.css" rel="stylesheet">
    <link rel="stylesheet" href="\midIndex\css\boot\bootstrap.css">
    <title>음료 추가</title>

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
    <?php require_once("..\..\..\Header.php"); ?>

    <!--상단 배너---------------------------------------->
    <div class="TextBenner">
        <span class="fir">CAFE<br></span>
        <span class="sec">JEONG ONE<br></span>
        <span class="thi"><br>홈 > 소식 > Drink</span>
    </div>

    <!--작성 페이지-->
    <?php
    $semi_explan = "";
    $sub_explan = "";
    $name_en = "";
    $name_ko = "";

    $action = "Drink_insert.php";
    ?>


    <style>
        table {
            width: 680px;
            text-align: center;
        }

        th {
            width: 100px;
            background-color: cyan;
        }

        input[type=text],
        textarea {
            width: 100%;
        }
    </style>

    <body>
        <form action="<?= $action ?>" method="post">

            <table>
                <tr>
                    <th>음료 한글 이름</th>
                    <td>
                        <input type="text" name="name_ko" maxlength="80" value="<?= $name_ko ?>">
                    </td>
                </tr>
                <tr>
                    <th>음료 영어 이름</th>
                    <td>
                        <input type="text" name="name_en" maxlength="40" value="<?= $name_en ?>">
                    </td>
                </tr>
                <tr>
                    <th>설명</th>
                    <td>
                        <textarea name="semi_explan" rows="10"><?= $semi_explan ?></textarea>

                    </td>
                </tr>
                <tr>
                    <th>세부 설명</th>
                    <td>
                        <textarea name="sub_explan" rows="10"><?= $sub_explan ?></textarea>

                    </td>
                </tr>
            </table>

            <br>
            <input type="submit" value="저장" onclick="location.href='/midIndex/menu/Admin/AdminMain.php'">
            <input type="button" value="취소" onclick="history.back()">
        </form>


        <div class="search">
            <form method="post" action="tableSearch.php">
                <input type="text" name="id" placeholder=" id">
                <input type="submit" value="검색">
            </form>
        </div>

        <!--하단 정보바---------------------------------------->
        <?php require_once("..\..\..\Footer.php"); ?>

    </body>

</html>