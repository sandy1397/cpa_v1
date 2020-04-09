<?php
    $mid=$_GET['id'];
    $conn=mysqli_connect("remotemysql.com","V1HwKqbZg5","nasykhl0YZ","V1HwKqbZg5");
    $records=mysqli_query($conn,"select id from users where lin=1");
    $loggedin=mysqli_fetch_assoc($records);
    $cid=$loggedin['id'];
    mysqli_query($conn,"delete from cart where Cid=$cid and Mid=$mid");
    header('Location:car.php');
?>
