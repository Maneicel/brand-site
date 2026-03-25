<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/TextBenner.css" rel="stylesheet">
    <link href="/css/Map.css" rel="stylesheet">
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
    <?php require_once("../Header.php"); ?>

    <!--상단 배너---------------------------------------->
    <div class="TextBenner">
        <span class="fir">CAFE<br></span>
        <span class="sec">JEONG ONE<br></span>
        <span class="thi"><br>홈 > 매장 > 매장 찾기</span>
    </div>

    <!--카카오맵 api 불러오기-->
    <div id="map" style="width:500px;height:400px;"></div>
    <div id="map" style="width:500px;height:400px;"></div>
	<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=api"></script>
	<script>
		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(33.450701, 126.570667),
			level: 3
		};

		var map = new kakao.maps.Map(container, options);
	</script>

    <!--하단 정보바---------------------------------------->
    <?php require_once("../Footer.php"); ?>

</body>

</html>