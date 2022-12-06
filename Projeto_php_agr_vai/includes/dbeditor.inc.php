<?php

require 'dbhandler.inc.php';

$consulta = "SELECT * FROM aboutus"; 
$cons = mysqli_query($conn, $consulta);
$cons_data = mysqli_fetch_assoc($cons);


if(isset($_POST['submit-title'])){

    $changet = $_POST['title'];
    $sql = "UPDATE aboutus SET Title='$changet'";
    $conn->query($sql);
    header("Location: ../?pg=AdminSettings");


}else if(isset($_POST['submit-content'])){

    $changec = $_POST['content'];
    $sql = "UPDATE aboutus SET Content='$changec'";
    $conn->query($sql);
    header("Location: ../?pg=AdminSetting");
    exit();

}else if(isset($_POST['submit-mail'])){

    $changem = $_POST['mail'];
    $sql = "UPDATE aboutus SET CttMail='$changem'";
    $conn->query($sql);
    header("Location: ../?pg=AdminSettings");
    exit();

}else if(isset($_POST['submit-number'])){

    $changen = $_POST['number'];
    $sql = "UPDATE aboutus SET CttNum='$changen'";
    $conn->query($sql);
    header("Location: ../?pg=AdminSettings");
    exit();

}else{
    header("Location: ../?pg=ErrorCred");
    exit();
}

