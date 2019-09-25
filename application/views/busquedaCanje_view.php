        <div id="alertMessage"></div>
        <h2>Busqueda de Canje</h2>
        <form>
            <div class="form-group">
                <label for="exampleFormControlSelect1"><strong>Modo de busqueda:</strong></label>
                <select class="form-control" id="modoBusquedaCanje">
                    <option value="vacio">Selecciona uno...</option>
                    <option value="folio">Folio</option>
                    <option value="nombreParticipante">Nombre Participante</option>
                    <option value="po">PO</option>
                    <option value="cp">Codigo Postal</option>
                    <option value="guia">Guia</option>
                    <option value="company">Company</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><strong>Busqueda:</strong></label>
                <input type="text" class="form-control" id="busquedaCanjeText" placeholder="Realiza tu busqueda">
            </div>
            <button type="button" class="btn btn-dark" id="buscandoCanje" onclick="buscandoCanjeData()"><i class="fas fa-search"></i> Buscar</button>
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