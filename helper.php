<?php
// create table userdatabase(id int AUTO_INCREMENT PRIMARY KEY not null, name varchar(50) not null, surname varchar(50) not null ,dob date ,email varchar(50) not null, password varchar(50),website varchar(50), comment varchar(50),address varchar(50),phone varchar(15), gender varchar(50) not null);

    require "conn.php";


    //   if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
        
    //     $file_name=$_FILES['image']['name'];
    //     $temp_name=$_FILES['image']['tmp_name'];
    //     $file_size=$_FILES['image']['size'];
    //     $file_type=$_FILES['image']['type'];

    //     $folder="uploadimage/".$file_name;
    //     echo $folder;
        // if(move_uploaded_file($temp_name,$folder)){
        //     echo "File uploaded successfully";
        // }
        // else{
        //     echo "File not uploaded";
        // }

        // echo "<img src='$folder' height='100' width='100'/>";

        //$file_ext= strtolower(end(explode('.', $file_name)));

    //}

     // $nameErr=$surnameErr= $dobErr= $emailErr= $phoneErr= $genderErr=$commentErr= $addressErr= $passwordErr=$websiteErr="";
      //$name=$surname= $dob= $email= $password= $website= $comment= $address= $phone= $gender= "";

//    function cleaning($record){
//          $record=trim($record); 
//          $record=stripslashes($record);
//          $record=htmlspecialchars($record);
//          return $record;
//        }

//   if($_SERVER["REQUEST_METHOD"]=="POST"){


//     if(empty($_POST['name'])){
//             $nameErr="Name is required";
//         }else{
//                 $name=cleaning($_POST['name']);
//                 if(!preg_match("/^[a-zA-Z-']*$/",$name)){
//                     $nameErr="only letters and white space allowed";
//                 }
//         }

//         if(empty($_POST['surname'])){
//             $surnameErr="surname is required";
//         }else{
//             $surname=cleaning($_POST['surname']);
//             if(!preg_match("/^[a-zA-Z-']*$/",$surname)){
//                 $surnameErr="only letters and white space allowed";
//             }
//         }
        
//         if(empty($_POST['dob'])){
//                 $dobErr=" ";
//         }else{
//             $dob=cleaning($_POST['dob']);
//         }
        
//         if(empty($_POST['email'])){
//             $emailErr="email is required";
//         }else{
//                 $email=cleaning($_POST['email']);
//                 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
//                 $emailErr="invalid email format";
//             }
//         }
        
//         if(empty($_POST['phone'])){
//             $phoneErr="phone number is required";
//         }else{
//                 $phone=cleaning($_POST['phone']);
//                 if(!preg_match("/^[0-9]{10}$/",$phone)){
//                     $phoneErr="invalid phone number";
//                 }
//         }
    
//         if(empty($_POST['gender'])){
//             $genderErr="gender is required";
//         }else{
//                 $gender=cleaning($_POST['gender']);
//         }
    
//         if(empty($_POST['comment'])){
//             $commentErr=" ";
//         }else{
//                 $comment=cleaning($_POST['comment']);
//         }
    
//         if(empty($_POST['address'])){
//             $addressErr=" ";
//         }else{
//                 $address=cleaning($_POST['address']);
//         }
    
//         if(empty($_POST['password'])){
//             $passwordErr=" ";
//         }else{
//                 $password=cleaning($_POST['password']);
//         }

//         if(empty($_POST['website'])){
//             $websiteErr=" ";
//         }else{
//                 $website=cleaning($_POST['website']);
//                 if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
//                     $websiteErr = "Invalid URL";
//                 }    
//             }




//         }
        

    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
    if(count($_POST)!=0) {
        
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $address = $_POST['address'];
        $website = $_POST['website'];
        $comment = $_POST['comment'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
         
        $file_name=$_FILES['image']['name'];
        $temp_name=$_FILES['image']['tmp_name'];
        

        $folder="uploadimage/".$file_name;
        echo $folder;
        if(move_uploaded_file($temp_name,$folder)){
            echo "File uploaded successfully";
        }
        else{
            echo "File not uploaded";
        }
        

        //echo $name, $surname, $dob, $email, $password, $address, $website, $comment, $phone, $gender;


        $query= "insert into userdatabase(
            name,picstore, surname,dob ,email, password,
            website, comment,address,phone, gender
        )values(
            '$name','$folder','$surname', '$dob', '$email', '$password',
            '$website', '$comment','$address', '$phone', '$gender'
        )";

            $result=mysqli_query($con,$query);
            echo $query;
        if($result==true){
            echo "Data inserted successfully";
        } else {
            echo "failed";
            }
        }
    }
    


     

?>