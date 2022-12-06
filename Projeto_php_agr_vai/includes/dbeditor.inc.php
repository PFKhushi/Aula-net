<?php

require 'dbhandler.inc.php';

$consulta = "SELECT * FROM aboutus"; 
$cons = mysqli_query($conn, $consulta);
$cons_data = mysqli_fetch_assoc($cons);


if(isset($_POST['submit-title'])){

    $change = $_POST['title'];
    $sql = "UPDATE aboutus SET Title='$change' WHERE ID=1";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../?pg=testgood");
      } else {
        header("Location: ../?pg=testnotgood");
      }

}else if(isset($_POST['submit-content'])){

    $change = $_POST['content'];
    $sql = "UPDATE aboutus SET Content='$change' WHERE ID=1";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../?pg=testgood");
      } else {
        header("Location: ../?pg=testnotgood");
      }

}else if(isset($_POST['submit-mail'])){

    $change = $_POST['mail'];
    $sql = "UPDATE aboutus SET CttMail='$change' WHERE ID=1";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../?pg=testgood");
      } else {
        header("Location: ../?pg=testnotgood");
      }

}else if(isset($_POST['submit-number'])){

    $change = $_POST['number'];
    $sql = "UPDATE aboutus SET CttNum='$change' WHERE ID=1";
    

}else{
    header("Location: ../?pg=ErrorCred");
    exit();
}

$cons_data = mysqli_fetch_assoc($cons);