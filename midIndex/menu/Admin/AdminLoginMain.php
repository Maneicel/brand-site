<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <link href="\midIndex\css\AdminLoginMainCss.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="ALMbody">
    <?php
    session_start();
    ?>

    <!--상단 메뉴바---------------------------------------->
    <?php require_once("..\..\Header.php"); ?>

    <!--상단 배너---------------------------------------->
    <div class="TextBenner">
        <span class="fir">CAFE<br></span>
        <span class="sec">JEONG ONE<br></span>
        <span class="thi"><br>점주의 방</span>
    </div>


    <?php
    if (!isset($_SESSION["userId"])) {
        ?>

        <div class="LoginContainer">
            <div class="login-wrapper">
                <form method="post" action="AdminLogin.php" id="login-form">
                    <input type="text" name="id" placeholder=" id">
                    <input type="password" name="pw" placeholder=" pw">
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>

        <?php
    } else {
        ?>
        <div class="LoginContainer">
            <div class="login-wrapper">
                <form action="AdminLogout.php" method="post" id="login-form">
                    <span class="loginMents">
                        <?= $_SESSION["userId"] ?>님 로그인
                    </span>
                    <input type="submit" value="로그아웃">
                </form>
            </div>
        </div>

        <div class="AdminMenu">
            <div class="NewsMenu">
                <button class="BT" onclick="location.href='//localhost/midIndex/menu/News/N/News_write.php'">공지사항 쓰기</button>
                <button class="BT" onclick="location.href='//localhost/midIndex/menu/News/NE/NewsE_write.php'">이벤트 쓰기</button>
                <button class="BT" onclick="location.href='//localhost/midIndex/menu/News/NN/NewsN_write.php'">보도자료 쓰기</button>
            </div>
            <div class="MenuMenu">
                <button class="BT" onclick="location.href='//localhost/midIndex/menu/Menu/drink/Drink_write.php'">음료 메뉴 추가하기</button>
                <button class="BT" onclick="location.href='//localhost/midIndex/menu/Menu/food/Food_write.php'">음식 메뉴 추가하기</button>
                <button class="BT" onclick="location.href='//localhost/midIndex/menu/Menu/md/MD_write.php'">MD 추가하기</button>
            </div>
        </div>
        <?php
    }
    ?>



    <!--하단 정보바---------------------------------------->
    <?php require_once("..\..\Footer.php"); ?>





</body>

</html>