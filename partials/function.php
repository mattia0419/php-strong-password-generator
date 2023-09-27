<?php
function generate_password($length_password, $array_chars){
    $password = "";
    for($i = 0; $i < $length_password; ++$i){
        
        $casual_number = rand(0, 68);
        $char = $array_chars[$casual_number];
        $password = $password.$char;
    }

    return $password;
};
?>