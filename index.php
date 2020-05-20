<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Culqi Test</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />

</head>

<body>


  <div class="container-fluid">
    <div class="view-payment">
      <div class="header">
        <div class="logo">
          <img src="assests/logo.png" alt="">

        </div>

      </div>

      <div class="body">

        <form id="myForm">
          <div class="form-group">
            <label for="FormControlInput1">DNI</label>
            <input type="number" class="form-control" id="formControlDni" placeholder="">

            <label for="FormControlInput1">Apellido y nombre</label>
            <input type="text" class="form-control" id="formControlName" placeholder="">

            <label for="FormControlSelect1">Conceptos</label>
            <select class="form-control" id="formControlConcept">
              <option value="100">MATRICULA- S/100</option>
              <option value="150">PENSION MARZO- S/150</option>
              <option value="150">PENSION ABRIL S/150</option>
              <option value="150">PENSION MAYO S/150</option>
              <option value="150">PENSION JUNIO S/150</option>
              <option value="150">PENSION JULIO S/150</option>
              <option value="150">PENSION AGOSTO S/150</option>
              <option value="150">PENSION SETIEMBRE S/150</option>
              <option value="150">PENSION OCTUBRE S/150</option>
              <option value="150">PENSION NOVIEMBRE S/150</option>
              <option value="150">PENSION DICIEMBRE S/150</option>
            </select>
            <label for="FormControlTextarea1"> Comentarios</label>
            <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
            <div class="alert alert-danger" role="alert">
              Eror! Verifique llenar los datos
            </div>
            <div class="button">
              <button id="miBoton" type="submit" class="btn btn-primary">PAGAR </button>
            </div>

          </div>
        </form>

      </div>
    </div>
  </div>

  <?php

  ?>

  <script src="https://checkout.culqi.com/js/v3"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    $(document).ready(function(e) {

      $('.alert').hide();


      $('#formControlConcept').change(function(e) {
        console.log(e);
      });
      var controlDni = $('#formControlDni').val();
      var controlName = $('#formControlName').val();
      var controlConcept = $('#formControlConcept option:selected').text();
      var mount = $('#formControlConcept').val() + '00';

      Culqi.publicKey = 'pk_live_N6wX3TYVGZIZ4VDB';
      $('#miBoton').on('click', function(e) {

        if (controlDni || controlName) {

          console.log(controlDni, controlName, controlConcept);
          Culqi.settings({
            title: 'Montesori Villa',
            currency: 'PEN',
            description: controlConcept,
            amount: mount
          });
          Culqi.open();
          $('.alert').hide();
          e.preventDefault();
        } else {

          $('.alert').show();

        }

      });


      function culqi() {
        console.log(Culqi);
        if (Culqi.token) {
          var token = Culqi.token.id;
          var email = Culqi.token.email;

          console.log(token, email);
          var data = {
            producto: controlConcept,
            precio: mount,
            token: token,
            email: Culqi.token.email
          };

          var url = "functions.php";

          $.post(url, data, function(res) {
            alert('Pago ' + res + '.');
          });
        } else {
          alert("algo salio mal");
          console.log(Culqi.error);

        }


      }




    });
  </script>



</body>

</html>
