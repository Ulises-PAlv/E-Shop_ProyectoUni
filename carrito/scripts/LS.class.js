class LocalStorageOperation {
    // ?? Metodos
        static almacenarJuego(infoJuego) {
            let arrayJuegos = this.obtenerLS();
            arrayJuegos.push(infoJuego);

            localStorage.setItem('Juegos', JSON.stringify(arrayJuegos));
        }

        static obtenerLS() {
            if(localStorage.getItem('Juegos') === null) {
                return [];
            }else {
                return JSON.parse(localStorage.getItem('Juegos'));
            }
        }

        static aumentarCantidad(id) {
            let arrayJuegos = this.obtenerLS();
            let arrayAux = [];
            let cantidad = parseInt(arrayJuegos[juegoAumentar].cantidad)++;

            cantidad = cantidad.toString();

            for(let i = 0; i < arrayJuegos.length; i++) {
                if(i != juegoAumentar) {
                    arrayAux.push(arrayJuegos[i]);
                }else {
                    let auxJuego = arrayJuegos[i];
                    auxJuego.cantidad = cantidad;
                    arrayJuegos.push(auxJuego);
                }

                localStorage.setItem('Juegos', JSON.stringify(arrayJuegos));
            }
            
            arrayJuegos[juegoAumentar]
        }

        static eliminarJuego(id) {
            let arrayJuegos = this.obtenerLS();
            let arrayAux = [];

            for(let i = 0; i < arrayJuegos.length; i++) {
                if(id != arrayJuegos[i].id) {
                    arrayAux.push(arrayJuegos[i]);
                }
            }

            localStorage.clear();
            if(arrayAux.length > 0) {
                localStorage.setItem('Juegos', JSON.stringify(arrayAux));
            }
        }

        static cleanStorageJuegos() {
            localStorage.clear();
        }

        static validarTitulo(id) {
            let arrayJuegos = this.obtenerLS();
            let band = true;
            
            for(let i = 0; i < arrayJuegos.length; i++) {
                if(arrayJuegos[i].id == id) {
                    band = false;
                }
            }

            return band;
        }

        static getCantidadTitulo(id) {
            let arrayJuegos = this.obtenerLS();
            var res = [];
            
            for(let i = 0; i < arrayJuegos.length; i++) {
                if(id == arrayJuegos[i].id) {
                    res.push(arrayJuegos[i].cantidad);
                    res.push(arrayJuegos[i].existencias);
                }
            }

            return res;
        }

        static postCantidadTitulo(id, band) {
            let arrayJuegos = this.obtenerLS();
            let arrayAux = [];

            for(let i = 0; i < arrayJuegos.length; i++) {
                if(id != arrayJuegos[i].id) {
                    arrayAux.push(arrayJuegos[i]);
                } else {
                    var ward = arrayJuegos[i];

                    if(band == 0) {
                        let k = ward.cantidad;
                        k++;

                        if(k <= ward.existencias) {
                            ward.cantidad++;
                        }
                    }else {
                        let k = ward.cantidad;
                        k--;

                        if(k > 0) {
                            ward.cantidad--;
                        }
                    }
                    
                    arrayAux.push(ward);
                }
            }

            localStorage.clear();
            if(arrayAux.length > 0) {
                localStorage.setItem('Juegos', JSON.stringify(arrayAux));
            }
        }

        static getLengthArray() {
            let arrayJuegos = this.obtenerLS();
            
            return arrayJuegos.length;
        }
}