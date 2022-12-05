<?php

if(isset($_POST['login-submit'])){

    require 'dbhandler.inc.php';
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pswd'];

    if(empty($mailuid) || empty($password)){
        header("Location: ?pg=Errorlogin");
        exit();
    }else{
        $sql = "SELECT * FROM usuario WHERE UIDUsers=? OR EmailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ?pg=Errorlogin");
            exit();
        }
        else{

            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){
                $pswdCheck = password_verify($password, $row['PSWDUsers']);
                if($pswdCheck == false){
                    header("Location: ?pg=Errorlogin");
                    exit();
                }else if($pswdCheck == true){
                    session_start();
                    $_SESSION['IDUsers'] = $row['UsersID'];
                    $_SESSION['UserUID'] = $row['UIDUsers'];
                    header("Location: index.php");
                    
                }
                else{
                    header("Location: ?pg=Errorlogin");
                    exit();
                }
            }
            else{
                header("Location: ?pg=Errorlogin");
                exit();
            }

        }
    }
}
else{

    header("Location: ?pg=Errorlogin");
    exit();

}
