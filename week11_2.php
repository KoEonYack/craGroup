<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">   
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
</head>

<body>

    <div class="container">
        <br>
        <p> 본 사이트에 첨부된 사진은 13학번 강민수 학생이 17-2 파이썬 TA세션을 진행하기 위해 제작한 PPT의 일부를 가져왔습니다. <br>
        모든 저작권은 강민수 학생에게 있으며, 저작권자의 사용 허락을 받았습니다.
         </p>
        <br>
        <a href="error.html"><img alt="강민수" width="80%" height="80%"  src="https://t1.daumcdn.net/cfile/tistory/9915CC365BDD1EB80A" /></a>
        <br><br><br>
        <h3>Let's practice (Web ver)</h3>
        <br>
            <?php
             echo htmlentities("<p>TA는 잘생겼나요?\n
             <button type=\"button\" class=\"btn btn-success\">넹~</button>
             <button type=\"button\" class=\"btn btn-danger\">아녀 ㅡㅡ</button>
         </p>"); 
            ?>
            <hr>
            <p> Question. 자바스크립트는 어떻게 구성해야할까요? </p>
        <br><br>
        <button type="button" class="btn btn-info" onclick="location.href='week11_3.html' ">코드를 잘 이해했나요??!</button>
        <br><br><br><br>
    </div>


    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>