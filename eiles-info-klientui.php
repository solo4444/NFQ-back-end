<?php
include 'model_view_controller.php';
if(isset($_GET["vardas"]) && isset($_GET["pavarde"])){
$pLaikas = get_waiting_time($row["Specialistas"],$_GET["vardas"], $_GET["pavarde"]);
$results = get_eiles_info_by_customer($_GET["vardas"], $_GET["pavarde"]);
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
  <div class="col border-right text-center">
    Kiek liko laiko
  </div>
  <div class="col text-center">
    Veiksmai
  </div>
</div>';
while($row = $results->fetch_assoc()){

  //print_r($row["Vardas"]);
  echo '
  <div class="row eiles-card-info border">
    <div class="col border-right text-center vardas">
      '.$row["Vardas"].'
    </div>
    <div class="col border-right text-center pavarde">
      '.$row["Pavarde"].'
    </div>
    <div class="col border-right text-center">
      '.$row["Laikas"].'
    </div>
    <div class="col border-right text-center">
      '.$row["Specialistas"].'
    </div>
    <div class="col border-right text-center">
      '.$row["PLaikas"].'
    </div>
    <div class="col text-center d-inline-block">
    <button class="btn btn-primary pavelinti" type="submit">Pavėlinti</button>
    <button class="btn btn-danger atsaukti" type="submit">Atšaukti</button>
    </div>
  </div>';

}
}
 ?>
