<?php
// create table userdatabase(id int AUTO_INCREMENT PRIMARY KEY not null, name varchar(50) not null, surname varchar(50) not null ,dob date ,email varchar(50) not null, password varchar(50),website varchar(50), comment varchar(50),address varchar(50),phone varchar(15), gender varchar(50) not null);

    require "conn.php";


      



    if(isset($_FILES['image'])){
        
        $file_name=$_FILES['image']['name'];
        $temp_name=$_FILES['image']['tmp_name'];
        $file_size=$_FILES['image']['size'];
        $file_type=$_FILES['image']['type'];

        if(move_uploaded_file($temp_name,"uploadimage/".$file_name)){
            echo "File uploaded successfully";
        }
        else{
            echo "File not uploaded";
        }

        //$file_ext= strtolower(end(explode('.', $file_name)));

    }

    

    




    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
         $name= $_POST['name'];
         $surname= $_POST['surname'];
         $dob= $_POST['dob'];
         $email= $_POST['email'];
         $password= $_POST['password'];
         $address= $_POST['address'];
         $website= $_POST['website'];
         $comment= $_POST['comment'];
         $phone= $_POST['phone'];
         $gender= $_POST['gender'];   
    }


     if(count($_POST)!=0) {
        
        //$name = $_POST['name'];
        //$password = $_POST['password'];
        //extract($_POST);

        $query= "insert into userdatabase(
            name, surname,dob ,email, password,
            website, comment,address,phone, gender
        )values(
            '$name','$surname', '$dob', '$email', '$password',
            '$website', '$comment','$address', '$phone', '$gender'
        )";

        echo $query;
        $result=mysqli_query($con,$query);
        if($result==true){
            echo "Data inserted successfully";
        } else {
            echo "failed";
        }
    }


?>