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
        <div id="tableBusquedaCanje" class="mt-5 contentAnimated"></div>