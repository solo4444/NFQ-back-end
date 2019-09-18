<?php
include 'model_view_controller.php';
if(isset($_POST["Vardas"]) && isset($_POST["Pavarde"])){
  $sql = "DELETE FROM laukiantys WHERE Vardas = '$_POST["Vardas"]' Pavarde = '$_POST["Pavarde"]'";
 connect_to_db("eiles_info")->query($sql);
}
 ?>
