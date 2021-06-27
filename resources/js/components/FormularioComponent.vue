<template>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 mb-4">
                <img src="https://png.pngtree.com/png-clipart/20200727/original/pngtree-home-logo-vector-simple-and-minimalist-png-image_5164484.jpg" id="main-logo"/>
                <h2 class="text-center">Datos de la vivienda</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <p class="h4">Básicos</p>
                <label class="font-weight-bold">Tipo</label>
                <select class ="form-control">
                    <option>Vivienda</option>
                    <option>Edificio</option>
                    <option>Otro</option>
                </select>

                <label class="font-weight-bold mt-2">Año de construcción</label>
                <select class ="form-control">
                    <option v-for="anio in anio_construccion_opciones" v-bind:value="anio">
                        {{ anio }}
                    </option>
                </select>


            </div>
            <div class="col-12 col-md-4">
                <p class="h4">Metros cuadrados</p>
                <label class="font-weight-bold">Construidos</label>
                <input class="form-control" type="number" min="0">

                <label class="font-weight-bold mt-2">Útiles</label>
                <input class="form-control" type="number" min="0">

                <label class="font-weight-bold mt-2">En escritura</label>
                <input class="form-control" type="number" min="0">

                <label class="font-weight-bold mt-2">En catastro</label>
                <input class="form-control" type="number" min="0">

                <label class="font-weight-bold mt-2">Bajo techo (Dentro de la vivienda, suele ser igual a útiles)</label>
                <input class="form-control" type="number" min="0">

                <label class="font-weight-bold mt-2">Total de terrazas, porches, patios (Suma de todos)</label>
                <input class="form-control" type="number" min="0">
            </div>
            <div class="col-12 col-md-4">
                <p class="h4">Altura de techos</p>

                <label class="font-weight-bold mt-2">En todo el inmueble</label>
                <select class ="form-control">
                    <option v-for="opt in altura_techos_opciones" v-bind:value="opt">
                        {{ opt }}
                    </option>
                </select>

                <label class="font-weight-bold mt-2">En la mitad</label>
                <select class ="form-control">
                    <option v-for="opt in altura_techos_opciones" v-bind:value="opt">
                        {{ opt }}
                    </option>
                </select>

                <label class="font-weight-bold mt-2">En menos de la mitad</label>
                <select class ="form-control">
                    <option v-for="opt in altura_techos_opciones" v-bind:value="opt">
                        {{ opt }}
                    </option>
                </select>

                <label class="font-weight-bold mt-2">En una estancia</label>
                <select class ="form-control">
                    <option v-for="opt in altura_techos_opciones" v-bind:value="opt">
                        {{ opt }}
                    </option>
                </select>

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
</style>