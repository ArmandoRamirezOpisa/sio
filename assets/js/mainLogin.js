/* Inicio de sesion Sio */
let usuarioSio = document.getElementById('usuarioSio');
let passwordSio = document.getElementById('passwordSio');
let accederSio = document.getElementById('accederSio');
let messageAlert = document.getElementById('messageAlert');
/* Fin inicio de sesion Sio*/

usuarioSio.addEventListener('keyup', loginBtn);

passwordSio.addEventListener("keyup", loginBtn);

function loginBtn(event) {
    if (event.keyCode == 13) {
        accederSioHome();
    }
}

accederSio.addEventListener('click', accederSioHome);

function accederSioHome() {
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