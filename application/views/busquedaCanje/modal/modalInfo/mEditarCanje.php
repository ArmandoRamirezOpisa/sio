                    <?php if($dataEditarCanje){ ?>
                    <form>
                        <div class="form-group">
                            <label for="codPrograma">Cod Programa</label>
                            <input type="text" class="form-control" id="codPrograma" placeholder="Cod Programa" value="<?php echo $dataEditarCanje[0]['codPrograma']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="folioCanje">Folio Canje:</label>
                            <input type="text" class="form-control" id="folioCanje" aria-describedby="folioCanje" placeholder="Folio Canje" value="<?php echo $dataEditarCanje[0]['FolioCanje']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="empresa">Empresa</label>
                            <input type="text" class="form-control" id="empresa" placeholder="Empresa" value="<?php echo $dataEditarCanje[0]['Empresa']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nombreParticipante">Nombre Participante</label>
                            <input type="text" class="form-control" id="nombreParticipante" placeholder="Nombre Participante" value="<?php echo $dataEditarCanje[0]['Nombre']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="fhOrden">Fecha Orden</label>
                            <input type="text" class="form-control" id="fhOrden" placeholder="Fecha Orden" value="<?php echo $dataEditarCanje[0]['fhOrden']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="calle">Calle</label>
                            <input type="text" class="form-control" id="calle" placeholder="Calle" value="<?php echo $dataEditarCanje[0]['Calle']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="colonia">Colonia</label>
                            <input type="text" class="form-control" id="colonia" placeholder="Colonia" value="<?php echo $dataEditarCanje[0]['Colonia']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" value="<?php echo $dataEditarCanje[0]['Ciudad']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" id="estado" placeholder="Estado" value="<?php echo $dataEditarCanje[0]['Estado']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="cp">Codigo Postal</label>
                            <input type="text" class="form-control" id="cp" placeholder="Codigo Postal" value="<?php echo $dataEditarCanje[0]['cp']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pais">Pais</label>
                            <input type="text" class="form-control" id="pais" placeholder="Pais" value="<?php echo $dataEditarCanje[0]['Pais']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" placeholder="Telefono" value="<?php echo $dataEditarCanje[0]['Telefono']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="eMail">Correo Electronico</label>
                            <input type="text" class="form-control" id="eMail" placeholder="Correo Electronico" value="<?php echo $dataEditarCanje[0]['eMail']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="PO">PO</label>
                            <input type="text" class="form-control" id="po" placeholder="PO" value="<?php echo $dataEditarCanje[0]['PO']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Atencion">Atencion</label>
                            <input type="text" class="form-control" id="atencion" placeholder="Atencion" value="<?php echo $dataEditarCanje[0]['Atencion']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Company">Company</label>
                            <input type="text" class="form-control" id="company" placeholder="Company" value="<?php echo $dataEditarCanje[0]['Company']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Cantidad">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad" placeholder="Cantidad" value="<?php echo $dataEditarCanje[0]['Cantidad']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="codPremio">Codigo de Premio</label>
                            <input type="text" class="form-control" id="codPremio" placeholder="Codigo de premio" value="<?php echo $dataEditarCanje[0]['codPremio']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="NombrePremio">Nombre del premio</label>
                            <input type="text" class="form-control" id="nombrePremio" placeholder="Nombre del premio" value="<?php echo $dataEditarCanje[0]['NombrePremio']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Stock">Stock</label>
                            <input type="text" class="form-control" id="stock" placeholder="Stock" value="<?php echo $dataEditarCanje[0]['Stock']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Programacion">Programacion</label>
                            <input type="text" class="form-control" id="programacion" placeholder="Programacion" value="<?php echo $dataEditarCanje[0]['Programacion']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Envio">Envio</label>
                            <input type="text" class="form-control" id="envio" placeholder="Envio" value="<?php echo $dataEditarCanje[0]['Envio']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Comentario">Comentario</label>
                            <input type="text" class="form-control" id="comentario" placeholder="Comentario" value="<?php echo $dataEditarCanje[0]['Comentario']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Guia">Guia</label>
                            <input type="text" class="form-control" id="guia" placeholder="Guia" value="<?php echo $dataEditarCanje[0]['Guia']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <input type="text" class="form-control" id="Status" placeholder="Status" value="<?php echo $dataEditarCanje[0]['Status']; ?>">
                        </div>
                    </form>
                    <?php } ?>