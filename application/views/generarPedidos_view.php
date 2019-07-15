        <div class="row mt-5">
            <div class="col-7">
                <h1>Generar pedidos</h1>
            </div>
            <div class="col-5"><label for="folio"><strong>Folio:</strong> </label><span>0000</span></div>
        </div>
        <div class="row mt-5">
            <div class="col-7">
                <form class="form-inline">
                    <div class="form-group mb-2">
                        <label for="staticEmail2" class="form-control-plaintext"><strong>Proveedor:</strong></label>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" id="proveedor">
                    </div>
                    <button type="button" class="btn btn-dark mb-2" data-toggle="modal" data-target="#modalPedidos"><i class="fas fa-binoculars"></i> Buscar proveedor</button>
                </form>
            </div>
            <div class="col-5">
                <label for="detalles"><strong>Detalles:</strong></label> <span>Lorem, ipsum.</span>
                <label for="detalles"><strong>Total:</strong></label> <span>$10.00.</span>
                <button type="button" class="btn btn-outline-dark"><i class="fas fa-save"></i> Guardar</button>
                <button type="button" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i> Cancelar</button>
            </div>
        </div>
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Cantidad</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio Unitario</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">IVA</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>45</td>
                    <td>89</td>
                    <td>.5</td>
                    <td>89</td>
                    <td>89</td>
                </tr>
            </tbody>
        </table>