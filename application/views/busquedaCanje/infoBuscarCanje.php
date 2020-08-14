<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="../../assets/css/styles.css">
	<title>Informacion del Canje</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a id="homeSIO" class="navbar-brand" href="#">
            <img src="../../assets/img/sioLogo.jpg" width="50" height="30" class="d-inline-block align-top" alt="">
        </a>
    </nav>
	<div class="container">
		<h1>Información Canje</h1>
		<div class="row">
    		<div class="col">
				<div class="form-group row">
    				<label for="calle" class="col-sm-2 col-form-label">Calle: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="folioCanje" value="<?php echo $moreDataSearch[0]['Calle']; ?>" disabled placeholder="Folio Canje">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="Colonia" class="col-sm-2 col-form-label">Colonia: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="colonia" value="<?php echo $moreDataSearch[0]['Colonia']; ?>">
    				</div>
  				</div>
			</div>
  		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../assets/js/main.js"></script>
</body>
</html>
