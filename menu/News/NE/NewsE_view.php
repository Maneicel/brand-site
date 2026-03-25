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

    <!--글 내용-->
    <?php
    $num = $_REQUEST["num"];

    require("..\..\..\db\dbConnect.php");
    $result = $db->query("select * from news_event_board where num=$num");
    if ($row = $result->fetch()) {
        $writer = $row["writer"];
        $regtime = $row["regtime"];
        $hits = $row["hits"];
        $title = str_replace(" ", "&nbsp;", $row["title"]);
        $content = str_replace(" ", "&nbsp;", $row["content"]);
        $content = str_replace("\n", "<br>", $content);

        $db->exec("update news_event_board set hits=hits+1 where num=$num");
    }
    ?>


    <table>
        <tr>
            <th>제목</th>
            <td>
                <?= $title ?>
            </td>
        </tr>
        <tr>
            <th>작성자</th>
            <td>
                <?= $writer ?>
            </td>
        </tr>
        <tr>
            <th>작성일시</th>
            <td>
                <?= $regtime ?>
            </td>
        </tr>
        <tr>
            <th>조회수</th>
            <td>
                <?= $hits ?>
            </td>
        </tr>
        <tr>
            <th>내용</th>
            <td>
                <?= $content ?>
            </td>
        </tr>
    </table>

    <br>
    <input type="button" value="목록보기" onclick="location.href='NewsE.php'">
    <input type="button" value="수정" onclick="location.href='NewsE_write.php?num=<?= $num ?>'">
    <input type="button" value="삭제" onclick="location.href='NewsE_delete.php?num=<?= $num ?>'">
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