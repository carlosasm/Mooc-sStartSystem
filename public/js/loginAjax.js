function login(val1, val2) {
    var parametros = {
        "username": val1,
        "pass": val2
    };

    $.ajax({
        data: parametros,
        url: "?controller=Product&action=call_listar",
        type: 'POST',
        beforeSend: function () {
        },
        success: function (response) {

            location.href = "?controlador=Product&accion=call_listar";
        }

    });
}