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
    				<label for="folioCanje" class="col-sm-2 col-form-label">Folio Canje: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="folioCanje" disabled value="<?php if($dataEditarCanje[0]['folioCanje'] != 'NULL'){ echo $dataEditarCanje[0]['folioCanje'];} ?>" placeholder="Folio Canje">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="calle" class="col-sm-2 col-form-label">Calle: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="calle" value="<?php if($dataEditarCanje[0]['calle'] != 'NULL'){ echo $dataEditarCanje[0]['calle'];} ?>">
    				</div>
  				</div>
			</div>
    		<div class="w-100"></div>
    		<div class="col">
				<div class="form-group row">
    				<label for="idParticipante" class="col-sm-2 col-form-label">idParticipante: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="idParticipante" disabled value="<?php if($dataEditarCanje[0]['idParticipante'] != 'NULL'){ echo $dataEditarCanje[0]['idParticipante'];} ?>">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="colonia" class="col-sm-2 col-form-label">Colonia: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="colonia" value="<?php if($dataEditarCanje[0]['colonia'] != 'NULL'){ echo $dataEditarCanje[0]['colonia'];} ?>">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="nombreParticipante" class="col-sm-2 col-form-label">Nombre: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="nombre" value="<?php if($dataEditarCanje[0]['nombre'] != 'NULL'){ echo $dataEditarCanje[0]['nombre'];} ?>">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="cp" class="col-sm-2 col-form-label">CP: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="cp" value="<?php if($dataEditarCanje[0]['cp'] != 'NULL'){ echo $dataEditarCanje[0]['cp'];} ?>">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="atencion" class="col-sm-2 col-form-label">Atencion: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="atencion" value="<?php if($dataEditarCanje[0]['atencion'] != 'NULL'){ echo $dataEditarCanje[0]['atencion'];} ?>">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="ciudad" class="col-sm-2 col-form-label">Ciudad: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="ciudad" value="<?php if($dataEditarCanje[0]['ciudad'] != 'NULL'){ echo $dataEditarCanje[0]['ciudad'];} ?>">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="telefono" class="col-sm-2 col-form-label">Telefono: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="telefono" value="<?php if($dataEditarCanje[0]['telefono'] != 'NULL'){ echo $dataEditarCanje[0]['telefono'];} ?>">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="estado" class="col-sm-2 col-form-label">Estado: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="estado" value="<?php if($dataEditarCanje[0]['estado'] != 'NULL'){ echo $dataEditarCanje[0]['estado'];} ?>">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="Email" class="col-sm-2 col-form-label">Email: </label>
    				<div class="col-sm-10">
      					<input type="email" class="form-control" id="email" value="<?php if($dataEditarCanje[0]['eMail'] != 'NULL'){ echo $dataEditarCanje[0]['eMail'];} ?>">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="company" class="col-sm-2 col-form-label">Company: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="company" value="<?php if($dataEditarCanje[0]['company'] != 'NULL'){ echo $dataEditarCanje[0]['company'];} ?>">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="codPrograma" class="col-sm-2 col-form-label">CodPrograma: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="codPrograma" value="<?php if($dataEditarCanje[0]['programaNombre'] != 'NULL'){ echo $dataEditarCanje[0]['programaNombre'];} ?>">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="comentarios" class="col-sm-2 col-form-label">Comentarios: </label>
    				<div class="col-sm-10">
						<textarea class="form-control" id="comentarios" rows="3"><?php if($dataEditarCanje[0]['comentarios'] != 'NULL'){ echo $dataEditarCanje[0]['comentarios'];} ?></textarea>
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
