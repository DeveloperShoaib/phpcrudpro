<?php

   
    $con=mysqli_connect("localhost","root","","formdata");
    if(!$con){
        die("Connection Failed".mysqli_connect_error());
    }
    else{
        echo "Connection Successful";
    }   
    //var_dump($con);


    // $con=new PDO("mysql:host=localhost;dbname=formdata","root","");
    // $sql=$con->query("select * from user");
    // while($row=$sql->fetch(PDO::FETCH_ASSOC)){
    //     echo "<pre>";
    //     //print_r($row);
    //     echo "</pre>";
    // }

?>