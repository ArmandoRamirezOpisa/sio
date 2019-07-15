        <h1>Estatus de pedido</h1>
        <div class="row mt-5">
            <div class="col"><label for="de"><strong>De:</strong></label><input type="date" class="form-control" id="date" aria-describedby="date"></div>
            <div class="col"><label for="a"><strong>A:</strong></label><input type="date" class="form-control" id="date" aria-describedby="date"></div>
            <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-search"></i> Buscar</button></div>
            <div class="col"><button type="button" class="btn btn-outline-success"><i class="fas fa-file-excel"></i> Exportar</button></div>
        </div>
        <div class="row mt-5">
            <div class="col"><label for="cancelados"><strong>Cancelados: </strong></label><span>00</span></div>
            <div class="col"><label for="recibidos"><strong>Recibidos: </strong></label><span>00</span></div>
            <div class="col"><label for="cancelados"><strong>En transito: </strong></label><span>00</span></div>
        </div>
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Folio</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">codPremio</th>
                    <th scope="col">Ver mas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>10/10/10</td>
                    <td>123</td>
                    <td>Armando</td>
                    <td>864</td>
                    <td><a href="#" class="info-data" data-toggle="modal" data-target="#modalStatusData"><i class="fas fa-info-circle"></i></a></td>
                </tr>
            </tbody>
        </table>