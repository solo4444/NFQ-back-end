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
function get_eiles_info(){
    $sql = "SELECT Vardas, Pavarde, Laikas, Specialistas,PLaikas FROM laukiantys ORDER BY Laikas ASC";
    $result = connect_to_db("eiles_info")->query($sql);
    if($result){
    return $result;
    }
    else {
        echo connect_to_db("eiles_info")->error;
    }
}
function get_eiles_info_by_specialist($name)
{
  $sql = "SELECT Vardas, Pavarde, Laikas, Specialistas,PLaikas FROM laukiantys WHERE Specialistas = '$name' ORDER BY Laikas ASC";
  $result = connect_to_db("eiles_info")->query($sql);
  if($result){
  return $result;
  }
  else {
      echo connect_to_db("eiles_info")->error;
  }
}

?>
