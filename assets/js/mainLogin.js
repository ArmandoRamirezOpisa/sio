/* Inicio de sesion Sio */
let usuarioSio = document.getElementById('usuarioSio');
let passwordSio = document.getElementById('passwordSio');
let accederSio = document.getElementById('accederSio');
let messageAlert = document.getElementById('messageAlert');
/* Fin inicio de sesion Sio*/
accederSio.addEventListener('click', accederSioHome);

function accederSioHome() {

    console.log("Probando usuario");
    console.log(usuarioSio.value);

    if (usuarioSio.value == "" || passwordSio.value == "") {
        messageAlert.style.display = 'block';
    } else {
        $.ajax({
            url: 'Welcome/loginSio',
            async: 'true',
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            global: true,
            ifModified: false,
            processData: true,
            data: {
                'userSio': usuarioSio.value,
                'passwordSio': passwordSio.value
            },
            beforeSend: function() {},
            success: function(result) {
                if (result) {
                    location.href = "http://" + location.hostname + "/opisio.com.mx/" + "Welcome/home";
                } else {
                    messageAlert.style.display = 'block';
                }
            },
            error: function(object, error, anotherObject) {},
            timeout: 30000,
            type: "POST"
        });
    }
}