<!-- Modal Info -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Info Canje</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            fhOrden: <span>date</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Calle <span>calle</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Colonia <span>Colonia</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Ciudad <span>Ciudad</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Estado <span>Estado</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            CP <span>cp</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pais <span>Pais</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Telefono <span>telefono</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Email <span>email</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            PO <span>po</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Atencion <span>Atencion</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Company <span>Company</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Cantidad <span>Cantidad</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            codPremio <span>codPremio</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            NombrePremio <span>NombrePremio</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Stock <span>Stock</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Programacion <span>Programacion</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Envio <span>Envio</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Comentario <span>Comentario</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Guia <span>guia</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Status <span>status</span>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
                </div>
            </div>
        </div>
    </div>

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