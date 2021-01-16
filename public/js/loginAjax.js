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




async function postData1(url = '', data = {}) {
  const response = await fetch(url, {
    method: 'POST', // *GET, POST, PUT, DELETE.
    mode: 'cors', // no-cors, *cors, same-origin
    headers: {
      'Content-Type': 'application/json'
    },
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: JSON.stringify(data) // body data type must match "Content-Type" header
  });
}



async function insertProduct1() {
    postData('https://us-central1-mooc-sstartsystems.cloudfunctions.net/app/api/products', {
        name: $("#name").val(),
        description: $("#desc").val(),
        id: $("#id").val(),

    }).then(data => { console.log(data) })



   // console.log($("#code").val())
    codigo = $("#code").val()
    cost_price = $("#price").val()
    description= $("#desc").val()
    id= $("#id").val()
    img_url= "Aún no se implementa la imagen"
    name= $("#name").val()
    profit_percentage= $("#ganancias").val()
    quantity= $("#quantity").val()
    sale_price= $("#price_sell").val()
    var parametros = {
        "codigo": codigo,
        "cost_price": cost_price,
        "description":description,
        "id":id,
        "img_url":img_url,
        "name":name,
        "profit_percentage":profit_percentage,
        "quantity":quantity,
        "sale_price":sale_price,
    };

    $.ajax({
        data: parametros,
        url: "?controller=Product&action=insert",
        type: 'POST',
        beforeSend: function () {
        },
        success: function (response) {
        }

    });
}