<?php
include 'model_view_controller.php';

$results = get_eiles_info();



echo '<div class="row eiles-card-info border">
  <div class="col border-right text-center">
    Vardas
  </div>
  <div class="col border-right text-center">
    Pavarde
  </div>
  <div class="col border-right text-center">
    Uzregistruotas Laikas
  </div>
  <div class="col border-right text-center">
    Specialistas
  </div>
  <div class="col text-center">
    Prognozuojamas Laikas
  </div>
</div>';
if($results){
while($row = $results->fetch_assoc()){
  //print_r($row["Vardas"]);
  include ("eiles-card.php");

}
}
 ?>
