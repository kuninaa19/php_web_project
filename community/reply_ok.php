<?php
    session_start();
    include_once ('../db.php');
    

    if(isset($_POST["action"])){
        if($_POST["action"]=="delete"){
                
        $sql = "DELETE FROM topic_reply WHERE id = '{$_POST['replyNum']}'";

            $result = mysqli_query($conn, $sql);
            if($result){
                echo "success";
                }
        }
        else if($_POST["action"]=="update"){
            $sql = "UPDATE topic_reply SET nickname = '{$_SESSION['user_name']}', reply = '{$_POST['reply']}' WHERE id = '{$_POST['replyNum']}'";

            $result = mysqli_query($conn, $sql);
            if($result){
                echo "success";
                }
        }
        // 수정전 작성된 댓글 내용 가져오기
        else if($_POST["action"]=="getInfo"){
            $sql = "SELECT * FROM topic_reply WHERE id = '{$_POST['replyNum']}'";

            $result = mysqli_query($conn, $sql);

            $resultArray = array();

            $row = mysqli_fetch_array($result);
            $Array = array('id'=>$row['id'],'reply'=>$row['reply']);
            echo json_encode($Array);
           
           exit;
        }
    }
    else{
    $board_num = $_POST['board_num'];
    $nick = $_SESSION['user_name'];
	$replyText = $_POST['memo'];
    $user = $_SESSION['user_id'];

    $sql = "INSERT INTO topic_reply (topicNum, nickname, reply, created, user_id) VALUES ('$board_num', '$nick', '$replyText', now(),'$user')";

    echo  $sql;

    $result = mysqli_query($conn, $sql);
    if($result){
        echo "success";
        }
    }
?>