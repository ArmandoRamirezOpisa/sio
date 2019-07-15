        <h1>Recepcion de pedidos</h1>
        <div class="row mt-5">
            <div class="col-6">
                <form class="form-inline">
                    <div class="form-group mb-2">
                        <label for="staticEmail2" class="form-control-plaintext"><strong>Buscar orden:</strong></label>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" id="orden" placeholder="Busca tu orden">
                    </div>
                    <button type="submit" class="btn btn-dark mb-2"><i class="fas fa-search"></i> Buscar</button>
                </form>
                <div class="row">
                    <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-save"></i> Guardar cambios</button></div>
                    <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-pause-circle"></i> Ordenes pendientes</button></div>
                    <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-file-pdf"></i> Crear PDF</button></div>
                    <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-envelope"></i> Enviar mail</button></div>
                </div>
                <div class="row">
                    <div class="col"><label for="contacto"><strong>Contacto:</strong> </label></div>
                    <div class="col"><span>000</span></div>
                </div>
                <div class="row">
                    <div class="col"><label for="email"><strong>Email:</strong> </label></div>
                    <div class="col"><input type="email" class="form-control" id="Email1" aria-describedby="emailHelp"></div>
                </div>
                <div class="row">
                    <div class="col"><label for="direccion"><strong>Direccion:</strong> </label></div>
                    <div class="col"><span>direc</span></div>
                </div>
                <div class="row">
                    <div class="col"><label for="tel"><strong>Telefono:</strong></label></div>
                    <div class="col"><span>00-00-00-00</span></div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col"><strong>Proveedor:</strong> <span>asdf</span></div>
                    <div class="col"><strong>Total global:</strong> <span>$000000</span></div>
                </div>
                <div class="row">
                    <div class="col"><strong>Cod Proveedor:</strong> <span>asdf</span></div>
                    <div class="col"><strong>Total Recibido:</strong> <span>$000000</span></div>
                </div>
                <div class="row">
                    <div class="col"><strong>Fecha de creacion:</strong> <span>00/00/00</span></div>
                    <div class="col"><strong>Plantilla de referencia:</strong></div>
                </div>
                <div class="row">
                    <div class="col"><strong>Orden:</strong> <span>00000000</span></div>
                    <div class="col"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div>
                </div>
            </div>
        </div>
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Service</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Ver mas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Recibido</td>
                    <td>1</td>
                    <td>15</td>
                    <td>15</td>
                    <td><a href="#" class="info-data" data-toggle="modal" data-target="#modalRecepcion"><i class="fas fa-info-circle"></i></a></td>
                </tr>
            </tbody>
        </table>