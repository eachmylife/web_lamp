<?php require_once('./lib/print_name.php') ?>   <!--This function is for distinguishing member from guest -->
<!doctype html>
<html lang = 'ko'>
    <head>
        <meta charset = 'utf-8'>
        <title> You'll Never Walk alone! </title>
        <style>
            .contents {
                font-size: 30px;
                font-style: oblique;
            }
        </style>
    </head>
    <body>
        <h1> Welcome, <?php print_name(); ?> This site is for the Kops</h1> <hr>
        <img src = ./image/champion.gif height="330" width="550"> <br> (Picture: Getty / Metro.co.uk)
        <p class="contents"> <a href= login.html>로그인</a> <br>
            <a href= sign.html>회원가입</a> <br>
            <a href= board.html>게시판</a> <br>
        </p>
    </body>
</html>
