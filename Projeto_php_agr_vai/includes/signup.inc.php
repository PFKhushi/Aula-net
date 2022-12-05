<?php

if(isset($_POST['signup-submit'])){

    require 'dbhandler.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pswd'];
    $password_repeat = $_POST['pswd-repeat'];
    
    if($password!==$password_repeat){
        
        header("Location: ?pg=ErrorCred");
        exit();
        
    }
    else{

        $sql = "SELECT UIDUsers FROM usuario WHERE UIDUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ?pg=ErrorCred");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resulCheck = mysqli_stmt_num_rows($stmt);
            if($resulCheck > 0){
                header("Location: ?pg=ErrorCred");
                exit();
            }
            else{
                $sql = "INSERT INTO usuario (UIDUsers, EmailUsers, PWSDUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ?pg=ErrorCred");
                    exit();
                }
                else{

                    $hashedPswd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPswd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ?pg=inicio");
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}