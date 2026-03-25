<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <link href="\midIndex\css\Table.css" rel="stylesheet">
    <link rel="stylesheet" href="\midIndex\css\boot\bootstrap.css">
    <title>공지사항</title>

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
        <span class="thi"><br>홈 > 소식 > 공지사항</span>
    </div>

    <!--작성 페이지-->
    <?php
    $title = "";
    $writer = "";
    $content = "";
    $action = "News_insert.php";

    $num = $_REQUEST["num"] ?? 0;

    if ($num > 0) {
        require("..\..\..\db\dbConnect.php");
        $result = $db->query("select * from News_board where num=$num");
        if ($row = $result->fetch()) {
            $writer = $row["writer"];
            $title = $row["title"];
            $content = $row["content"];

            $action = "News_update.php?num=$num";
        }
    }
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
                    <th>제목</th>
                    <td>
                        <input type="text" name="title" maxlength="80" value="<?= $title ?>">
                    </td>
                </tr>
                <tr>
                    <th>작성자</th>
                    <td>
                        <input type="text" name="writer" maxlength="40" value="<?= $writer ?>">
                    </td>
                </tr>
                <tr>
                    <th>내용</th>
                    <td>
                        <textarea name="content" rows="10"><?= $content ?></textarea>

                    </td>
                </tr>
            </table>

            <br>
            <input type="submit" value="저장" onclick="location.href='News.php'">
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