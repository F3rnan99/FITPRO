<?php

session_start();
if(!isset($_SESSION['user_id'])){
header('location:../index.php');	
}

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'dbcon.php';


$qry="UPDATE members SET reminder = '1' where user_id=$id";
$result=mysqli_query($con,$qry);

if($result){
    echo '<script>alert("Notificación enviada a la cliente!")</script>';
    echo '<script>window.location.href = "payment.php";</script>';
    
}else{
    echo"ERROR!!";
}
}
?><!-- Visit codeastro.com for more projects -->