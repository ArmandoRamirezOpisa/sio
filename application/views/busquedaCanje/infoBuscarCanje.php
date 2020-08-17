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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark contentAnimated">
        <a id="homeSIO" class="navbar-brand" href="#">
            <img src="../../assets/img/sioLogo.jpg" width="50" height="30" class="d-inline-block align-top" alt="">
        </a>
    </nav>
	<div class="container contentAnimated">
		<h1>Información Canje</h1>
		<div class="row">
    		<div class="col">
				<div class="form-group row">
    				<label for="calle" class="col-sm-2 col-form-label">Calle: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="folioCanje" value="<?php echo $moreDataSearch[0]['Calle']; ?>" placeholder="Folio Canje">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="Colonia" class="col-sm-2 col-form-label">Colonia: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="colonia" value="<?php echo $moreDataSearch[0]['Colonia']; ?>" placelholder="Colonia">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="ciudad" class="col-sm-2 col-form-label">Ciudad: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="ciudad" value="<?php echo $moreDataSearch[0]['Ciudad']; ?>" placeholder="Ciudad">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="Estado" class="col-sm-2 col-form-label">Estado: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="estado" value="<?php echo $moreDataSearch[0]['Estado']; ?>" placelholder="Estado">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="cp" class="col-sm-2 col-form-label">CP: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="cp" value="<?php echo $moreDataSearch[0]['cp']; ?>" placeholder="cp">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="Pais" class="col-sm-2 col-form-label">Pais: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="pais" value="<?php echo $moreDataSearch[0]['Pais']; ?>" placelholder="Pais">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="Telefono" class="col-sm-2 col-form-label">Telefono: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="telefono" value="<?php echo $moreDataSearch[0]['Telefono']; ?>" placeholder="Telefono">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="eMail" class="col-sm-2 col-form-label">eMail: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="eMail" value="<?php echo $moreDataSearch[0]['eMail']; ?>" placelholder="Correo Electronico">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="PO" class="col-sm-2 col-form-label">PO: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="po" value="<?php echo $moreDataSearch[0]['PO']; ?>" placeholder="PO">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="Atencion" class="col-sm-2 col-form-label">Atencion: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="atencion" value="<?php echo $moreDataSearch[0]['Atencion']; ?>" placelholder="Atencion">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="Company" class="col-sm-2 col-form-label">Company: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="company" value="<?php echo $moreDataSearch[0]['Company']; ?>" placeholder="Company">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="Cantidad" class="col-sm-2 col-form-label">Cantidad: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="cantidad" value="<?php echo $moreDataSearch[0]['Cantidad']; ?>" placelholder="Atencion">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="Empresa" class="col-sm-2 col-form-label">Empresa: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="empresa" value="<?php echo $moreDataSearch[0]['Empresa']; ?>" placeholder="Empresa">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="Stock" class="col-sm-2 col-form-label">Stock: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="stock" value="<?php echo $moreDataSearch[0]['Stock']; ?>" placelholder="Stock">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="Programacion" class="col-sm-2 col-form-label">Programacion: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="programacion" value="<?php echo $moreDataSearch[0]['Programacion']; ?>" placeholder="Programacion">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="Envio" class="col-sm-2 col-form-label">Envio: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="envio" value="<?php echo $moreDataSearch[0]['Envio']; ?>" placelholder="Envio">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="Comentario" class="col-sm-2 col-form-label">Comentario: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="comentario" value="<?php echo $moreDataSearch[0]['Comentario']; ?>" placeholder="Comentario">
    				</div>
  				</div>
			</div>
    		<div class="col">
				<div class="form-group row">
    				<label for="Guia" class="col-sm-2 col-form-label">Guia: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="guia" value="<?php echo $moreDataSearch[0]['Guia']; ?>" placelholder="Guia">
    				</div>
  				</div>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<div class="form-group row">
    				<label for="Status" class="col-sm-2 col-form-label">Status: </label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control" id="status" value="<?php echo $moreDataSearch[0]['Status']; ?>" placeholder="Status">
    				</div>
  				</div>
			</div>
			<div class="col">
				<div class="form-group row">
    				<div class="col-sm-10">
						<button type="button" class="btn btn-dark"><i class="fas fa-save"></i> Guardar</button>
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
