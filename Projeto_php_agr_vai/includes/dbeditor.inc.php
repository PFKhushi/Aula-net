<?php

require 'dbhandler.inc.php';

$consulta = "SELECT * FROM aboutus"; 
$cons = mysqli_query($conn, $consulta);




if(isset($_POST['submit-title'])){

    $change_title = $_POST['title'];
    $sql = "UPDATE aboutus SET Title='$change_title'";
    
    header("Location: ../?pg=AdminSettings");


}else if(isset($_POST['submit-content'])){

    $change_content = $_POST['content'];
    $sql = "UPDATE aboutus SET Content='$change_content'";
    
    header("Location: ../?pg=AdminSettings");


}else if(isset($_POST['submit-mail'])){

    $change_mail = $_POST['mail'];
    $sql = "UPDATE aboutus SET CttMail='$change_mail'";
    
    header("Location: ../?pg=AdminSettings");

}else if(isset($_POST['submit-number'])){

    $change_number = $_POST['number'];
    $sql = "UPDATE aboutus SET CttNum='$change_number'";
    
    header("Location: ../?pg=AdminSettings");


}else{
    header("Location: ../?pg=ErrorCred");
    exit();
}