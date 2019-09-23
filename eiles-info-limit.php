<?php
if(isset($_GET["kiek"]))
{
  if($_GET["kiek"] == 10){
    echo '10';
  }
  else if($_GET["kiek"] == 15){
    echo '15';
  }
  else {
    echo "30";
  }
}
?>
