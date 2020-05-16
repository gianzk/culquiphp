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
    <form>
      <div class="form-group">
        <label for="FormControlInput1">Email</label>
        <input type="email" class="form-control" id="FormControlInput1" placeholder="name@.example.com">
      </div>
      <div class="form-group">
        <label for="FormControlSelect1">Precios</label>
        <select class="form-control" id="FormControlSelect1">
          <option>10</option>
          <option>20</option>
          <option>30</option>
          <option>40</option>
          <option>50</option>
        </select>
      </div>

      <div class="form-group">
        <label for="FormControlTextarea1"> textarea</label>
        <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
      </div>
      <button id="miBoton" type="submit" class="btn btn-primary">COMPRAR</button>

    </form>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/index.js"></script>

</body>

</html>
