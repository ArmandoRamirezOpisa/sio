        <h1>Visualizar canjes por facturar</h1>
        <div class="row">
            <div class="col-4">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>

                <button type="button" class="btn btn-outline-success"><i class="fas fa-file-excel"></i> Exportar</button>

                <label for="totalCanjes" class="btnStockDetail"><strong>Total de canjes:</strong></label><span>00</span>
                <label for="icentivesDelivered"><strong>Incentives Delivered:</strong></label>
                <label for="shipping"><strong>Shipping:</strong></label>
                <label for="vat"><strong>VAT:</strong></label>
                <label for="totalFactura"><strong>Total Factura:</strong></label>

                <button type="button" class="btn btn-outline-dark"><i class="fas fa-money-bill"></i> Generar factura</button>
            </div>
            <div class="col-8">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Redemtion Confirmation Number</th>
                            <th scope="col">RAS Redemtion ID</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Participant Name</th>
                            <th scope="col">Ver mas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">t4</td>
                            <td>2417</td>
                            <td>10/10/10</td>
                            <td>Armando</td>
                            <td><a href="#" class="info-data" data-toggle="modal" data-target="#modalViewCanjes"><i class="fas fa-info-circle"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>