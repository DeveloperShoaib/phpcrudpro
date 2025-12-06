
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .color{
            color:red;
        }
    </style>    
</head>
<body>
 

      <?php

      $nameErr=$surnameErr= $dobErr= $emailErr= $phoneErr= $genderErr=$commentErr= $addressErr= $passwordErr=$websiteErr="";
      $name=$surname= $dob= $email= $password= $website= $comment= $address= $phone= $gender= "";

        function cleaning($record){
        $record=trim($record); 
        $record=stripslashes($record);
        $record=htmlspecialchars($record);
        return $record;
    }

    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        if(empty($_POST['name'])){
            $nameErr="Name is required";
        }else{
                $name=cleaning($_POST['name']);
                if(!preg_match("/^[a-zA-Z-']*$/",$name)){
                    $nameErr="only letters and white space allowed";
                }
        }

        if(empty($_POST['surname'])){
            $surnameErr="surname is required";
        }else{
            $surname=cleaning($_POST['surname']);
            if(!preg_match("/^[a-zA-Z-']*$/",$surname)){
                $surnameErr="only letters and white space allowed";
            }
        }
        
        if(empty($_POST['dob'])){
                $dobErr=" ";
        }else{
            $dob=cleaning($_POST['dob']);
        }
        
        if(empty($_POST['email'])){
            $emailErr="email is required";
        }else{
                $email=cleaning($_POST['email']);
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr="invalid email format";
            }
        }
        
        if(empty($_POST['phone'])){
            $phoneErr="phone number is required";
        }else{
                $phone=cleaning($_POST['phone']);
                if(!preg_match("/^[0-9]{10}$/",$phone)){
                    $phoneErr="invalid phone number";
                }
        }
    
        if(empty($_POST['gender'])){
            $genderErr="gender is required";
        }else{
                $gender=cleaning($_POST['gender']);
        }
    
        if(empty($_POST['comment'])){
            $commentErr=" ";
        }else{
                $comment=cleaning($_POST['comment']);
        }
    
        if(empty($_POST['address'])){
            $addressErr=" ";
        }else{
                $address=cleaning($_POST['address']);
        }
    
        if(empty($_POST['password'])){
            $passwordErr=" ";
        }else{
                $password=cleaning($_POST['password']);
        }

        if(empty($_POST['website'])){
            $websiteErr=" ";
        }else{
                $website=cleaning($_POST['website']);
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteErr = "Invalid URL";
                }    
            }

    }
     ?>
     
     <div >
    <form action="helper.php" method="post" enctype="multipart/form-data">

    Name:<input type="text" name="name" placeholder="enter your name">
    <span class="color">*<?php echo $nameErr;?></span>
    
    
    <br><br>

    Surname:<input type="text" name="surname" placeholder="enter your surname"><span class="color">*<?php echo $surnameErr;?></span>
    
    <br><br>

    Date of Birth:<input type="date" id="dob" name="dob"><span class="color"><span>*<?php  echo $dobErr;?></span>
    
    <br><br>

    Email:<input type="text" name="email" placeholder="enter your email"><span class="color">*<?php  echo $emailErr;?></span>
    
    <br><br>

    Password:<input type="text" name="password" placeholder="enter your password"><span class="color">*<?php  echo $passwordErr;?></span>
    
    <br><br>

    Address: <textarea name="address" rows="5" cols="40"></textarea><span class="color">*<?php  echo $addressErr;?></span>
    
    <br><br>

    Website: <input type="text" name="website"><span class="color"><?php  echo $websiteErr;?></span>
    
    <br><br>

    Comment: <textarea name="comment" rows="5" cols="40"></textarea><span class="color"><?php  echo $commentErr;?></span>
    
    <br><br>

    

    Phone:<input type="number" name="phone" maxlength="10" placeholder="enter your phone number"><span class="color"><?php echo $phoneErr;?></span>
    
    <br><br>

    Male:<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
    <span class="color">*<?php  echo $genderErr;?></span>
    <br><br>

    Female:<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
    <span class="color">*<?php  echo $genderErr;?></span>
    <br><br>

    Other:<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other
    <span class="color">*<?php  echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="submit"><br><br>
    <div>
    <input type="file" name="image"></input><br>

    <input type="submit" value="Upload"></input>
    </div>
    </form>
    </div>

    

    
        
         
    
</body>
</html>