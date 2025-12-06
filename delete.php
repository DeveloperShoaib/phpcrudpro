<?php
   include 'conn.php';
   extract($_GET);
    $query="delete from userdatabase where id='$id'";
    $result=mysqli_query($con,$query);
    header('location:index.php');
?>