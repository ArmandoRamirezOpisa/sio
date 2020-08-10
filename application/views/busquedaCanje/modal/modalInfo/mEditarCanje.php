                    <?php if($dataEditarCanje){ ?>
                    <form>
                        <div class="form-group">
                            <label for="folioCanje">Folio Canje:</label>
                            <input type="text" class="form-control" id="folioCanje" aria-describedby="folioCanje" placeholder="Folio Canje" value="<?php if($dataEditarCanje[0]['folioCanje'] != 'NULL'){ echo $dataEditarCanje[0]['folioCanje'];} ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="idParticipante">idParticipante</label>
                            <input type="text" class="form-control" id="idParticipante" placeholder="idParticipante" value="<?php if($dataEditarCanje[0]['idParticipante'] != 'NULL'){ echo $dataEditarCanje[0]['idParticipante']; } ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre Participante</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" value="<?php if($dataEditarCanje[0]['nombre'] != 'NULL'){ echo $dataEditarCanje[0]['nombre']; } ?>" disabled>
                        </div>
						<div class="form-group">
                            <label for="atencion">Atencion</label>
                            <input type="text" class="form-control" id="atencion" placeholder="Atencion" value="<?php if($dataEditarCanje[0]['atencion'] != 'NULL'){ echo $dataEditarCanje[0]['atencion']; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" placeholder="telefono" value="<?php if($dataEditarCanje[0]['telefono'] != 'NULL'){ echo $dataEditarCanje[0]['telefono'];} ?>">
                        </div>
                        <div class="form-group">
                            <label for="eMail">Correo Electronico</label>
                            <input type="text" class="form-control" id="eMail" placeholder="Correo Electronico" value="<?php if($dataEditarCanje[0]['eMail'] != 'NULL'){ echo $dataEditarCanje[0]['eMail']; } ?>">
                        </div>
						<div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control" id="company" placeholder="Company" value="<?php if($dataEditarCanje[0]['company'] != 'NULL'){ echo $dataEditarCanje[0]['company']; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="Calle">Calle</label>
                            <input type="text" class="form-control" id="calle" placeholder="Calle" value="<?php if($dataEditarCanje[0]['calle'] != 'NULL'){ echo $dataEditarCanje[0]['calle']; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="colonia">colonia</label>
                            <input type="text" class="form-control" id="colonia" placeholder="colonia" value="<?php if($dataEditarCanje[0]['colonia'] != 'NULL'){ echo $dataEditarCanje[0]['colonia']; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="cp">Codigo Postal</label>
                            <input type="text" class="form-control" id="cp" placeholder="Codigo Postal" value="<?php if($dataEditarCanje[0]['cp'] != 'NULL'){ echo $dataEditarCanje[0]['cp']; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" value="<?php if($dataEditarCanje[0]['ciudad'] != 'NULL'){ echo $dataEditarCanje[0]['ciudad']; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" id="estado" placeholder="Estado" value="<?php if($dataEditarCanje[0]['estado'] != 'NULL'){ echo $dataEditarCanje[0]['estado']; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="comentarios">Comentarios</label>
                            <input type="text" class="form-control" id="comentarios" placeholder="Comentarios" value="<?php if($dataEditarCanje[0]['comentarios'] != 'NULL'){ echo $dataEditarCanje[0]['comentarios']; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="programaNombre">Programa</label>
                            <input type="text" class="form-control" id="programaNombre" placeholder="Programa" value="<?php if($dataEditarCanje[0]['programaNombre'] != 'NULL'){ echo $dataEditarCanje[0]['programaNombre']; } ?>">
                        </div>
						<hr>
						<br>
						<h3>Informacion Canje Detalle</h3>
						<div class="form-group">
    						<label for="mensajeria">Mensajeria Canje Detalle</label>
    						<select class="form-control" id="mensajeria">
      							<option>Selecciona una mensajeria:</option>
								<option>mensajeria</option>
    						</select>
  						</div>
						<div class="form-group">
                        	<label for="codPremio">Codigo de premio</label>
                            <input type="text" class="form-control" id="codPremio" placeholder="codigo de Premio">
                        </div>
						<div class="form-group">
                        	<label for="cantidad">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad" placeholder="Cantidad">
                        </div>
						<div class="form-group">
                        	<label for="noGuia">Numero de Guia</label>
                            <input type="text" class="form-control" id="noGuia" placeholder="Numero de Guia">
                        </div>
						<div class="form-group">
    						<label for="reenvio">Reenvio</label>
    						<select class="form-control" id="exampleFormControlSelect1">
      							<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
    						</select>
  						</div>
						<div class="form-group">
							<label for="ComentarioReenvio">Comentario Reenvio</label>
							<textarea class="form-control" id="comentarioReenvio" rows="3" disabled></textarea>
  						</div>
                    </form>
                    <?php } ?>
