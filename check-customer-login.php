<?php
if(isset($_POST["Name"]) && isset($_POST["Surname"]) && isset($_POST["Pin"])) {

    include_once ("model_view_controller.php");
    $result = get_customer_pin($_POST["Name"], $_POST["Surname"]);
    $row = $result->fetch_assoc();

    if($row["pin"] == $_POST["Pin"]){
    echo'true';
   }

    else{
      echo'Netinka pin';
    }
}
else{
  echo 'viskas xujne';
}
 ?>
