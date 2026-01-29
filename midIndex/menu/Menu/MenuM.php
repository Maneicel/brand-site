<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <link href="\midIndex\css\MenuMainCss.css" rel="stylesheet">
    <title>메뉴 메인</title>

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
        <span class="thi"><br>홈 > 메뉴 > 전체</span>
    </div>

    <!--메인-->
    <div id="main">
        <?php
        $page = $_REQUEST["page"] ?? 1;
        $listSize = 10;
        $start = ($page - 1) * $listSize;


        require("..\..\db\dbConnect.php");
        $result = $db->query("select * from menu order by num desc limit $start, $listSize");
        
        while ($row = $result->fetch()) {
            ?>
            <div class="menu_container">
                <table>
                    <tr>
                        <td><img src="<?= $row["img"] ?>"></td>
                    </tr>
                    <tr>
                        <td><span class="name_ko">
                                <?= $row["name_ko"] ?>
                            </span></td>
                    </tr>
                    <tr>
                        <td><span class="name_en">
                                <?= $row["name_en"] ?>
                            </span></td>
                    </tr>
                    <tr>
                        <td><span class="semi">
                                <?= $row["semi_explan"] ?>
                            </span></td>
                    </tr>
                </table>
            </div>

            <?php
        }
        ?>
    </div>

    <!--하단 정보바---------------------------------------->
    <?php require_once("..\..\Footer.php"); ?>

</body>

</html>