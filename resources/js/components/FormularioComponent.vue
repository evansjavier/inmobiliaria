<template>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 mb-4">
                <img src="https://png.pngtree.com/png-clipart/20200727/original/pngtree-home-logo-vector-simple-and-minimalist-png-image_5164484.jpg" id="main-logo"/>
                <h2 class="text-center">Datos de la vivienda</h2>
            </div>
        </div>
        
        <div class="row" v-if="page==1">
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
                    <option v-for="anio in anio_construccion_opciones" v-bind:value="anio" :key="anio">
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

        <div class="row" v-if="page==2">
            <div class="col-12 form-group">
                <label class="h4 mt-2">Cocina</label>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioCocina1" name="cocina" class="custom-control-input">
                            <label class="custom-control-label" for="radioCocina1">Si</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioCocina2" name="cocina" class="custom-control-input">
                            <label class="custom-control-label" for="radioCocina2">No</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioCocina3" name="cocina" class="custom-control-input">
                            <label class="custom-control-label" for="radioCocina3">Parcial</label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="row">
                            <div class="col-6"><p>Metros cuadrados totales</p></div>
                            <div class="col-6"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6"><p>Dispensa</p></div>
                            <div class="col-6"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6"><p>Office</p></div>
                            <div class="col-6"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6"><p>Bodega</p></div>
                            <div class="col-6"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6"><p>Terraza cubierta</p></div>
                            <div class="col-6"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6"><p>Año de instalación</p></div>
                            <div class="col-6"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6"><p>Año renovada</p></div>
                            <div class="col-6"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 form-group">
                <label class="font-weight-bold mt-2">Encimera</label>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in encimera_opciones" :key="opc" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'encimera' + i" name="encimera" class="custom-control-input" v-model="form.encimera">
                            <label class="custom-control-label" :for="'encimera' + i" >{{ opc }}</label>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-inline mt-2">
                        <label class="form-check-label">Si no es alguna de las anteriores, especifíquela</label>
                        <input v-model="form.encimera_otra" class="form-control ml-2" />
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="col-12 form-group">
                <label class="font-weight-bold mt-2">Electrodomésticos</label>
                <div class="row">
                    <div v-for="(opc, i) in electrodomesticos_opc" :key="opc.value" class="form-check">
                        <div class="col-12">
                            <input class="form-check-input" type="checkbox" :id="'electrodomesticosCheckbox' + i" :value="opc.value">
                        </div>
                        <div class="col-12">
                            <label class="form-check-label" :for="'electrodomesticosCheckbox' + i">
                                <span class="form-check-label">{{ opc.name }}</span>
                                <img :src="opc.img" class="d-block" >
                            </label>    
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-inline mt-2">
                            <label class="form-check-label">Otro electrodoméstico cuyo PVP sea superior a 500 Euros</label>
                            <input class="form-control ml-2" />
                        </div>                        
                    </div>
                </div>                
            </div>

            <div class="col-12 form-group">
                <label class="font-weight-bold mt-2">Fuegos de cocina</label>
                <div class="row">
                    <div class="col">
                        
                        <img src="img/GENERALIMG0014.jpg" class="d-inline" >

                        <div v-for="(opc, i) in fuegos_cocina_opc" :key="opc.name" class="form-check form-check-inline">                        
                            <div class="col-12">
                                <input class="form-check-input" type="checkbox" :id="'fuegosCheckbox' + i" :value="opc.name">
                                <label class="form-check-label" :for="'fuegosCheckbox' + i">{{ opc.name }}</label>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-inline mt-2">
                                <label class="form-check-label">Si no es alguna de las opciones anteriores, especifíquela:</label>
                                <input class="form-control ml-2" />
                            </div>
                        </div>
                    </div>
                    
                </div>                
            </div>


        </div>

        <div class="row" v-if="page==3">
            <div class="col-12 form-group">
                <label class="h4 mt-2">Baños</label>
                <p class="text-info">Rellena las características de cada uno y si hay más seleccione "otro baño"</p>

                
                <div class="row">
                    <label class="font-weight-bold mt-2">Paredes de</label>
                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in banios_paredes_suelos_opc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'baniosParedes' + i" :value="opc.name" name="baniosParedes" class="custom-control-input">
                            <label class="custom-control-label" :for="'baniosParedes' + i">{{ opc.name }}</label>
                        </div>                        
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-inline mt-2">
                        <label class="form-check-label">Si no es alguna de las anteriores, especifíquela</label>
                        <input v-model="form.encimera_otra" class="form-control ml-2" />
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <label class="font-weight-bold mt-2">Suelos</label>
                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in banios_paredes_suelos_opc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'baniosSuelos' + i" :value="opc.name" name="baniosSuelos" class="custom-control-input">
                            <label class="custom-control-label" :for="'baniosSuelos' + i">{{ opc.name }}</label>
                        </div>                        
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-inline mt-2">
                        <label class="form-check-label">Si no es alguna de las anteriores, especifíquela</label>
                        <input v-model="form.encimera_otra" class="form-control ml-2" />
                        </div>                        
                    </div>
                </div>

            </div>

            <div class="col-12 form-group">
                <label class="font-weight-bold mt-2">Encimera</label>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in banios_encimera_opciones" :key="opc" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'baniosEncimera' + i" name="baniosEncimera" class="custom-control-input" >
                            <label class="custom-control-label" :for="'baniosEncimera' + i" >{{ opc }}</label>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-inline mt-2">
                        <label class="form-check-label">Si no es alguna de las anteriores, especifíquela</label>
                        <input class="form-control ml-2" />
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="col-12 form-group">
                <label class="font-weight-bold mt-2">Equipamiento de baño</label>
                <div class="row">
                        <div v-for="(opc, i) in banios_equipamiento_opc" :key="opc.name" class="form-check">
                        <div class="col-12">
                            <input class="form-check-input" type="checkbox" :id="'baniosEquipamiento' + i" :value="opc.name">
                        </div>
                        <div class="col-12">
                            <label class="form-check-label" :for="'baniosEquipamiento' + i">
                                <span class="form-check-label">{{ opc.name }}</span>
                                <img :src="opc.img" class="d-block" >
                            </label>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-inline mt-2">
                            <label class="form-check-label">Otro electrodoméstico cuyo PVP sea superior a 500 Euros</label>
                            <input class="form-control ml-2" />
                        </div>                        
                    </div>
                </div>                
            </div>

            <div class="col-12 form-group">
                <label class="font-weight-bold mt-2">Ducha</label>
                <div class="row">
                    <div class="col">

                        <div v-for="(opc, i) in banios_ducha_opc" :key="opc.name" class="form-check form-check-inline">
                            <div class="col-12">
                                <input class="form-check-input" type="checkbox" :id="'baniosDucha' + i" :value="opc.name">
                                <label class="form-check-label" :for="'baniosDucha' + i">{{ opc.name }}</label>
                            </div>
                        </div>
                    </div>
                    
                </div>                
            </div>

            <div class="col-12 form-group">
                <label class="font-weight-bold mt-2">Tamaño baño</label>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in banios_tamanio_opciones" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'baniosTamanio' + i" name="baniosTamanio" class="custom-control-input" >
                            <label class="custom-control-label" :for="'baniosTamanio' + i" >{{ opc.name }}</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 form-group">
                <label class="font-weight-bold mt-2">Sauna</label>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in banios_sauna_opciones" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'baniosSauna' + i" name="baniosSauna" class="custom-control-input" >
                            <label class="custom-control-label" :for="'baniosSauna' + i" >{{ opc.name }}</label>
                        </div>
                    </div>

                    <div class="col-12 ml-4">
                        <input class="form-check-input" type="checkbox" :id="'baniosSaunaAptoMv'" value="si">
                        <label class="form-check-label" :for="'baniosSaunaAptoMv'">Apta minusválidos</label>
                    </div>
                </div>
            </div>

            <div class="col-12 form-group">
                <label class="font-weight-bold mt-2">Lavablos</label>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in banios_lavablos_opciones" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'baniosLavablos' + i" name="baniosLavablos" class="custom-control-input" >
                            <label class="custom-control-label" :for="'baniosLavablos' + i" >{{ opc.name }}</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="form-inline mt-2">
                <label class="form-check-label text-info">ALGO MÁS QUE RESEÑAR SOBRE DUCHA, BAÑO, SAUNA, LAVABOS, ACLÁRELO</label>
                <input class="form-control ml-2" />
                </div>                        
            </div>

        </div>

        <div class="row">
            <div class="col-12 text-right">
                <span class="btn btn-primary btn-sm mt-4" v-on:click="paginaAnt()">Anterior</span>
                <span class="btn btn-primary btn-sm mt-4" v-on:click="paginaSig()">Siguiente</span>
            </div>
        </div>

        <div class="row">
            <p class="text-primary mt-4">Página {{  page +  "/" + total_pages }}</p>
            <div class="progress w-100 mb-4">
                <div class="progress-bar" role="progressbar" :style="'width: ' + porc_progreso + '%;'" :aria-valuenow="porc_progreso" aria-valuemin="0" aria-valuemax="100">{{ porc_progreso }}%</div>
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
        computed: {
            porc_progreso : function () {
                return Math.round( this.page / this.total_pages * 100)
            }
        },
        data: function () {
            return {
                count: 0,
                total_pages: 3,
                anio_construccion_opciones: [],
                form:{
                    encimera: ""
                },
                altura_techos_opciones: [
                    "Inferior a 2,2",
                    "2,2 - 2,6",
                    "2,7 - 3,0",
                    "3,1 - 3,5",
                    "3,6 - 4,0",
                    "Más de 4,1",
                ],
                encimera_opciones: [
                    "Silestone",
                    "Marmol",
                    "Granito",
                    "Madera",
                    "Imitación madera",
                    "Acero inoxidable",
                    "Cerámica",
                    "Otra"
                ],
                electrodomesticos_opc : [
                    {
                        name: "Frigorífico",
                        value: "Frigorífico",
                        img: "img/GENERALIMG0007_0.jpg",
                    },
                    {
                        name: "Horno",
                        value: "Horno",
                        img: "img/GENERALIMG0007.jpg",
                    },
                    {
                        name: "Congelador",
                        value: "Congelador",
                        img: "img/GENERALIMG0008.jpg",
                    },
                    {
                        name: "Lavadora",
                        value: "Lavadora",
                        img: "img/GENERALIMG0009.jpg",
                    },
                    {
                        name: "Secadora",
                        value: "Secadora",
                        img: "img/GENERALIMG0010.jpg",
                    },
                    {
                        name: "Campana",
                        value: "Campana",
                        img: "img/GENERALIMG0011.jpg",
                    },
                    {
                        name: "Secadora",
                        value: "Secadora2",
                        img: "img/GENERALIMG0012.jpg",
                    },
                    {
                        name: "Vinoteca",
                        value: "Vinoteca",
                        img: "img/GENERALIMG0013.jpg",
                    }
                ],
                fuegos_cocina_opc: [
                    { name: "Vitrocerámica"},
                    { name: "De inducción"},
                    { name: "Modular"},
                    { name: "De gas"},
                    { name: "De carbón"},
                    { name: "De biomasa"}
                ],
                banios_paredes_suelos_opc: [
                    { name: "Marmol"},
                    { name: "Granito"},
                    { name: "Pizarra"},
                    { name: "Cuarcita"},
                    { name: "Cerámica"},
                    { name: "Cristal"},
                    { name: "Acero inoxidable"},
                    { name: "Ladrillo"},
                    { name: "Cemento"},
                    { name: "Hormigón"},
                    { name: "Pintura"},
                    { name: "Papel"},
                    { name: "Estuco"},
                    { name: "Espejo"},
                    { name: "Madera"},
                    { name: "Barro cocido"},
                    { name: "Imitación barro"},
                    { name: "Plástico"},
                    { name: "Sintético"},
                    { name: "Vinílico"},
                    { name: "Material vegetal"},
                ],
                banios_encimera_opciones: [
                    "Marmol",
                    "Granito",
                    "Pizarra",
                    "Cuarcita",
                    "Cerámica",
                    "Cristal",
                    "Acero inoxidable",
                    "Ladrillo",
                    "Cemento",
                    "Hormigón",
                    "Madera",
                    "Silestone",
                    "Aglomerado",
                    "Material sintético",
                ],
                banios_equipamiento_opc : [
                    {
                        name: "Amueblado",
                        value: "Amueblado",
                        img: "img/GENERALIMG0021.jpg",
                    },
                    {
                        name: "Espejo",
                        value: "Espejo",
                        img: "img/GENERALIMG0022.jpg",
                    },
                    {
                        name: "Ducha",
                        value: "Ducha",
                        img: "img/GENERALIMG0015.jpg",
                    },
                    {
                        name: "Baño",
                        value: "Baño",
                        img: "img/GENERALIMG0016.jpg",
                    },
                    {
                        name: "Sanitario",
                        value: "Sanitario",
                        img: "img/GENERALIMG0017.jpg",
                    },
                    {
                        name: "Bidet",
                        value: "Bidet",
                        img: "img/GENERALIMG0018.jpg",
                    },
                    {
                        name: "Lavabos",
                        value: "Lavabos",
                        img: "img/GENERALIMG0019.jpg",
                    },
                    {
                        name: "Lavadora",
                        value: "Lavadora",
                        img: "img/GENERALIMG0010.jpg",
                    },
                    {
                        name: "Secadora",
                        value: "Secadora",
                        img: "img/GENERALIMG0011.jpg",
                    },
                    {
                        name: "Sauna",
                        value: "Sauna",
                        img: "img/GENERALIMG0020.jpg",
                    }
                ],
                banios_ducha_opc: [
                    { name: "Con mampara" },
                    { name: "Con hidromasaje" },
                    { name: "Con vapor" },
                    { name: "1 alcachofa" },
                    { name: "Más de 2 alcachofas" },
                    { name: "Vistas al exterior" },
                    { name: "Apta minusválidos" },
                ],
                banios_tamanio_opciones: [
                    { name: "Pequeño" },
                    { name: "Estándar" },
                    { name: "Doble" },
                    { name: "Triple" },
                    { name: "Mayor de triple" },
                ],
                banios_sauna_opciones: [
                    { name: "Una persona" },
                    { name: "Dos personas" },
                    { name: "Tres personas" },
                    { name: "Cuatro personas" },
                    { name: "Cinco personas" },
                    { name: "Más 5 personas" },
                ],
                banios_lavablos_opciones: [
                    { name: "1 seno" },
                    { name: "2 senos" },
                    { name: "3 senos" },
                    { name: "4 senos" },
                    { name: "Más de 4 senos" }
                ],
                page: 1,
            }
        },
        methods: {
            paginaAnt(){
                if(this.page > 1) this.page--
            },
            paginaSig(){
                if(this.total_pages > this.page ) this.page++
            }
        }
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