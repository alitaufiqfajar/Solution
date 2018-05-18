<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];

    function validate($username, $email, $phone){
        if (preg_match('/^[a-z]+$/', $username)===0){
            $is_username_valid = false;
        }else{
            $is_username_valid = true;
        }
        if (preg_match('/^[a-z]+@[a-z]+\.[a-z]+$/', $email)===0) {
            $is_email_valid = false;
        } else {
            $is_email_valid = true;
        }
    
        if (preg_match(('/^(^\+\s?|^0)(\d{3,4}-?){2}\d{3,4}$/'), $phone)===0) {
            $is_phone_valid = false;
        } else {
            $is_phone_valid = true;
        }
        $arrayResult = array(
            "username" => $is_username_valid,
            "email" => $is_email_valid,
            "phone" => $is_phone_valid
        );
        return json_encode($arrayResult);
    }
    
    echo validate($username, $email, $phone);
?>