<?php
    $mid=$_GET['id'];
    $conn=mysqli_connect('localhost','root','','pcassembler');
    $records=mysqli_query($conn,"select id from users where lin=1");
    $loggedin=mysqli_fetch_assoc($records);
    $cid=$loggedin['id'];
    mysqli_query($conn,"delete from cart where Cid=$cid and Mid=$mid");
    header('Location:car.php');
?>