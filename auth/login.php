<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITdream</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<br>
<div class="container">
    <div class="nav">
        <div class="big-category"><a href="../index.php">
                <img src="/smarteditor/upload/wefewfew.jpg" width="200px" height="50px"></a></div>
    </div>
    <h3 class="banner">로그인</h3>

    <div class="box">
        <?php if (!isset($_SESSION['user_id'])) { ?>
            <form method="post" action="login_check.php">
                <fieldset>
                    <p><input type="text" name="user_id" placeholder="아이디" class="info-form"/></p>
                    <p><input type="password" name="user_pw" placeholder="비밀번호" class="info-form"/></p>
                    <p><input type="checkbox" name="auto_login" value="check" style="margin-left:35px;"> 자동로그인</p>
                    <p><input type="submit" value="로그인" class="button-form" id="button-color"/></p>

                </fieldset>
            </form>
        <?php } else {
            echo "<a href='../index.php'> [돌아가기]</a> ";
        } ?>
        <span style="color: #F4EAEA;">
               <a href="SignUp.php" class="txt_login">회원가입</a>
          <a href="../myInfo/user_id_find.php" class="txt_login">아이디 찾기</a>
          <a href="../myInfo/user_pw_find.php" class="txt_login">비밀번호 찾기</a>
        </span>
    </div>
</div>
</body>
</html>