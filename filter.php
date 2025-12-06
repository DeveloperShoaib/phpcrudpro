<?php
    $var=500;
    //echo filter_var($var,FILTER_VALIDATE_INT);
    if(filter_var($var,FILTER_VALIDATE_INT) || filter_var($var,FILTER_VALIDATE_INT)==0 ){   //$var===0
        echo"it is an integer"."<br>";
    }
    else{
        echo"not an integer";
    } 
    
    $options=array(
        "options"=>array(
            "min_range"=>1,
            "max_range"=>100
        )
    );
    if(filter_var($var,FILTER_VALIDATE_INT, array("options"=>array("min_range"=>10,"max_range"=>100)))){ // $options
        echo" it is within range"."<br>";
    }
    else
    {
        echo" not within range"."<br>";
    }

    $var2="hello@gmai.lcom";
    if(filter_var($var2,FILTER_VALIDATE_EMAIL)){
        echo" valid email"."<br>";
    }
    else{
        echo" not valid email";
    }


    $var3="https://www.google.com/";
    if(filter_var($var3,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)){
        echo" valid url"."<br>";
    }
    else{
        echo" not valid url";
    }   

    $var4="https://www.google.com/?id=10";
    if(filter_var($var4,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
        echo" valid url"."<br>";
    }
    else{
        echo" not valid url";
    }

    $var5="192.168.1.100";
    if(filter_var($var5,FILTER_VALIDATE_IP)){
        echo" valid ip"."<br>";
    }
    else{
        echo" not valid ip";
    }
?>