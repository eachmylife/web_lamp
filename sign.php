<?php
    header("Content-Type: text/html; charset=UTF-8");
    $conn = mysqli_connect("localhost","reus","jaeha703","sam");
    mysqli_query($conn,'SET NAMES utf8');
    $name = $_POST['username'];
    $id = $_POST['userid'];
    $pw = $_POST['userpw'];
    $email = $_POST['useremail'];
    $sql = "INSERT INTO user VALUES('$name','$id','$pw','$email')";
    $res = $conn->query($sql);
    echo "<script> alert('회원가입을 축하드립니다! 가입하신 정보로 다시 로그인해주세요');
    			location.href='index.php'; </script>";
?>
