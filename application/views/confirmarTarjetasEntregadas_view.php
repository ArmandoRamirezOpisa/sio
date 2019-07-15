        <h1>Confirmacion de tarjetas entregadas</h1>
        <form>
            <div class="form-group row">
                <label for="tipoBusqueda" class="col-sm-2 col-form-label"><strong>Tipo de busqueda:</strong></label>
                <div class="col-sm-10">
                    <select id="inputState" class="form-control">
                        <option selected>Selecciona una...</option>
                        <option>Nombre</option>
                        <option>Email</option>
                        <option>PO</option>
                        <option>Canje</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="busqueda" class="col-sm-2 col-form-label"><strong>Busqueda:</strong></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" placeholder="Que es estas buscando">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label"><strong>Correo electronico:</strong></label>
                <div class="col-sm-10">
                    <input type="email" readonly class="form-control" id="inputPassword" placeholder="Correo electronico">
                </div>
            </div>
        </form>
        <button type="button" class="btn btn-dark"><i class="fas fa-save"></i> Guardar</button>
        <button type="button" class="btn btn-danger"><i class="fas fa-times-circle"></i> Cancelar</button>
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">CodPrograma</th>
                    <th scope="col">PO</th>
                    <th scope="col">FolioCanje</th>
                    <th scope="col">codPremio</th>
                    <th scope="col">Participante</th>
                    <th scope="col">Ver mas</th>
                    <th scope="col">Agregar Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>41</td>
                    <td>41</td>
                    <td>41</td>
                    <td>41</td>
                    <td>Armando</td>
                    <td><a href="#" class="info-data" data-toggle="modal" data-target="#modalCards"><i class="fas fa-info-circle"></i></a></td>
                    <td><a href="#" class="info-data"><i class="fas fa-envelope"></i></a></td>
                </tr>
            </tbody>
        </table>