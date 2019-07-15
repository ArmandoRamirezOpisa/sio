        <h1>Inventario de Articulos</h1>
        <div class="row mt-5">
            <div class="col">
                <button type="button" class="btn btn-outline-dark"><i class="fas fa-newspaper"></i> Articulos</button>
                <button type="button" class="btn btn-outline-dark"><i class="fas fa-shipping-fast"></i> Existente</button>
            </div>
            <div class="col">
                <form>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"><strong>Historial del articulo:</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="historia">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <button type="button" class="btn btn-outline-success"><i class="fas fa-file-excel"></i> Exportar</button>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ver mas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>10/10/10</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Entrada</td>
                    <td><a href="#" class="info-data" data-toggle="modal" data-target="#modalInventario"><i class="fas fa-info-circle"></i></a></td>
                </tr>
            </tbody>
        </table>