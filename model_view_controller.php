<?php

include_once("config.php");

function get_user_password($username){
    $sql = "SELECT password FROM users WHERE Username = \"$username\"";
    $result = connect_to_db("user_info")->query($sql);
    if($result){
    return $result;
    }
    else {
        echo connect_to_db("user_info")->error;
    }

}
?>
