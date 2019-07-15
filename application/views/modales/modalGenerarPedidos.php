    <!-- Modal -->
    <div class="modal fade" id="modalPedidos" tabindex="-1" role="dialog" aria-labelledby="modalPedidosLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buscar Proveedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="opcionesBusqueda">Opciones Busqueda</label>
                            <select class="form-control" id="opcionesBusqueda">
                            <option>Selecciona uno...</option>
                            <option>Nombre Proveedor</option>
                            <option>Codigo de Proveedor</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="buscar">Buscar</label>
                            <input type="text" class="form-control" id="buscar" placeholder="Escribe al proveedor que buscas">
                        </div>
                    </form>
                    <table class="table mt-5">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">codProveedor</th>
                                <th scope="col">NombreProveedor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>777</th>
                                <td>Armando</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancelar</button>
                    <button type="button" class="btn btn-dark"><i class="fas fa-search"></i> Buscar</button>
                </div>
            </div>
        </div>
    </div>