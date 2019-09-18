<?php
include_once ("model_view_controller.php");

$conn = connect_to_db('eiles_info');
$conn1 = connect_to_db('user_info');

if(isset($_POST["Name"])){
    $name = mysqli_real_escape_string($conn,$_POST["Name"]);
}
if(isset($_POST["Surname"])){
    $surname = mysqli_real_escape_string($conn,$_POST["Surname"]);
}
if(isset($_POST["Specialist"])){
    $specialist = mysqli_real_escape_string($conn,$_POST["Specialist"]);
}
date_default_timezone_set("Europe/Vilnius");
//$time = date("Y-m-d-h-i-s");

$sql = "INSERT INTO laukiantys (Vardas, Pavarde, Specialistas) VALUES ('$name' , '$surname', '$specialist')";

$sql_check_name = "SELECT Vardas FROM eiles_info";
$sql_check_surname = "SELECT Pavarde FROM eiles_info";
$sql_check_specialist = "SELECT username FROM users";

if($conn->query($sql_check_name) === TRUE){
  if($conn->query($sql_check_username) === TRUE){
      echo "Toks klientas jau eilėje";
  }
}
else if($conn1->query($sql_check_specialist) === FALSE){
  echo 'Tokio specialisto nera!';
}
else if ($conn->query($sql) === TRUE) {
    echo $name . " " . $surname . " sėkmingai įrašytas į eilę";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn1->close();
$conn->close();
 ?>
