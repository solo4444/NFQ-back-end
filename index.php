<!DOCTYPE html>
<?php session_start();?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include"styles.php"; ?>

  </head>
  <body>

    <?php include 'header.php'; ?>
    <?php // TODO: panaudoti get ir limit kai norima rodyti daugiau arba maziau turinio, sukurti pinus per admina ?>
    <div class="container">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="10">
        <label class="form-check-label" for="inlineRadio1">1</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="15">
        <label class="form-check-label" for="inlineRadio2">5</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="30">
        <label class="form-check-label" for="inlineRadio3">10</label>
      </div>
      <button type="submit" class="btn btn-warning mb-2 refresh">Refresh</button>
      <script type="text/javascript">
      // $(document).ready(function() {
      //
      //   $(document).on("click", ".refresh", function() {
      //     var kiek = $('input[name=inlineRadioOptions]:checked').val();
      //     $.ajax({
      //           type: 'GET',
      //           url: 'eiles-info.php',
      //           data: {Kiek: kiek},
      //                success: function(response) {
      //                  alert(response);
      //                  //location.href = "index.php";
      //                 }
      //           });
      //   })
      // })
      </script>
        <?php  include 'eiles-info.php'; ?>

    </div>

    <footer>

    </footer>
  </body>
</html>
