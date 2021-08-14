<template>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 mb-4">
                <img src="https://png.pngtree.com/png-clipart/20200727/original/pngtree-home-logo-vector-simple-and-minimalist-png-image_5164484.jpg" id="main-logo"/>
                <h2 class="text-center">Datos de la vivienda</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="h4">Básicos</p>
                <label class="font-weight-bold">Modelo</label>
                <select class ="form-control">
                    <option>Vivienda con cédula de hibitabilidad</option>
                    <option>Edificio</option>
                    <option>Otro</option>
                </select>

                <label class="font-weight-bold mt-2">Año de construcción</label>
                <select class ="form-control">
                    <option v-for="anio in anio_construccion_opciones" v-bind:value="anio">
                        {{ anio }}
                    </option>
                </select>

                <label class="font-weight-bold mt-2">Altura de la vivienda</label>
                <input class="form-control" type="number" min="0">

                <label class="font-weight-bold mt-2">Número de plantas de la vivienda</label>
                <input class="form-control" type="number" min="0">

                <label class="font-weight-bold mt-2">Metros cuadrados de la vivienda</label>
                
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-12">
                        <p class="h4">Metros cuadrados</p>
                    </div>

                    <div class="col-3">
                        <label class="font-weight-bold">Construidos</label>
                        <input class="form-control" type="number" min="0">
                    </div>
                    
                    <div class="col-3">
                        <label class="font-weight-bold mt-2">Útiles</label>
                        <input class="form-control" type="number" min="0">
                    </div>

                    <div class="col-3">
                        <label class="font-weight-bold mt-2">En escritura</label>
                        <input class="form-control" type="number" min="0">
                    </div>


                    <div class="col-3">
                        <label class="font-weight-bold mt-2">En catastro</label>
                        <input class="form-control" type="number" min="0">
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-4">
                        <label class="font-weight-bold mt-2">Bajo techo</label>
                        <div class="row">
                            <div class="col-8 text-metros"><p>(metros totales sin terrazas, patios, porches o cualquier espacio que no esté techado, cerrado y con cédula de habitabilidad)</p></div>
                            <div class="col-4"><input class="form-control" type="number" min="0"></div>

                            <div class="col-12 text-center">
                                <img src="img/GENERALIMG0001.jpg" class="mx-auto img-borde" style="width: 50%">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-4">
                        <label class="font-weight-bold mt-2">Total no habitable</label>
                        <div class="row">
                            <div class="col-8 text-metros"><p>(metros totales de terrazas, patios, porches o cualquier espacio techado. Incluya aquí los metros de garajes, invernaderos, trasteros, casetas, etc. No cuente los metros de parcela)</p></div>
                            <div class="col-4"><input class="form-control" type="number" min="0"></div>

                            <div class="col-12 text-center">
                                <img src="img/GENERALIMG0002.jpg" class="mx-auto img-borde" style="width: 50%">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <label class="font-weight-bold mt-2">Total de parcela</label>
                        <div class="row">
                            <div class="col-8 text-metros"><p>sin contar con los metros bajo techo y los metros del apartado anterior (no-habitables)</p></div>
                            <div class="col-4"><input class="form-control" type="number" min="0"></div>

                            <div class="col-12 text-center">
                                <img src="img/GENERALIMG0003.jpg" class="mx-auto img-borde" style="width: 50%">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 mt-4">
                <p class="h4">Altura de techos</p>

                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="img/GENERALIMG0002.jpg" class="img-fluid img-borde">
                            </div>
                            <div class="col-5"><p>ALTURA DE TECHO</p></div>
                            <div class="col-3"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-9 text-right"><p>METROS 2 DE LA VIVIENDA CON ESTA ALTURA</p></div>
                            <div class="col-3"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12 text-right">
                <span class="btn btn-primary btn-sm mt-4">Siguiente</span>
            </div>
        </div>

        <div class="row">
            <p class="text-primary mt-4">Progreso</p>
            <div class="progress w-100 mb-4">
                <div class="progress-bar" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100">3%</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log("Funciona");

            for(var i = 1900; i<=2021; i++){
                this.anio_construccion_opciones = [...this.anio_construccion_opciones, i]
            }
        },
        data: function () {
            return {
                count: 0,
                anio_construccion_opciones: [],
                altura_techos_opciones: [
                    "Inferior a 2,2",
                    "2,2 - 2,6",
                    "2,7 - 3,0",
                    "3,1 - 3,5",
                    "3,6 - 4,0",
                    "Más de 4,1",
                ]
            }
        },
    }
</script>

<style>
    #main-logo{
        width: 10rem;
    }


    .text-metros{
        min-height: 10rem;
    }
    .img-borde{
        border: 1px dotted green;
    }
</style>