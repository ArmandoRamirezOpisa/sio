        <h2>Busqueda de Canje</h2>
        <form>
            <div class="form-group">
                <label for="exampleFormControlSelect1"><strong>Modo de busqueda:</strong></label>
                <select class="form-control" id="mododeBusqueda">
                    <option>Selecciona uno...</option>
                    <option>Folio</option>
                    <option>Nombre Participante</option>
                    <option>PO</option>
                    <option>Codigo Postal</option>
                    <option>Guia</option>
                    <option>Company</option>
                      </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><strong>Busqueda:</strong></label>
                <input type="text" class="form-control" id="busqueda" placeholder="Realiza tu busqueda">
            </div>
        </form>
        <label for="canje">Canje: <span>Folio:63</span></label>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">codPrograma</th>
                    <th scope="col">FolioCanje</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ver mas</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>41</td>
                    <td>63</td>
                    <td>cal</td>
                    <td>jarc</td>
                    <td><a href="#" class="info-data" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-info-circle"></i></a></td>
                    <td><a href="#" class="info-data" data-toggle="modal" data-target="#ModalEdit"><i class="fas fa-edit"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>41</td>
                    <td>64</td>
                    <td>cal</td>
                    <td>jarc</td>
                    <td><a href="#" class="info-data" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-info-circle"></i></a></td>
                    <td><a href="#" class="info-data" data-toggle="modal" data-target="#ModalEdit"><i class="fas fa-edit"></i></a></td>
                </tr>
            </tbody>
        </table>