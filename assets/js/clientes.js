const tableLista = document.querySelector('#tableListaProductos tbody');
const tblPendiente = document.querySelector('#tblPendiente');
document.addEventListener('DOMContentLoaded', function() {
    if (tableLista) {
        getListaProductos();
    }
    //cargar datos pendientes con DataTables
    $('#tblPendiente').DataTable( {
        ajax: {
            url: base_url + 'clientes/listarPendientes',
            dataSrc: ''
        },
        columns: [
            { data: 'id_transaccion' },
            { data: 'monto' },
            { data: 'fecha' },
        ]
    } );

});


function getListaProductos(){
    let html = '';
    const url = base_url + 'principal/listaProductos';
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(JSON.stringify(listaCarrito));
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            if (res.totalPaypal > 0) {
                res.productos.forEach(producto => {
                    html += `<tr>
                        <td>
                        <img class="img-thumbnail rounded-circle" src="${producto.imagen}" alt="" width="100">
                        </td>
                        <td>${producto.nombre}</td>
                        <td><span class="badge bg-warning">${res.moneda + ' ' + producto.precio}</span></td>
                        <td><span class="badge bg-success">${producto.cantidad}</span></td>
                        <td>${producto.subTotal}</td>
                    </tr>`;
                });
                console.log(res.totalPaypal);
                tableLista.innerHTML = html;
                document.querySelector('#totalProducto').textContent ='Total a Pagar: ' + res.moneda + ' ' + res.total;
                botonPaypal(res.totalPaypal);
            }else{
                tableLista.innerHTML = `
                <tr>
                    <td colspan="6" class="text-center">Carrito vacio</td>
                </tr>
                `;
            }
        }
    }
}

function botonPaypal(total) {
    paypal.Buttons({
        createOrder: (data, actions) => {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: total
                    }
                }]
            });
        },

        onApprove: (data, actions) => {
            return actions.order.capture().then(function (orderData) {
                registrarPedido(orderData)
            });
        }
    }).render('#paypal-button-container');
}
function registrarPedido(datos) {
    const url = base_url + 'clientes/registrarPedido';
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(JSON.stringify({
        pedidos: datos,
        productos: listaCarrito
    }));
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            Swal.fire("Aviso?", res.msg, res.icono);
            if (res.icono == 'success') {
                localStorage.removeItem('listaCarrito');
                setTimeout(() => {
                    window.location.reload();
                }, 2000);
            } 
        }
    }
}