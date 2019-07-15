        <h1>Listado de pedidos</h1>
        <div class="row mt-5">
            <div class="col-6">
                <form>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Fecha inicio:</strong></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control-plaintext" id="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"><strong>Fecha fin:</strong></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date2">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-search"></i> Buscar</button></div>
                    <div class="col"><button type="button" class="btn btn-outline-success"><i class="fas fa-file-excel"></i> Exportar</button></div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Folio</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">CodPremio</th>
                    <th scope="col">Ver mas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>10/10/10</td>
                    <td>159</td>
                    <td>@mdo</td>
                    <td>3390</td>
                    <td><a href="#" class="info-data" data-toggle="modal" data-target="#modalList"><i class="fas fa-info-circle"></i></a></td>
                </tr>
            </tbody>
        </table>