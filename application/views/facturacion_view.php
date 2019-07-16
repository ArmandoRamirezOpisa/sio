        <h1>Facturacion</h1>
        <div class="row mt-5">
            <div class="col">
                <form class="form-inline">
                    <div class="form-group mb-2">
                        <label for="folio" class="form-control-plaintext"><strong>Folio:</strong></label>
                        <input type="text" class="form-control" id="folio">
                    </div>
                </form>
            </div>
            <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-copy"></i> Clonar</button></div>
            <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-file"></i> Nuevo</button></div>
            <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-save"></i> Guardar</button></div>
            <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-equals"></i> Canjes asociados</button></div>
            <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-file-upload"></i> Cargar Canjes</button></div>
            <div class="col"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times-circle"></i> Cancelar</button></div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label for="cliente" class="form-control-plaintext"><strong>Cliente:</strong></label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </form>
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label for="id" class="form-control-plaintext"><strong>ID:</strong></label>
                                <input type="text" class="form-control" id="id">
                            </div>
                        </form>
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label for="cantidad" class="form-control-plaintext"><strong>Cantidad:</strong></label>
                                <input type="text" class="form-control" id="id">
                            </div>
                        </form>
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label for="medida" class="form-control-plaintext"><strong>Medida:</strong></label>
                                <input type="text" class="form-control" id="medida">
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label for="p/u" class="form-control-plaintext"><strong>P/U:</strong></label>
                                <input type="text" class="form-control" id="pu">
                            </div>
                        </form>
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label for="iva" class="form-control-plaintext"><strong>Iva:</strong></label>
                                <input type="text" class="form-control" id="iva">
                            </div>
                        </form>
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label for="usd" class="form-control-plaintext"><strong>USD:</strong></label>
                                <input type="text" class="form-control" id="usd">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-paper-plane"></i> Enviar Fila</button></div>
                    <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-edit"></i> Editar Fila</button></div>
                    <div class="col"><button type="button" class="btn btn-outline-dark"><i class="fas fa-save"></i> Guardar</button></div>
                </div>
            </div>
            <div class="col">
                <label for="concepto"><strong>Concepto:</strong></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button type="button" class="btn btn-outline-dark"><i class="fas fa-save"></i> Agregar</button>
            </div>
        </div>
        <div class="row">
            <!--Pendiente-->
        </div>