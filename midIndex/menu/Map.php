<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <link href="\midIndex\css\Map.css" rel="stylesheet">
    <title>매장 찾기</title>

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
    <?php require_once("..\Header.php"); ?>

    <!--상단 배너---------------------------------------->
    <div class="TextBenner">
        <span class="fir">CAFE<br></span>
        <span class="sec">JEONG ONE<br></span>
        <span class="thi"><br>홈 > 매장 > 매장 찾기</span>
    </div>



    <!--지도 위치잡기-->
    <div id="map"></div>

    <!--카카오맵 api 불러오기-->
    <script type="text/javascript"
        src="//dapi.kakao.com/v2/maps/sdk.js?appkey=16e45314eb28a73760f6507b143c894d"></script>

    <script>
        var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
        var options = { //지도를 생성할 때 필요한 기본 옵션
            center: new kakao.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
            level: 3 //지도의 레벨(확대, 축소 정도)
        };

        var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴
    </script>

    <!--하단 정보바---------------------------------------->
    <?php require_once("..\Footer.php"); ?>

</body>

</html>