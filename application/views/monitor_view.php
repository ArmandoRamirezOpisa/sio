        <h1>Monitor</h1>
        <div class="row mt-5">
            <div class="col-6 col-md-4">
                <label for="PendientesXRevisar"><strong>Pendientes por revisar:</strong></label>
                <button type="button" class="btn btn-outline-dark"><i class="fas fa-search"></i> Buscar</button>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="busquedaFecha"><strong>Busqueda por Fecha de programacion</strong></label>
                        <input type="date" class="form-control" id="date" aria-describedby="date">
                    </div>
                    <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i> Buscar</button>
                </form>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="date"><strong>De:</strong></label>
                        <input type="date" class="form-control" id="date" aria-describedby="date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><strong>A:</strong></label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <button type="submit" class="btn btn-outline-dark"><i class="fas fa-search"></i> Buscar</button>
                </form>
            </div>
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col">
                        <label for="entregados"><strong class="btnStockDetail">Entregados:</strong></label><span>00</span>
                        <label for="transito"><strong class="btnStockDetail">En transito:</strong></label><span>00</span>
                        <label for="pendientes"><strong class="btnStockDetail">Pendientes:</strong></label><span>34</span>
                    </div>
                    <div class="col">
                        <label for="totalGuias"><strong class="btnStockDetail">Total de Guias:</strong></label><span>25</span>
                    </div>
                    <div class="col"><button type="button" class="btn btn-outline-success"><i class="fas fa-file-excel"></i> Exportar</button></div>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">noGuia</th>
                            <th scope="col">fhEnvio</th>
                            <th scope="col">Estado</th>
                            <th scope="col">FolioCanje</th>
                            <th scope="col">Ver mas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>10/10/1000</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="#" class="info-data" data-toggle="modal" data-target="#modalMonitorData"><i class="fas fa-info-circle"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>