'use strict';

class Juego {
    // ?? Propiedades
        id = 0;
        titulo = '';
        precio = 0;
        img = '';

    constructor() { }

    // ?? Metodos
        agregar(infoJuego) {
            this.id = infoJuego.id;
            this.titulo = infoJuego.titulo;
            this.precio = infoJuego.precio;
            this.img = infoJuego.img;

            const cantidad = LocalStorageOperation.getCantidadTitulo(this.id);

            const tr = document.createElement('tr');

            tr.setAttribute('id', `${this.id}`);

            tr.innerHTML = `<th scope="row"><img src="../imagenes/${this.img}" width="90" class="hoverCarrito"></th>
                            <td class="txtCarrito" style="font-weight: bold;">${this.titulo}<hr>
                            <span>Precio: </span>$${this.precio}.00</td>
                            <td class="text-center" id="cantidad${this.id}" style="font-weight: bold;">${cantidad[0]}</td>
                            <td>
                                <div class="btn-group ml-5 p-3">
                                    <button id="mas${this.id}" type="button" class="btn btn-info aumentar" ><i class="fas fa-chevron-up"></i></button>
                                    <button id="menos${this.id}" type="button" class="btn btn-primary disminuir" ><i class="fas fa-chevron-down"></i></button>
                                    <button id="elimiar${this.id}" type="button" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>`;

            return tr;
        }

        eliminar(element) {
            if(element.tagName === 'I') {
                const juegoBorrar = element.parentElement.parentElement.parentElement.parentElement;

                juegoBorrar.remove();
                LocalStorageOperation.eliminarJuego(juegoBorrar.id);
            }else {
                const juegoBorrar = element.parentElement.parentElement.parentElement;
                juegoBorrar.remove();
                LocalStorageOperation.eliminarJuego(juegoBorrar.id);
            }
        }

        aumentarCantidad(element) {
            if(element.tagName === 'I') {
                let auxElement = element.parentElement.parentElement.parentElement.parentElement;

                let res = LocalStorageOperation.getCantidadTitulo(auxElement.id);
                let cantidad = res[0], status = res[1];

                if(cantidad < status) {
                    let aux1 = cantidad.toString();
                    cantidad++; let aux2 = cantidad.toString();
                    
                    // ** Cambiar valor anterior de cantidad
                    let antiguo = document.getElementById(`cantidad${auxElement.id}`).innerHTML;
                    var nuevo = antiguo.replace(aux1, aux2);
                    document.getElementById(`cantidad${auxElement.id}`).innerHTML = nuevo;

                    // ** Actualizar LS y Obj
                    LocalStorageOperation.postCantidadTitulo(auxElement.id, 0);
                }else {
                    Swal.fire("Error", `Ya no quedan más titulos en exitencias :(`);
                }
            }else {
                let auxElement = element.parentElement.parentElement.parentElement;

                let res = LocalStorageOperation.getCantidadTitulo(auxElement.id);
                let cantidad = res[0], status = res[1];

                if(cantidad < status) {
                    let aux1 = cantidad.toString();
                    cantidad++; let aux2 = cantidad.toString();
                    
                    let antiguo = document.getElementById(`cantidad${auxElement.id}`).innerHTML;
                    var nuevo = antiguo.replace(aux1, aux2);
                    document.getElementById(`cantidad${auxElement.id}`).innerHTML = nuevo;

                    LocalStorageOperation.postCantidadTitulo(auxElement.id, 0);
                }else {
                    Swal.fire("Error", `Ya no quedan más titulos en exitencias :(`);
                }
            }
        }

        disminuirCantidad(element) {
            if(element.tagName === 'I') {
                let auxElement = element.parentElement.parentElement.parentElement.parentElement;
                let res = LocalStorageOperation.getCantidadTitulo(auxElement.id);
                let cantidad = res[0], status = res[1];
                console.log(res);

                if(status !== 1) {
                    if(cantidad == 1) {
                        Swal.fire("Error", `No puedes pedir menos de una copia bro ;)`);
                    }else {
                        let aux1 = cantidad.toString();
                        cantidad--; let aux2 = cantidad.toString();
                        
                        // ** Cambiar valor anterior de cantidad
                        let antiguo = document.getElementById(`cantidad${auxElement.id}`).innerHTML;
                        var nuevo = antiguo.replace(aux1, aux2);
                        document.getElementById(`cantidad${auxElement.id}`).innerHTML = nuevo;

                        // ** Actualizar LS y Obj
                        LocalStorageOperation.postCantidadTitulo(auxElement.id, 1);
                    }
                }else {
                    Swal.fire("Error", `No puedes pedir menos de una copia bro ;)`);
                }
            }else {
                let auxElement = element.parentElement.parentElement.parentElement;
                let res = LocalStorageOperation.getCantidadTitulo(auxElement.id);
                let cantidad = res[0], status = res[1];
                console.log(res);

                if(status !== 1) {
                    if(cantidad == 1) {
                        Swal.fire("Error", `No puedes pedir menos de una copia bro ;)`);
                    }else {
                        let aux1 = cantidad.toString();
                        cantidad--; let aux2 = cantidad.toString();
                        
                        let antiguo = document.getElementById(`cantidad${auxElement.id}`).innerHTML;
                        var nuevo = antiguo.replace(aux1, aux2);
                        document.getElementById(`cantidad${auxElement.id}`).innerHTML = nuevo;

                        LocalStorageOperation.postCantidadTitulo(auxElement.id, 1);
                    }
                }else {
                    Swal.fire("Error", `No puedes pedir menos de una copia bro ;)`);
                }
            }
        }
}