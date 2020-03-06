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
    <link href="../css/style.css?afer" rel="stylesheet" type="text/css"/>
</head>
<body>
<br>
<script src="loginRegExp.js"></script>

<div class="container">
    <div class="nav">
        <div class="big-category"><a href="../index.php"><img src="/smarteditor/upload/wefewfew.jpg" width="200px" height="50px"></a></div>
    </div>
    <h3 class="banner">회원가입</h3>
    <hr/>
    <div class="box">
        <form method="post" name="sign_up" action="SignUp_ok.php">
            <fieldset>
                <b class="txt_sign">아이디</b><br/><input type="text" class="info-form" name="id" onblur="validateId(this.value)">
                <p>
                    <span class="error_box" id="idSpan"></span> <br/>
                <p>
                    <b class="txt_sign">비밀번호</b><br/><input type="password" class="info-form" name="pw" onblur="validatePassword(this.value)">
                <p>
                    <span class="error_box" id="passwordSpan"></span><br/>
                <p>
                    <b class="txt_sign">비밀번호 재확인</b><br/><input type="password" class="info-form" name="pwcf" onblur="validatePassword2(this.value, pw.value)">
                <p>
                    <span class="error_box" id="password2Span"></span><br/>
                <p>
                    <b class="txt_sign">이메일주소</b><br/><input type="text" class="info-form" name="email" onblur="validateEmail(this.value)">
                <p>
                    <span class="error_box" id="emailSpan"></span><br/>
                <p>
                    <b class="txt_sign">닉네임</b><br/><input type="text" class="info-form" name="nickname" onblur="validateNickname(this.value)">
                <p>
                    <span class="error_box" id="nameSpan"></span><br/>
                <p>

                <p><input type="button" value="회원가입" class="button-form" id="button-color" onclick="placeOrder(this.form)"/></p>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>