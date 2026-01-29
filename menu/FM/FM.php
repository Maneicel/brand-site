<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\midIndex\css\TextBenner.css" rel="stylesheet">
    <link rel="stylesheet" href="\midIndex\css\boot\bootstrap.css">
    <link href="\midIndex\css\FMCss.css" rel="stylesheet">
    <title>개설 비용</title>

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
        <span class="thi"><br>홈 > 창업 > 창업 안내</span>
    </div>

    <!--내부-->
    <div id="FmTitle">
        <span id="text1">00m² 기준</span>
        <span id="text2">00평 기준</span>
    </div>

    <div>
        <table class="table table-bordered" id="FmTable">
            <thead class="table-light">
                <tr>
                    <th style="width: 130px;">항목</th>
                    <th>내용</th>
                    <th>금액</th>
                    <th style="width: 130px;">비고</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td >가맹비</td>
                    <td>상표 사용권 부여, 상권조사 및 영업권 보장</td>
                    <td>면제</td>
                    <td></td>
                </tr>

                <tr>
                    <td>교육비</td>
                    <td>유니폼, 매뉴얼 교육 및 점포 운영에 관한 교육, 현장 실습비</td>
                    <td>0,000,000</td>
                    <td></td>
                </tr>

                <tr>
                    <td>주방기기/기물</td>
                    <td>고급 커피머신, 자동그라인더, 디카페인그라인더, 대용량제빙기, 믹서기, 테이블 냉장고(2EA), 
                        테이블 냉동고, 핫워터, 온수기, 오븐레인지, 5단 쇼케이스, 아이스빈, 작업대, 선반, 매립형 넉박스, 
                        주방집기, 25BOX냉장고, 냉동고 포함</td>
                    <td>0,000,000</td>
                    <td></td>
                </tr>

                <tr>
                    <td>인테리어</td>
                    <td>목공사, 전기, 조명공사, 도장, 타일, 유리, 금속, 설비 공사 외, 설계 및 도면디자인</td>
                    <td>0,000,000</td>
                    <td>추가 평당 00만원</td>
                </tr>

                <tr>
                    <td>가구</td>
                    <td>테이블 및 의자</td>
                    <td></td>
                    <td>별도</td>
                </tr>

                <tr>
                    <td>홍보물/비품</td>
                    <td>홍보물, 배너, 전단, 쿠폰, 명함, 발매트 외</td>
                    <td>0,000,000</td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="4" style="background-color: #EAE5DF;">0,000,000원</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="FMsub">
        <span>별도사항 : 전기증설, 냉난방, 철거, 외관공사(건물전면), 테라스, 어닝, 아이스크림장비, 이행보증금, POS&키오스크, 호출벨시스템(KDS)</span>
        <span>※위 사항은 예측된 수치로서 세부사항은 변동될 수 있습니다. (모든 비용은 VAT별도 금액입니다.)</span>
        <span>※위 조건은 점포상황(전기증설, 급/배수, 어닝, 테라스 공사 등)에 따라 견적이 상이할 수 있습니다.</span>
    </div>

    <!--하단 정보바---------------------------------------->
    <?php require_once("..\..\Footer.php"); ?>

</body>

</html>