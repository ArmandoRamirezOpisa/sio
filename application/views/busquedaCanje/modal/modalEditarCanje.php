<!-- Modal Edit -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalEdit" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar informacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="folioCanje">Folio Canje:</label>
                            <input type="text" class="form-control" id="folioCanje" aria-describedby="folioCanje" placeholder="Folio Canje">
                        </div>
                        <div class="form-group">
                            <label for="idParticipante">id Participante</label>
                            <input type="text" class="form-control" id="idParticipante" placeholder="id Participante">
                        </div>
                        <div class="form-group">
                            <label for="nombreParticipante">Nombre Participante</label>
                            <input type="text" class="form-control" id="nombreParticipante" placeholder="Nombre Participante">
                        </div>
                        <div class="form-group">
                            <label for="atencion">Atencion</label>
                            <input type="text" class="form-control" id="atencion" placeholder="Atencion">
                        </div>
                        <div class="form-group">
                            <label for="tel">Telefono</label>
                            <input type="tel" class="form-control" id="telefono" placeholder="Telefono">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control" id="company" placeholder="Company">
                        </div>
                        <div class="form-group">
                            <label for="codPrograma">Cod Programa</label>
                            <input type="text" class="form-control" id="codPrograma" placeholder="Cod Programa">
                        </div>
                        <div class="form-group">
                            <label for="calle">Calle</label>
                            <input type="text" class="form-control" id="calle" placeholder="Calle">
                        </div>
                        <div class="form-group">
                            <label for="colonia">Colonia</label>
                            <input type="text" class="form-control" id="colonia" placeholder="Colonia">
                        </div>
                        <div class="form-group">
                            <label for="cp">CP</label>
                            <input type="text" class="form-control" id="cp" placeholder="CP">
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" placeholder="ciudad">
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" id="idParticipante" placeholder="Estado">
                        </div>
                        <hr>
                        <label for="infoCajeDetalle">Informacion Canje Detalle</label>
                        <div class="form-group">
                            <label for="mensajeriaCanje">Mensajeria canje detalle</label>
                            <select name="detalleMensajeria" id="detalleMensajeria" class="form-control">
                                <option>OPI</option>
                                <option>Estafeta</option>
                                <option>Fedex</option>
                                <option>UPS</option>
                                <option>Tres Guerras</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="codPremio">Cod Premio</label>
                            <input type="text" class="form-control" id="codPremio" placeholder="Cod Premio">
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad" placeholder="Cantidad">
                        </div>
                        <div class="form-group">
                            <label for="noGuia">No. Guia</label>
                            <input type="text" class="form-control" id="noGuia" placeholder="No. guia">
                        </div>
                        <div class="form-group">
                            <label for="reenvio">Reenvio</label>
                            <select class="form-control" id="reenvio">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reenvioComentario">Reenvio Comentario</label>
                            <textarea id="reenvioComentario" class="form-control" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancelar</button>
                    <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Guardar</button>
                </div>
            </div>
        </div>
    </div>