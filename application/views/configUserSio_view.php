        <div id="messageAlertConfig">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Advertencia!</strong> Algo salio mal, verifica que todo este correctamente apunttado.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-user-list" data-toggle="list" href="#list-user" role="tab" aria-controls="user">Nombre de usuario</a>
                    <a class="list-group-item list-group-item-action" id="list-pwd-list" data-toggle="list" href="#list-pwd" role="tab" aria-controls="pwd">Password</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-user" role="tabpanel" aria-labelledby="list-user-list">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nueno nombre de usuario</label>
                                <input type="text" class="form-control" id="newNameUserSio" placeholder="Escribe tu nuevo nombre de usuario...">
                            </div>
                            <button type="button" id="cambiarUserNewSio" class="btn btn-dark" onclick="cambiarUserNameSio()"><i class="fas fa-save"></i> Cambiar</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="list-pwd" role="tabpanel" aria-labelledby="list-pwd-list">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password nuevo</label>
                                <input type="password" class="form-control" id="newPassword" aria-describedby="pwdlHelp" placeholder="Escribe tu nueva password...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirma Password nuevo</label>
                                <input type="password" class="form-control" id="newPasswordConfirm" placeholder="Confirma tu nueva password...">
                                <small id="emailHelp" class="form-text text-muted">Trata de hacerla lo mas segura y guardar donde no la olvides.</small>
                            </div>
                            <button type="button" id="cambiarPwdSio" class="btn btn-dark" onclick="cambiarPassword()"><i class="fas fa-save"></i> Cambiar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>