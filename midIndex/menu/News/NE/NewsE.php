<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <link href="\midIndex\css\Table.css" rel="stylesheet">
    <link rel="stylesheet" href="\midIndex\css\boot\bootstrap.css">
    <title>이벤트</title>

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
        <span class="thi"><br>홈 > 소식 > 이벤트</span>
    </div>

    <!--게시판-->
    <div class="board">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th class="num">번호</th>
                    <th class="name">제목</th>
                    <th class="day">작성일</th>
                    <th class="writer">작성자</th>
                    <th class="view">조회수</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                require("..\..\..\db\dbConnect.php");
                $result = $db->query("select * from news_event_board order by num desc");
                while ($row = $result->fetch()) {
                    ?>
                    <tr>
                        <td>
                            <?= $row["num"] ?>
                        </td>
                        <td style="text-align:left;">
                            <a href="NewsE_view.php?num=<?= $row["num"] ?>" style="text-decoration: none; color:black;">
                                <?= $row["title"] ?>
                            </a>
                        </td>
                        <td>
                            <?= $row["writer"] ?>
                        </td>
                        <td>
                            <?= $row["regtime"] ?>
                        </td>
                        <td>
                            <?= $row["hits"] ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
        </table>
    </div>

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