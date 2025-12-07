<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 400px;
            margin: auto;
            border: 1px solid black;
            padding: 20px;
            margin-top: 100px;
            text-align: center;
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <?php
     include 'conn.php';
      //if(count($_POST)!=0) {
        
         //$name = $_POST['name'];
         //$password = $_POST['password'];
         //extract($_POST);
         //extract($_GET);
   // }
    //     $query= "update userdatabase set name='$name', surname='$surname', dob='$dob' ,email='$email', password='$password',website='$website' , comment='$comment' ,address='$address',phone='$phone' , gender='$gender' where id='$id'";
    //     echo $query;
    //     $result=mysqli_query($con,$query);
    //     if($result==true){
    //         echo "Data inserted successfully";
    //     } else {
    //         echo "failed";
    //     }
    // }



    $id=$_GET['id'];

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

        $query= "update userdatabase set name='$name', picstore='$folder', surname='$surname', dob='$dob' ,email='$email', password='$password',website='$website' , comment='$comment' ,address='$address',phone='$phone' , gender='$gender' where id='$id'";
        echo $query;
        $result=mysqli_query($con,$query);
        if($result==true){
            echo "Data inserted successfully";
        } else {
            echo "failed";
        }
        
    }
}






    ?>
    <div class="container">
    <form  method="post" enctype="multipart/form-data">

    Name:<input type="text" name="name" placeholder="enter your name">
    <br><br>
    Surname:<input type="text" name="surname" placeholder="enter your surname">
    <br><br>
    Date of Birth:<input type="date" id="dob" name="dob">
    <br><br>
    Email:<input type="text" name="email" placeholder="enter your email">
    <br><br>
    Password:<input type="text" name="password" placeholder="enter your password">
    <br><br>
    Address: <textarea name="address" rows="5" cols="40"></textarea>
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Phone:<input type="text" name="phone" maxlength="10" placeholder="enter your phone number">
    <br><br>
    Male:<input type="radio" name="gender" value="male"> Male
    <br><br>
    Female:<input type="radio" name="gender"  value="female"> Female
    <br><br>
    Other:<input type="radio" name="gender"  value="other"> Other
    <br><br>
    <input type="submit" name="submit" value="submit"><br><br>
    <div>
    <input type="file" name="image"></input><br>
    <input type="submit" value="Upload"></input>
    </div>
  </form>
</body>
</html>