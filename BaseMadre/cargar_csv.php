<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <title>Cargar archivo</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Cargar archivo</h2>
        <form action="./procesar_csv.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="archivo_excel" id="archivo_excel" accept=".xlsx, .xls">
  <button type="submit" class="btn btn-success mt-2">Cargar archivo</button>
</form>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
