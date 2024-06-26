<?php

require './connection.php';

$firstName = $_POST["fName"];
$lastName = $_POST["lName"];
$email = $_POST["email"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$gender = $_POST["gender"];

if(empty($firstName)){
    echo ("Please enter your First Name.");
}else if(strlen($firstName) > 45){
    echo ("First Name must have less than 45 characters.");
}else if(empty($lastName)){
    echo ("Please enter your Last Name.");
} else if(strlen($lastName) > 45){
    echo ("Last Name must have less than 45 characters.");
}else if(empty($email)){
    echo ("Please enter your Email Address.");
}else if(strlen($email) > 100){
    echo ("Email must have less than 100 characters.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email Address");
}else if(empty($password)){
    echo ("Please enter your Password.");
}else if(strlen($password)<5 || strlen($password)>20){
    echo ("Password length must be between 5 - 20 characters.");
} else if (empty($mobile)) {
    echo "Please enter your Mobile Number.";
} else if (strlen($mobile) < 11) {
    echo "Mobile number must not be less than 11 characters.";
} else if (!preg_match("/^\+234[0-9]{10}$/", $mobile)) {
    echo "Invalid Mobile Number.";
}else{
        $rs = Database::search("SELECT * FROM `users` WHERE `email`='".$email."' OR 
        `mobile`='".$mobile."'"); 
        $n = $rs->num_rows;
    
        if($n > 0){
            echo ("User with the same Mobile Number or Email already exists.");
        }else{
    
            $d = new DateTime();
            $tz = new DateTimeZone("Africa/Lagos");
            $d->setTimezone($tz);
            $date = $d->format("Y-m-d H:i:s");
    
            Database::iud("INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `mobile`, `joined_date`, `status`, `gender_id`) VALUES (
                '".$firstName."',
                '".$lastName."',
                '".$email."',
                '".$password."',
                '".$mobile."',
                '".$date."',
                '1',
                '".$gender."'
            )");
            
    
            echo ("success");
        }
}
?>