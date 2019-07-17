<!doctype html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>SIO web</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="login.html">
            <img src="assets/img/sioLogo.jpg" width="50" height="30" class="d-inline-block align-top" alt="">
        </a>
        <form class="form-inline">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="button" data-toggle="modal" data-target="#modalIniciarSesion"><i class="fas fa-user"></i> Iniciar Sesion</button>
        </form>
    </nav>
    <div class="container mt-5 contentAnimated">
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col mt-5">
                <img class="logoSio" src="assets/img/sioLogo.jpg" alt="Logo del Sio">
            </div>
            <div class="col"></div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalIniciarSesion" tabindex="-1" role="dialog" aria-labelledby="modalIniciarSesionLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalIniciarSesionLabel">Iniciar Sesion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body">
                    <div id="messageAlert" class="alert alert-danger alert-dismissible fade show contentAnimated" role="alert">
                        <strong>Advertencia!</strong> Algun campo esta vacio o el usuario y password estan mal.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Usuario</label>
                            <input type="text" class="form-control" id="usuarioSio" aria-describedby="emailHelp" placeholder="Escribe tu usuario...">
                            <small id="emailHelp" class="form-text text-muted">No compartas tu usuario.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="passwordSio" placeholder="Escribe tu password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancelar</button>
                    <button type="button" id="accederSio" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i> Acceder</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/mainLogin.js"></script>
</body>

</html>