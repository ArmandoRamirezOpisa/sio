<h1>Inventario Fisico</h1>
        <div class="row mt-5">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="fechaInventario">Fecha Inventario</label>
                        <input type="date" class="form-control" id="date" aria-describedby="date">
                    </div>
                    <button type="submit" class="btn btn-dark"><i class="fas fa-eye"></i> Ver inventario</button>
                </form>
            </div>
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">inventario Fisico:</label>
                        <input type="text" class="form-control" id="inventarioFisico" aria-describedby="inventarioFisico">
                    </div>
                    <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i> Buscar codPremio</button>
                </form>
            </div>
            <div class="col">
                <button type="button" class="btn btn-outline-success"><i class="fas fa-file-excel"></i> Exportar</button>
            </div>
        </div>
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">codPremio</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">3390</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>