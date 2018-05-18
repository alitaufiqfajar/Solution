<?php
    function generateRandomString($length = 4) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function serial_number ($sum_of_sn = 300){
        for ($i=1; $i <= $sum_of_sn; $i++){
            $sn = generateRandomString()."-".generateRandomString()."-".generateRandomString()."-".generateRandomString();
            echo "<br>";
            echo "SN ke-$i >>>> ".$sn;            
        }
    }    
    serial_number();
?>