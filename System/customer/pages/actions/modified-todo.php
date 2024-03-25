<?php

session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['user_id'])){
header('location:../index.php');	
}

if(isset($_POST['task_desc'])){
$task_desc = $_POST["task_desc"];    
$task_status = $_POST["task_status"];
$id = $_POST["id"];

include 'dbcon.php';
//code after connection is successfull
//update query
$qry = "update todo set task_desc='$task_desc', task_status='$task_status' where id='$id'";
$result = mysqli_query($con,$qry); //query executes

if(!$result){
    echo"ERROR!!";
}else {

    header('Location:../index.php');

}

}else{
    echo"<h3>USTED NO ESTÁ AUTORIZADO A REDIRIGIR ESTA PÁGINA. Volver a<a href='index.php'> DASHBOARD </a></h3>";
}
?>