<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">   
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 커스텀 css -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Pen+Script" rel="stylesheet"> 
    <link rel="stylesheet" href="css/week12.css">
    <style>

        #name
        {
            font-family: 'Nanum Pen Script', cursive;
            text-align: center;
            font-size: 700%;

        }
    </style>

</head>

<body>
<?php 
    require('db_connect.php');
    $result = mysqli_query($conn, "SELECT * FROM board_list");

?>
    <div class="container">
    <br><br><br>
        <p id="name">소중한 <br>
        한정섭씨를 <br>
        씨밀레 밥고에 <br>
        초대합니다. <br>
        </p>
        <br><br><br>

        <hr>
        
        <h3>저희 씨밀레 밥고에 함께할 CRA 맴버를 구합니다. </h3>

        <p> 
            시작 시간 : 매주 화 17:30 (1분이라도 늦으면 평생 먹을 욕 먹음) <br>
            마치는 시간 : 18:10 (눈치 없이 아재드립 + 컴공 드립치다가 분위기 갑분싸 + 실프 수업 으로 인해서 빠른 귀가보장) <br>
            특징 : 밥고에 미참석할시 죄책감 들게 만들어줌 <br>
            맴버 : 크라의 미래, 위키위큐의 미래, 트립켈라 사우르스, 1727 등 누가 오더라도 어색하지 않을 포용력 넘치는 구성원들 <br> 
            특권 : 매주 제작되는 밥고 독려 홈페이지 우선 구독권 <br>   
        </p>
        <hr>
            <p></p>
        

        <form role="form" action="week12_insert.php" method="POST"  > 
            <div class="form-group"> 
                <label for="username">11주차 부터 함께 우리 씨밀레 밥고에 참석하는 한정섭씨를 위해 축하글 남겨주세요!</label> 
                <input type="text" class="form-control" id="nickname" name="nickname" placeholder="닉네임">
                <br>
                <input type="text" class="form-control" id="message" name="message" placeholder="축하의 메시지를 남겨주세요!^^"> 
            </div> 
            <button type="submit" class="btn btn-default">작성하기</button>
        </form>

        <?php
            while( $row = mysqli_fetch_array($result) ){
                $name = $row["name"];
                $message = $row["message"];
                echo "<p>".$name."<br>".$message."</p>";
                echo "<hr>";
            }
        ?>

        <br><br>
        <a href="week11_1.html"><button type="button" class="btn btn-info">지난주 에피소드 다시보기(이스터에그ver)</button></a>
        <br><br>
        <hr>
        <><
        <br><br>
    </div>

    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>