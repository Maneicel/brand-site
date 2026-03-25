<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인</title>
    <link href="css\Index_Css.css" rel="stylesheet">

    <link href="\midIndex\css\IndexTable.css" rel="stylesheet">
    <link rel="stylesheet" href="\midIndex\css\boot\bootstrap.css">
</head>

<body>
    <!--상단 메뉴바---------------------->
    <?php require_once("Header.php"); ?>


    <!--메인 배너 들어갈 곳------------------------------------------------------------->
    <?php require_once("MainBener.php"); ?>


    <!--------------------------------------------------------------------------------------------------->
    <div>
        <!--상단 좌측-->
        <div class="IndexMenuTitle" style="float:left;">
            <div>
                <span class="TitleHead">새로운 만남</span><br>
                <span class="Titlebody">우리가 당신을 위해 준비한 것들을 살펴보세요.</span><br>
                <span class="Titlebody">지금 여기서, 더 새롭게.</span>
            </div>
        </div>

        <!--상단 우측-->
        <div class="IndexMenuSet" style="float:left;">
            <div id="main">
                <?php
                require("db\dbConnect.php");
                $result = $db->query("select * from menu order by num desc");
                for ($i = 0; $i < 3; $i++) {
                    if ($row = $result->fetch()) {
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
                }
                ?>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------------------------------------------------->

    <div>
        <!--하단 좌측-->
        <div class="IndexEvents" style="float:left;">
            <img class="IndexEventImg" src="img\Bener\event.jpg" alt="event" />

            <div class="board" style="padding-top: 10px; padding-bottom: 0;">
                <table class="table table-hover">
                    <tbody class="table-group-divider">
                        <?php
                        require("db\dbConnect.php");
                        $result = $db->query("select * from News_event_board order by num desc");

                        for ($i = 0; $i < 3; $i++) {
                            if ($row = $result->fetch()) {
                                ?>
                                <tr>
                                    <td style="text-align:left;">
                                        <a href="menu\News\NE\NewsE_view.php?num=<?= $row["num"] ?>"
                                            style="text-decoration: none; color:black;">
                                            <?= $row["title"] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $row["regtime"] ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                </table>
            </div>
            <button onclick="location.href='//localhost/midIndex/menu/News/NE/NewsE.php'">다른 이벤트 보러가기</button>
        </div>

        <!--하단 우측 1번-->
        <div class="IndexMenu1" style="float:left;">

            <span class="IndexNewsTitle">공지사항</span>
            <span class="IndexNewsText">정원의 최신 소식을 알아보세요.</span>
            <div class="board" style="padding-top: 10px; padding-bottom: 0;">
                <table class="table table-hover">
                    <tbody class="table-group-divider">
                        <?php
                        require("db\dbConnect.php");
                        $result = $db->query("select * from News_board order by num desc");

                        for ($i = 0; $i < 3; $i++) {
                            if ($row = $result->fetch()) {
                                ?>
                                <tr>
                                    <td style="text-align:left;">
                                        <a href="menu\News\N\News_view.php?num=<?= $row["num"] ?>"
                                            style="text-decoration: none; color:black;">
                                            <?= $row["title"] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $row["regtime"] ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                </table>
            </div>
            <button onclick="location.href='//localhost/midIndex/menu/News/N/News.php'">다른 공지사항 보기 ></button>
        </div>

        <!--하단 우측 2번-->
        <div class="IndexMenu2">
            <span class="IndexMapTitle">매장찾기</span>
            <span class="IndexMapText">가까운 매장을 찾아보세요.</span>
            <button onclick="location.href='//localhost/midIndex/menu/Map.php'">매장 찾으러 가기 ></button>
        </div>


        <!--------------------------------------------------------------------------------------------------->

    </div>
    <!--하단 정보바---------------------->
    <?php require_once("Footer.php"); ?>
</body>

</html>