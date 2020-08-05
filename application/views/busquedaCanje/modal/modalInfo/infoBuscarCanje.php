                    <?php if($moreDataSearch){ ?>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Calle">Calle</label>
								<input type="text" class="form-control" id="calleTxt" placeholder="Calle" value="<?php echo $moreDataSearch[0]['Calle']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Colonia">Colonia</label>
								<input type="text" class="form-control" id="coloniaTxt" placeholder="Colonia" value="<?php echo $moreDataSearch[0]['Colonia']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Ciudad">Ciudad</label>
								<input type="text" class="form-control" id="ciudadTxt" placeholder="Ciudad" value="<?php echo $moreDataSearch[0]['Ciudad']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Ciudad">Estado</label>
								<input type="text" class="form-control" id="estadoTxt" placeholder="Estado" value="<?php echo $moreDataSearch[0]['Estado']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="CP">CP</label>
								<input type="text" class="form-control" id="cpTxt" placeholder="CP" value="<?php echo $moreDataSearch[0]['cp']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Pais">Pais</label>
								<input type="text" class="form-control" id="paisTxt" placeholder="Pais" value="<?php echo $moreDataSearch[0]['Pais']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Pais">Telefono</label>
								<input type="text" class="form-control" id="telefonoTxt" placeholder="Telefono" value="<?php echo $moreDataSearch[0]['Telefono']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Email">Email</label>
								<input type="email" class="form-control" id="emailTxt" placeholder="Email" value="<?php echo $moreDataSearch[0]['eMail']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="PO">PO</label>
								<input type="text" class="form-control" id="poTxt" placeholder="PO" value="<?php echo $moreDataSearch[0]['PO']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="atencion">Atencion</label>
								<input type="text" class="form-control" id="atencionTxt" placeholder="Atencion" value="<?php echo $moreDataSearch[0]['Atencion']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Company">Company</label>
								<input type="text" class="form-control" id="companyTxt" placeholder="Company" value="<?php echo $moreDataSearch[0]['Company']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Empresa">Empresa</label>
								<input type="text" class="form-control" id="empresaTxt" placeholder="Empresa" value="<?php echo $moreDataSearch[0]['Empresa']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Stock">Stock</label>
								<input type="text" class="form-control" id="stockTxt" placeholder="Stock" value="<?php echo $moreDataSearch[0]['Stock']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Programacion">Programacion</label>
								<input type="text" class="form-control" id="programacionTxt" placeholder="Programacion" value="<?php echo $moreDataSearch[0]['Programacion']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Envio">Envio</label>
								<input type="text" class="form-control" id="envioTxt" placeholder="Envio" value="<?php echo $moreDataSearch[0]['Envio']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Guia">Guia</label>
								<input type="text" class="form-control" id="guiaTxt" placeholder="Guia" value="<?php echo $moreDataSearch[0]['Guia']; ?>" disabled>
  							</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Status">Status</label>
								<input type="text" class="form-control" id="statusTxt" placeholder="Status" value="<?php echo $moreDataSearch[0]['Status']; ?>" disabled>
  							</div>
                        </li>
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<div class="form-group">
								<label for="Comentario">Comentario</label>
								<textarea class="form-control" id="comentarioTxt" rows="3" disabled><?php echo $moreDataSearch[0]['Comentario']; ?></textarea>
  							</div>
                        </li>
                    </ul>
                    <?php } ?>
