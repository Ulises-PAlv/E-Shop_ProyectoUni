'use strict';
/**
 * ?? app Carrito
 */

const tabla = document.getElementById('productos');
const cantidadAumento = document.getElementById('inputCantidad');
const car = document.getElementById('cantidadCar');

const juego = new Juego();

function eventListener() {
    tabla.addEventListener('click', acciones);
}

function prepararDOM() {
    const juegosLS = LocalStorageOperation.obtenerLS();

    for(let i = 0; i < juegosLS.length; i++) {
        let tr = juego.agregar(juegosLS[i]);
        tabla.appendChild(tr);
    }
}

const numCar = LocalStorageOperation.getLengthArray();

let antiguo = car.innerHTML;
var nuevo = antiguo.replace(0, numCar);
car.innerHTML = nuevo;

eventListener();
prepararDOM();

function crearObJuego(titulo, img, precio, id, existencias) {
    const tipoJuego = {
        id: id,
        titulo: titulo,
        precio: precio,
        img: img,
        existencias: existencias,
        cantidad: 1
    }

    let validarExistencia = LocalStorageOperation.validarTitulo(tipoJuego.id);

    if(validarExistencia) {
        let tr = juego.agregar(tipoJuego);
        window.onload = () => {
            tabla.appendChild(tr);
        }

        var numCar = LocalStorageOperation.getLengthArray();
        var auxNum = numCar++;

        let antiguo = car.innerHTML;
        var nuevo = antiguo.replace(auxNum, numCar);
        car.innerHTML = nuevo;

        // ?? Almacenar
        LocalStorageOperation.almacenarJuego(tipoJuego);

        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se ha agregado el juego al carrito',
            showConfirmButton: false,
            timer: 1000
        })
    }else {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Este titulo ya esta agregado en el carrito',
            showConfirmButton: false,
            timer: 1000
        })
    }
}


function acciones(event) {
    if(event.target.tagName === 'I' || event.target.tagName === 'BUTTON') {
        // ?? Borrar Juego
        if(event.target.className.includes('btn-danger') || event.target.className.includes('fa-trash-alt')) {
            juego.eliminar(event.target);
            Swal.fire("Eliminado de carrito!!", `El titulo ha sido eliminado del carrito exitosamente`);
            //window.location.reload();
        }
        // ?? Aumentar cantidad
        if(event.target.className.includes('aumentar') || event.target.className.includes('fa-chevron-up')) {
            juego.aumentarCantidad(event.target);
        }

        // ?? Disminuir cantidad
        if(event.target.className.includes('disminuir') || event.target.className.includes('fa-chevron-down')) {
            juego.disminuirCantidad(event.target);
        }
    }
}


function vaciarCarrito() {
    while(tabla.firstChild) {
        tabla.firstChild.remove();
    }
    console.log('LS clean');
    LocalStorageOperation.cleanStorageJuegos();
}