async function postData(url = '', data = {}) {
  const response = await fetch(url, {
    method: 'POST', 
    mode: 'cors', 
    headers: {
      'Content-Type': 'application/json'
    },
    redirect: 'follow', 
    referrerPolicy: 'no-referrer',
    body: JSON.stringify(data) 
  });
}

async function putData(url = '', data = {}) {
  const response = await fetch(url, {
    method: 'PUT', 
    mode: 'cors', 
    headers: {
      'Content-Type': 'application/json'
    },
    redirect: 'follow', 
    referrerPolicy: 'no-referrer', 
    body: JSON.stringify(data) 
  });
}

async function deleteData(url = '', data = {}) {
  const response = await fetch(url, {
    method: 'DELETE', 
    mode: 'cors', 
    headers: {
      'Content-Type': 'application/json'
    },    redirect: 'follow', 
    referrerPolicy: 'no-referrer', 
    body: JSON.stringify(data) 
  });
}

async function insertProduct() {
    postData('https://us-central1-mooc-sstartsystems.cloudfunctions.net/app/api/products', {
        name: $("#name").val(),
        description: $("#desc").val(),
        id: $("#id").val(),
        codigo: $("#code").val(),
        cost_price :parseFloat($("#price").val(),10),
        img_url: "Aún no se implementa la imagen",
        profit_percentage: parseFloat($("#ganancias").val(),10),
        quantity: parseInt($("#quantity").val(),10),
        sale_price: parseFloat($("#price_sell").val(),10),
    }).then(data => {  })
}

async function updateProduct() {
    putData('https://us-central1-mooc-sstartsystems.cloudfunctions.net/app/api/products/'+$("#id").val(), {
        name: $("#name").val(),
        description: $("#desc").val(),
        id: $("#id").val(),
        codigo: $("#code").val(),
        cost_price :parseFloat($("#price").val(),10),
        img_url: "Aún no se implementa la imagen",
        profit_percentage: parseFloat($("#ganancias").val(),10),
        quantity: parseInt($("#quantity").val(),10),
        sale_price: parseFloat($("#price_sell").val(),10),
    }).then(data => { console.log(data.response) })
}

async function deleteProduct(idProd) {
    console.log(idProd);
    if (deleteData('https://us-central1-mooc-sstartsystems.cloudfunctions.net/app/api/products/' + idProd, {}))
    {
        location.href = "?controlador=Product&accion=call_listar";
    }
}
    
