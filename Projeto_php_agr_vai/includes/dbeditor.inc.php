<?php

require 'dbhandler.inc.php';


if(isset($_POST['submit-title'])){
    
    $consulta = "SELECT * FROM aboutus"; 
    $cons = mysqli_query($conn, $consulta);
    $cons_data = mysqli_fetch_assoc($cons);
    $changet = $_POST['title'];
    $sql = "UPDATE aboutus SET Title='$changet'";
    $conn->query($sql);
    header("Location: ../?pg=AdminSettings");


}else if(isset($_POST['submit-content'])){

    $consulta = "SELECT * FROM aboutus"; 
    $cons = mysqli_query($conn, $consulta);
    $cons_data = mysqli_fetch_assoc($cons);
    $changec = $_POST['content'];
    $sql = "UPDATE aboutus SET Content='$changec'";
    $conn->query($sql);
    header("Location: ../?pg=AdminSetting");
    exit();

}else if(isset($_POST['submit-mail'])){

    $consulta = "SELECT * FROM aboutus"; 
    $cons = mysqli_query($conn, $consulta);
    $cons_data = mysqli_fetch_assoc($cons);
    $changem = $_POST['mail'];
    $sql = "UPDATE aboutus SET CttMail='$changem'";
    $conn->query($sql);
    header("Location: ../?pg=AdminSettings");
    exit();

}else if(isset($_POST['submit-number'])){

    $consulta = "SELECT * FROM aboutus"; 
    $cons = mysqli_query($conn, $consulta);
    $cons_data = mysqli_fetch_assoc($cons);
    $changen = $_POST['number'];
    $sql = "UPDATE aboutus SET CttNum='$changen'";
    $conn->query($sql);
    header("Location: ../?pg=AdminSettings");
    exit();

}else{
    header("Location: ../?pg=ErrorCred");
    exit();
}

