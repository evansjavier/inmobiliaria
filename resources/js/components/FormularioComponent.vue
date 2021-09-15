<template>
    
    <div class="container mt-4">



        <div class="row">
            <div class="progress w-100 mb-4">
                <div class="progress-bar" role="progressbar" :style="'width: ' + porc_progreso + '%;'" :aria-valuenow="porc_progreso" aria-valuemin="0" aria-valuemax="100">{{ porc_progreso > 0 ? (porc_progreso + "%") : "" }}</div>
            </div>
        </div>

        <div class="row" v-if="page==1">
            <div class="col-12 mb-2">
                <h2 class="text-center">Registro de vivienda</h2>
            </div>
        </div>

        <div class="row" v-if="page==1">
            <div class="col-12">
                <p class="h4">Datos básicos</p>
                <label class="font-weight-bold">Modelo</label>
                <select class ="form-control">
                    <option>Vivienda con cédula de habitabilidad</option>
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
                <p class="text-info">Rellena las características de cada uno y si hay más seleccione "Añadir otro baño"</p>

                
                <div class="row">
                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Paredes de</label>
                    </div>
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
                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Suelos</label>
                    </div>
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
                <label class="form-check-label text-info">Algo más que reseñar sobre ducha, baño, sauna, lavabos, aclárelo</label>
                <input class="form-control ml-2" />
                </div>                        
            </div>

            <div class="col-12 my-3 px-0">
                <button class="btn btn-success btn-sm">Añadir otro baño</button>
            </div>

        </div>

        <div class="row" v-if="page==4">
            <div class="col-12">
                <p class="h4">Vistas de la vivienda:</p>
                <span class="text-info">(Anote el número de ventanas que tienen cada vista)</span>

                <div class="row">
                    <div class="col-12">
                        <label class="font-weight-bold mt-4">Número de ventanas totales de la vivienda</label>
                    </div>
                    <div class="col-3 col-md-2">
                        <input class="form-control" type="number" min="0">
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div v-for="(opc, i) in vistas_vivienda_opc" :key="opc.name" class="col-3 col-md-2 mt-4  align-self-end">
                        <label class="font-weight-bold d-block text-center" :for="'numVistas' + i" >
                            <img :src="opc.img">
                            <p class="mb-0 mt-1">{{ opc.name }}</p>
                        </label>
                        <input class="form-control" type="number" min="0" :id="'numVistas' + i" name="numVistas">
                    </div>
                </div>
            </div>


            <div class="col-12 mt-5 mb-3">
                <div class="form-inline mt-2">
                <label class="form-check-label">Si no es alguna de las anteriores, especifíquela</label>
                <input v-model="form.encimera_otra" class="form-control ml-2" />
                </div>                        
            </div>
        </div>

        <!-- Datos relevantes -->
        <div class="row" v-if="page==5">
            <div class="col-12 form-group">
                
                <label class="h4 mt-2">Datos relevantes</label>
                
                <!-- habitabilidad    -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <label class="h5">Habitabilidad</label>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Tiene cédula de habitabilidad</label>
                    </div>
                    
                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in cedulaHabitabilidadOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'cedulaHabitabilidad' + i" :value="opc.name" name="cedulaHabitabilidad" class="custom-control-input">
                            <label class="custom-control-label" :for="'cedulaHabitabilidad' + i">{{ opc.name }}</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Ha tenido la vivienda denuncias por defectos o vicios</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in tieneDenunciasDefectosOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'tieneDenunciasDefectos' + i" :value="opc.name" name="tieneDenunciasDefectos" class="custom-control-input">
                            <label class="custom-control-label" :for="'tieneDenunciasDefectos' + i">{{ opc.name }}</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Ha sufrido la vivienda algún robo</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'haSufridoRobo' + i" :value="opc.name" name="haSufridoRobo" class="custom-control-input">
                            <label class="custom-control-label" :for="'haSufridoRobo' + i">{{ opc.name }}</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Ha sufrido otra vivienda vecina algún robo</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'vecinoHaSufridoRobo' + i" :value="opc.name" name="vecinoHaSufridoRobo" class="custom-control-input">
                            <label class="custom-control-label" :for="'vecinoHaSufridoRobo' + i">{{ opc.name }}</label>
                        </div>
                    </div>

                </div>

                <!-- inquilino -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <label class="h5">Inquilino</label>
                        <img src="img/relevante/RELEVANTEIMG0001.jpg" class="img-borde ml-3">
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Tiene inquilino</label>
                    </div>
                    
                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'tieneInquilino' + i" :value="opc.name" name="tieneInquilino" class="custom-control-input">
                            <label class="custom-control-label" :for="'tieneInquilino' + i">{{ opc.name }}</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Se ha registrado el contrato en el registro de la propiedad</label>
                    </div>
                    
                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'registradoContrato' + i" :value="opc.name" name="registradoContrato" class="custom-control-input">
                            <label class="custom-control-label" :for="'registradoContrato' + i">{{ opc.name }}</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Mensualidad que paga el inquilino</label>
                    </div>
                    
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <input type="number" id="mensualidadInquilino" name="mensualidadInquilino" class="form-control" min="0">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 form-group">
                        <label class="font-weight-bold mt-2">Qué gastos paga el inquilino además de la renta</label>
                        <div class="row">
                            <div class="col">
                                <div v-for="(opc, i) in gastosInquilinoOpc" :key="opc.name" class="form-check form-check-inline">
                                    <div class="col-12">
                                        <input class="form-check-input" type="checkbox" :id="'gastosInquilino' + i" :value="opc.name">
                                        <label class="form-check-label" :for="'gastosInquilino' + i">{{ opc.name }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="form-inline mt-2">
                            <label class="form-check-label">Si hay otra distinta de las anteriores, especifíquela</label>
                            <input class="form-control ml-2" />
                            </div>                        
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="font-weight-bold">Deuda total del inquilino a fecha de hoy por todos los conceptos</label>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <input class="form-control" min="0">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="font-weight-bold">Meses que le quedan de alquiler hasta el final del contrato</label>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <input class="form-control" min="0">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- vivienda ocupada -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <label class="h5">Vivienda ocupada</label>
                        <img src="img/relevante/RELEVANTEIMG0002.jpg" class="img-borde ml-3">
                    </div>

                    <div class="col-12 form-group">
                        <div class="row">
                            <div class="col">
                                <div v-for="(opc, i) in haEstadoOcupadaOpc" :key="opc.name" class="form-check form-check-inline">
                                    <div class="col-12">
                                        <input class="form-check-input" type="checkbox" :id="'haEstadoOcupada' + i" :value="opc.name">
                                        <label class="form-check-label" :for="'haEstadoOcupada' + i">{{ opc.name }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="form-inline mt-2">
                            <label class="form-check-label">Si hay otra distinta de las anteriores, especifíquela</label>
                            <input class="form-control ml-2" />
                            </div>                        
                        </div>
                    </div>

                </div>

                <!-- comunidad -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <label class="h5">Comunidad</label>
                        <img src="img/relevante/RELEVANTEIMG0003.jpg" class="img-borde ml-3">
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Coeficiente de participación en la comunidad</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <input type="number" class="form-control" min="0" max="100">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Gastos mensuales ordinarios de comunidad</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <input type="number" class="form-control" min="10" max="20000">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Gastos mensuales extraordinarios (derramas)</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <input type="number" class="form-control" min="10" max="20000">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Meses pendiente de pago de derramas</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <input type="number" class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Deuda total que soporta la comunidad por morosidad de vecinos</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <input type="number" class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Ha tenido el edificio denuncias por defectos o vicios</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'haTenidoDenuncias' + i" :value="opc.name" name="haTenidoDenuncias" class="custom-control-input">
                            <label class="custom-control-label" :for="'haTenidoDenuncias' + i">{{ opc.name }}</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Tiene la comunidad denunciado a algún vecino por reforma propia o en zona común</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'comunidadDenunciaVecReforma' + i" :value="opc.name" name="comunidadDenunciaVecReforma" class="custom-control-input">
                            <label class="custom-control-label" :for="'comunidadDenunciaVecReforma' + i">{{ opc.name }}</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Tiene la comunidad denunciado a algún vecino por asunto de convivencia</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'comunidadDenunciaVecConvivencia' + i" :value="opc.name" name="comunidadDenunciaVecConvivencia" class="custom-control-input">
                            <label class="custom-control-label" :for="'comunidadDenunciaVecConvivencia' + i">{{ opc.name }}</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="font-weight-bold mt-2">Tiene la comunidad pendiente de aprobar un arreglo importante para la comunidad</label>
                    </div>

                    <div class="col-12 mb-3">
                        <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                            <input type="radio" :id="'comunidadPendienteArregloImp' + i" :value="opc.name" name="comunidadPendienteArregloImp" class="custom-control-input">
                            <label class="custom-control-label" :for="'comunidadPendienteArregloImp' + i">{{ opc.name }}</label>
                        </div>
                    </div>

                    <div class="col-12 form-group">
                        <label class="font-weight-bold mt-2">Daños sin arreglar en la comunidad</label>
                        <div class="row mx-2">
                            <div v-for="(opc, i) in daniosComunidadOpc" :key="opc.name" class="col-3">
                                <input class="form-check-input" type="checkbox" :id="'daniosComunidad' + i" :value="opc.name">
                                <label class="form-check-label" :for="'daniosComunidad' + i">{{ opc.name }}</label>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="form-inline mt-2">
                            <label class="form-check-label">Si no es alguna de las opciones anteriores, especifíquela</label>
                            <input class="form-control ml-2" />
                            </div>                        
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <!-- Ubicación -->
        <div class="row" v-if="page==6">
            <div class="col-12 form-group">
                
                <label class="h4 mt-2">Ubicación</label>
                
                <!-- Ubicación    -->
                

                <div class="row">
                    <div v-for="(opc, i) in ubicacionTipoOpc" :key="opc.name" class="form-check">
                        <div class="col-12">
                            <input class="form-check-input" type="checkbox" :id="'ubicacionTipo' + i" :value="opc.name">
                        </div>
                        <div class="col-12">
                            <label class="form-check-label" :for="'ubicacionTipo' + i">
                                <span class="form-check-label">{{ opc.name }}</span>
                                <img :src="opc.img" class="d-block" >
                            </label>
                        </div>
                    </div>
                </div>

                <label class="font-weight-bold mt-2">Tiene la localidad</label>
                <div class="row flex-nowrap">
                    <div v-for="(opc, i) in ubicacionLocalidadOpc" :key="opc.name" class="col item-localidad">
                        <div class="col-12  align-self-end px-0">

                            <section class="border text-center">
                                <input class="" type="checkbox" :id="'ubicacionLocalidad' + i" :value="opc.name">
                                <label class="form-check-label" :for="'ubicacionLocalidad' + i">
                                    <span class="form-check-label">{{ opc.name }}</span>
                                    <img :src="opc.img" class="d-block mx-auto" >
                                </label>
                            </section>


                            <div v-if="opc.l1" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" :id="'ubicacionLocalidad' + i + 'l1'" :name="'ubicacionLocalidad' + i" class="custom-control-input">
                                <label class="custom-control-label" :for="'ubicacionLocalidad' + i + 'l1'">{{ opc.l1 }} </label>
                            </div>

                            <div v-if="opc.l2" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" :id="'ubicacionLocalidad' + i + 'l2'" :name="'ubicacionLocalidad' + i" class="custom-control-input">
                                <label class="custom-control-label" :for="'ubicacionLocalidad' + i + 'l2'">{{ opc.l2 }} </label>
                            </div>

                            <div v-if="opc.l3" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" :id="'ubicacionLocalidad' + i + 'l3'" :name="'ubicacionLocalidad' + i" class="custom-control-input">
                                <label class="custom-control-label" :for="'ubicacionLocalidad' + i + 'l3'">{{ opc.l3 }} </label>
                            </div>
                        </div>
                    </div>
                </div>                    
                <div class="col-12 mb-3">
                    <div class="form-inline mt-2">
                        <label class="form-check-label">Otro no reflejado que quiera reseñar</label>
                        <input class="form-control ml-2" />
                    </div>                        
                </div>
            </div>

            <div class="col-12 form-group">
                <label class="h4">Orientación</label>
                <img src="img/ubicacion/UBICACIÓNIMG0014.jpg" class="border d-block">
                <div class="row">
                    <div class="col mt-3">
                        <div v-for="(opc, i) in orientacionOpc" :key="opc.name" class="form-check form-check-inline">
                            <div class="col-12">
                                <input class="form-check-input" type="checkbox" :id="'orientacion' + i" :value="opc.name">
                                <label class="form-check-label" :for="'orientacion' + i">{{ opc.name }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Tipo -->
        <div class="row" v-if="page==7">
            <div class="col-12 form-group">

                <label class="h4 mt-2">Tipo de vivienda</label>

                <div class="col-12 mt-4">
                    <label class="h5">Estándar:</label>
                    <img src="img/tipo/TIPOIMG0001.jpg" class="img-borde ml-3">
                </div>
         
                <div class="col-12 mb-3">
                    <div v-for="(opc, i) in tipoViviendaOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                        <input type="radio" :id="'tipoVivienda' + i" :value="opc.name" name="tipoVivienda" class="custom-control-input">
                        <label class="custom-control-label" :for="'tipoVivienda' + i">{{ opc.name }}</label>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-inline mt-2">
                        <label class="form-check-label">Si hay otra distinta de las anteriores, especifíquela</label>
                        <input class="form-control ml-2" />
                    </div>                        
                </div>


                <div class="col-12 form-group">
                    <label class="font-weight-bold mt-2">Especial/singular</label>
                    <div class="row">
                            <div v-for="(opc, i) in tipoEspecialOpc" :key="opc.name" class="form-check">
                            <div class="col-12">
                                <input class="form-check-input" type="checkbox" :id="'tipoEspecial' + i" :value="opc.name">
                            </div>
                            <div class="col-12">
                                <label class="form-check-label" :for="'tipoEspecial' + i">
                                    <span class="form-check-label">{{ opc.name }}</span>
                                    <img :src="opc.img" class="d-block" >
                                </label>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-inline mt-2">
                                <label class="form-check-label">Si hay otra distinta de las anteriores, especifíquela</label>
                                <input class="form-control ml-2" />
                            </div>                        
                        </div>
                    </div>                
                </div>

                <div class="col-12">
                    <label class="font-weight-bold mt-2">Está calificada oficialmente como bien de interés cultural</label>
                </div>

                <div class="col-12 mb-3">
                    <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                        <input type="radio" :id="'bienInteresCultural' + i" :value="opc.name" name="bienInteresCultural" class="custom-control-input">
                        <label class="custom-control-label" :for="'bienInteresCultural' + i">{{ opc.name }}</label>
                    </div>
                </div>
                
            </div>
            
        </div>


        <!-- Interior -->
        <div class="row" v-if="page==8">
            <div class="col-12 form-group">

                <label class="h4 mt-2">Interior</label>

                <div class="col-12 mt-4">
                    <label class="h5">Distribución:</label>
                    <img src="img/interior/INTIMG0001.jpg" class="img-borde ml-3">
                </div>
         
                <div class="row mt-5">
                    <div class="col-12 col-md-4" v-for="(opc) in interiorDistOpc" :key="opc.name">
                        <div class="row mt-1">
                            <div class="col-4">
                                <label>{{ opc.name }}</label>
                            </div>
                            <div class="col-4">
                                <input class="form-control" placeholder="Nº">
                            </div>
                            <div class="col-4">
                                <input class="form-control" placeholder="m2">
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-check-label">Si no es alguna de las opciones anteriores, especifíquela:</label>
                </div>

                <div class="col-12 mt-4 px-0">
                    <label class="h5">Armarios:</label>
                    <img src="img/interior/INTIMG0002.jpg" class="img-borde ml-3">
                    <p class="text-info"> Rellene un formulario por cada tipo de armario de la vivienda</p>
                </div>

                <div class="row px-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <label class="font-weight-bold mt-2">Empotrado</label>
                            </div>

                            <div class="col-12 mb-3">
                                <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" :id="'armarioEmpotrado' + i" :value="opc.name" name="armarioEmpotrado" class="custom-control-input">
                                    <label class="custom-control-label" :for="'armarioEmpotrado' + i">{{ opc.name }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <label class="font-weight-bold mt-2">Con puertas</label>
                            </div>

                            <div class="col-12 mb-3">
                                <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" :id="'armarioConPuertas' + i" :value="opc.name" name="armarioConPuertas" class="custom-control-input">
                                    <label class="custom-control-label" :for="'armarioConPuertas' + i">{{ opc.name }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row px-2">                        
                        <div v-for="(opc, i) in armarioNumPuertas" :key="opc.name" class="col-4 custom-radio">
                            <input type="radio" :id="'armarioNumPuertas' + i" :value="opc.name" name="armarioNumPuertas" class="custom-control-input">
                            <label class="custom-control-label" :for="'armarioNumPuertas' + i">{{ opc.name }}
                                <img :src="opc.img" class="d-block" >
                            </label>
                        </div>                    
                    </div>
                </div>

                <div class="col-12">
                    <div class="row px-2">                        
                        <div v-for="(opc, i) in armarioMaterialOpc" :key="opc.name" class="col-4 custom-radio">
                            <input type="radio" :id="'armarioMaterial' + i" :value="opc.name" name="armarioMaterial" class="custom-control-input">
                            <label class="custom-control-label" :for="'armarioMaterial' + i">
                                {{ opc.name }}
                                <img v-if="opc.img" :src="opc.img" class="d-block" >
                            </label>
                        </div>                    
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <div class="form-inline mt-4">
                    <label class="form-check-label">Si no es alguna de las anteriores, especifíquela</label>
                    <input v-model="form.encimera_otra" class="form-control ml-2" />
                    </div>                        
                </div>

                <div class="col-12 my-3 px-0">
                    <div class="row">
                        <div class="col-4">
                            <label class="font-weight-bold mt-2">Número total de armarios del tipo descrito</label>
                            <input class="form-control" type="number" min="0">
                        </div>
                    </div>
                </div>

                <div class="col-12 my-3 px-0">
                    <button class="btn btn-success btn-sm">Añadir otro tipo de armario</button>
                </div>
            </div>
            
        </div>

        <!-- Puertas -->
        <div class="row" v-if="page==9">
            <div class="col-12 form-group">

                <label class="h4 mt-2">Puertas</label>

                <div class="col-12 mt-4 px-0">
                    <label class="h5">Modelo:</label>
                </div>

                <div class="col-12">
                    <div class="row px-2">
                        <div v-for="(opc, i) in puertasModelosOpc" :key="opc.name" class="col custom-radio">
                            <input type="radio" :id="'puertasModelos' + i" :value="opc.name" name="puertasModelos" class="custom-control-input">
                            <label class="custom-control-label" :for="'puertasModelos' + i">{{ opc.name }}
                                <img :src="opc.img" class="d-block" >
                            </label>
                        </div>
                    </div>
                </div>


                <div class="col-12 mt-4 px-0">
                    <label class="h5">Número de hojas del mismo tipo:</label>
                </div>
                <div class="col-12">
                    <div class="row px-2">
                        <div v-for="(opc, i) in puertasHojasOpc" :key="opc.name" class="col custom-radio">
                            <input type="radio" :id="'puertasHojas' + i" :value="opc.name" name="puertasHojas" class="custom-control-input">
                            <label class="custom-control-label" :for="'puertasHojas' + i">{{ opc.name }}
                                <img :src="opc.img" class="d-block" >
                            </label>
                        </div>
                    </div>
                </div>
         
                <div class="col-12 mb-3 px-0">
                    <div class="form-inline mt-4">
                    <label class="form-check-label">Si tiene más de 6 hojas, especifique el número total</label>
                    <input class="form-control ml-2" />
                    </div>                        
                </div>

                <div class="col-12 mt-4 px-0">
                    <label>Tamaño total de la puerta, incluyendo todas sus hojas y en cm:</label>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6"><p>Largo</p></div>
                            <div class="col-6"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6"><p>Ancho</p></div>
                            <div class="col-6"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6"><p>Alto</p></div>
                            <div class="col-6"><input class="form-control" type="number" min="0"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4 px-0">
                    <label class="h5">Material</label>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="row mt-4">
                                <div class="col">
                                    <p>Metálica</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/puertas/PUERTASIMG0015.jpg" class="d-block border" >
                                </div>
                                <div class="col-8 custom-radio">
                                    <div>
                                        <input type="radio" id="puertasMaterial1" value="hierro" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial1">Hierro</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="puertasMaterial2" value="acero" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial2">Acero</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="puertasMaterial3" value="aluminio" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial3">Aluminio</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="puertasMaterial4" value="custom_metal" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial4">
                                            <span>Otro:</span>
                                            <input class="form-control form-control-sm">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="row mt-4">
                                <div class="col">
                                    <p>Plástico o material sintético</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/puertas/PUERTASIMG0016.jpg" class="d-block border" >
                                </div>
                                <div class="col-8 custom-radio">
                                    <div>
                                        <input type="radio" id="puertasMaterial5" value="pvc" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial5">PVC</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="puertasMaterial6" value="otro_plastico" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial6">Otro plástico</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="puertasMaterial7" value="sintetico" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial7">Sintético</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="puertasMaterial8" value="custom_plastico" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial8">
                                            <span>Otro:</span>
                                            <input class="form-control form-control-sm">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="row mt-4">
                                <div class="col">
                                    <p>Vidrio</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/puertas/PUERTASIMG0017.jpg" class="d-block border" >
                                </div>
                                <div class="col-8 custom-radio">
                                    <div>
                                        <input type="radio" id="puertasMaterial9" value="chapada" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial9">Seleccionar</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="row mt-4">
                                <div class="col">
                                    <p>Chapada de madera, con interior de otros materiales</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/puertas/PUERTASIMG0018.jpg" class="d-block border" >
                                </div>
                                <div class="col-8 custom-radio">
                                    <div>
                                        <input type="radio" id="puertasMaterial10" value="chapada" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial10">Seleccionar</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="row mt-4">
                                <div class="col">
                                    <p>Madera maciza</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/puertas/PUERTASIMG0019.jpg" class="d-block border" >
                                </div>
                                <div class="col-8 custom-radio">
                                    <div>
                                        <input type="radio" id="puertasMaterial11" value="chapada" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial11">Seleccionar</label>
                                        <select class="form-control">
                                            <option v-for="(opt, i) in puertasTipoMaderaOpc" :key="i">{{ opt.name }} </option>
                                        </select>

                                        <p class="text-info mt-3 mb-0">Otra no reflejada en esta selección: especifíquela</p>
                                        <input class="form-control" placeholder="Otra">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="row mt-4">
                                <div class="col">
                                    <p>Madera externa e interna con esqueleto de metal u otro material</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/puertas/PUERTASIMG0020.jpg" class="d-block border" >
                                </div>
                                <div class="col-8 custom-radio">
                                    <div>
                                        <input type="radio" id="puertasMaterial12" value="chapada" name="puertasMaterial" class="custom-control-input">
                                        <label class="custom-control-label" for="puertasMaterial12">Seleccionar</label>
                                        <select class="form-control">
                                            <option v-for="(opt, i) in puertasTipoMaderaOpc" :key="i">{{ opt.name }} </option>
                                        </select>
                                        
                                        <p class="text-info mt-3 mb-0">Otra no reflejada en esta selección: especifíquela</p>
                                        <input class="form-control" placeholder="Otra">
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>

            <!-- movimiento -->
            <div class="col-12 form-group">
                <div class="col-12 mt-4 px-0">
                    <label class="h5">Movimiento:</label>
                </div>
            </div>

            <div class="col-12 px-3 form-group">
                <div class="row px-4">                        
                    <div v-for="(opc, i) in puertasMovimientoOpc" :key="opc.name" class="col-12 col-md-4 custom-radio mt-3">
                        <input type="radio" :id="'puertasMovimiento' + i" :value="opc.name" name="puertasMovimiento" class="custom-control-input">
                        <label class="custom-control-label" :for="'puertasMovimiento' + i">
                            <img :src="opc.img" class="d-block" >
                        </label>
                    </div>                    
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="form-inline mt-2">
                    <label class="form-check-label">Otra no reflejada en esta selección: especifíquela</label>
                    <input class="form-control ml-2" />
                </div>
            </div>

            <div class="col-12 form-group">
                <div class="col-12 mt-4 px-0">
                    <label class="h5">Tipo de corredera:</label>
                </div>
            </div>
            <div class="col-12 px-3 form-group">
                <div class="row px-4">                        
                    <div v-for="(opc, i) in puertasCorrederaOpc" :key="opc.name" class="col-12 col-md-4 custom-radio mt-3">
                        <input type="radio" :id="'puertasCorredera' + i" :value="opc.name" name="puertasCorredera" class="custom-control-input">
                        <label class="custom-control-label" :for="'puertasCorredera' + i">
                            <img :src="opc.img" class="d-block" >
                        </label>
                    </div>                    
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="form-inline mt-2">
                    <label class="form-check-label">Otra no reflejada en esta selección: especifíquela</label>
                    <input class="form-control ml-2" />
                </div>
            </div>
            <!-- fin movimiento -->

            <div class="col-12 form-group">
                <div class="col-12 mt-4 px-0">
                    <label class="h5">Relieve:</label>
                </div>
            </div>
            <div class="col-12 px-3 form-group">
                <div class="row px-4">                        
                    <template  v-for="(opc, i) in puertasRelieveOpc" >

                        <div v-if="i == 5 || i == 10 || i == 18" :key="opc.name + 'divisor'" class="col-12">
                            <p v-if="i == 18" class="mt-4 mb-0">
                                Artístico
                            </p>
                        </div>

                        <div class="col custom-radio mt-3" :key="opc.name">
                            <input type="radio" :id="'puertasRelieve' + i" :value="opc.name" name="puertasRelieve" class="custom-control-input">
                            <label class="custom-control-label" :for="'puertasRelieve' + i">
                                <img :src="opc.img" class="d-block" >
                            </label>
                        </div>
                    </template>                    
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-inline mt-2">
                    <label class="form-check-label">Otra no reflejada en esta selección: especifíquela</label>
                    <input class="form-control ml-2" />
                </div>
            </div>



            <div class="col-12 form-group">
                <div class="col-12 mt-4 px-0">
                    <label class="h5">Acabado:</label>
                </div>
            </div>
            <div class="col-12 px-3 form-group">
                <div class="row px-4">
                    <div class="col custom-radio mt-3" v-for="(opc, i) in puertasAcabadoOpc" :key="opc.name">
                        <input type="radio" :id="'puertasAcabado' + i" :value="opc.name" name="puertasAcabado" class="custom-control-input">
                        <label class="custom-control-label" :for="'puertasAcabado' + i">
                            {{opc.name}}
                            <img :src="opc.img" class="d-block" >
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-inline mt-2">
                    <label class="form-check-label">Otra no reflejada en esta selección: especifíquela</label>
                    <input class="form-control ml-2" />
                </div>
            </div>


            <div class="col-12 form-group">
                <div class="col-12 mt-4 px-0">
                    <label class="h5">Con incrustaciones de:</label>
                </div>
            </div>
            <div class="col-12 px-3 form-group">
                <div class="row px-4">
                    <div class="col custom-radio mt-3" v-for="(opc, i) in puertasIncrutacionesOpc" :key="opc.name">
                        <input type="radio" :id="'puertasIncrutaciones' + i" :value="opc.name" name="puertasIncrutaciones" class="custom-control-input">
                        <label class="custom-control-label" :for="'puertasIncrutaciones' + i">
                            {{opc.name}}
                            <img v-if="opc.img" :src="opc.img" class="d-block" >
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-inline mt-2">
                    <label class="form-check-label">Otra no reflejada en esta selección: especifíquela</label>
                    <input class="form-control ml-2" />
                </div>
            </div>

            <div class="col-12 form-group">
                <div class="col-12 mt-4 px-0">
                    <label class="h5">Tipo de cristalera:</label>
                </div>
            </div>
            <div class="col-12 px-3 form-group">
                <div class="row px-4">                        
                    <div class="col custom-radio mt-3"  v-for="(opc, i) in puertasCristaleraOpc"  :key="opc.name">
                        <input type="radio" :id="'puertasCristalera' + i" :value="opc.name" name="puertasCristalera" class="custom-control-input">
                        <label class="custom-control-label" :for="'puertasCristalera' + i">
                            <img :src="opc.img" class="d-block" >
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-inline mt-2">
                    <label class="form-check-label">Otra no reflejada en esta selección: especifíquela</label>
                    <input class="form-control ml-2" />
                </div>
            </div>

            <div class="col-12 form-group">
                <div class="col-12 mt-4 px-0">
                    <label class="h5">Moldura de cristal:</label>
                </div>
            </div>
            <div class="col-12 px-3 form-group">
                <div class="row px-4">                        
                    <div class="col custom-radio mt-3"  v-for="(opc, i) in puertasMolduraCristalOpc"  :key="opc.name">
                        <input type="radio" :id="'puertasMolduraCristal' + i" :value="opc.name" name="puertasMolduraCristal" class="custom-control-input">
                        <label class="custom-control-label" :for="'puertasMolduraCristal' + i">
                            <img :src="opc.img" class="d-block" >
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-inline mt-2">
                    <label class="form-check-label">Otra no reflejada en esta selección: especifíquela</label>
                    <input class="form-control ml-2" />
                </div>
            </div>

            <div class="col-12 form-group">
                <label class="font-weight-bold mt-2">Seguridad</label>
                <div class="row">
                        <div v-for="(opc, i) in puertasSeguridadOpc" :key="opc.value" class="form-check">
                        <div class="col-12">
                            <input class="form-check-input" type="checkbox" :id="'puertasSeguridad' + i" :value="opc.name">
                        </div>
                        <div class="col-12">
                            <label class="form-check-label" :for="'puertasSeguridad' + i">
                                <span v-if="opc.name" class="form-check-label">{{ opc.name }}</span>
                                <img :src="opc.img" class="d-block" >
                            </label>
                        </div>
                    </div>
                    
                </div>                
            </div>

            <div class="col-12 mb-3 px-0">
                <div class="form-inline mt-2">
                    <label class="font-weight-bold mt-2">Otros detalles que se deben tener en cuenta y no han sido descritos</label>
                    <input class="form-control ml-2" />
                </div>                        
            </div>

            <div class="col-12 mb-3 px-0">
                <label class="font-weight-bold mt-2">Adaptadas a minusvalidos</label>

                <div v-for="(opc, i) in simpleSiNoOpc" :key="opc.name" class="custom-control custom-radio custom-control-inline">
                    <input type="radio" :id="'adaptadaMinusvalidos' + i" :value="opc.name" name="adaptadaMinusvalidos" class="custom-control-input">
                    <label class="custom-control-label" :for="'adaptadaMinusvalidos' + i">{{ opc.name }}</label>
                </div>
            </div>

            <div class="col-12 my-3 px-0">
                <div class="form-inline mt-2">
                    <label class="font-weight-bold mt-2">CANTIDAD DE PUERTAS HAY EN LA VIVIENDA CON LAS CARACTERÍSTICAS DESCRITAS</label>
                    <input class="form-control ml-2" type="number"/>
                </div>
            </div>

            <div class="col-12 my-3 px-0">
                <button class="btn btn-success btn-sm">Añadir otro tipo de armario</button>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-right">
                <span class="btn btn-primary btn-sm mt-4" v-on:click="paginaAnt()">Anterior</span>
                <span class="btn btn-primary btn-sm mt-4" v-on:click="paginaSig()">Siguiente</span>
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

            for(var i = 66; i<=117; i++){
                let num = (i < 100) ? "00" + i : "0" + i
                this.puertasCristaleraOpc = [
                    ...this.puertasCristaleraOpc,
                    {name: "" + num, img: "img/puertas/PUERTASIMG"  + num +".jpg"},
                ]
            }

            for(var i = 118; i<=123; i++){
                let num =  "0" + i
                this.puertasMolduraCristalOpc = [
                    ...this.puertasMolduraCristalOpc,
                    {name: "" + num, img: "img/puertas/PUERTASIMG"  + num +".jpg"},
                ]
            }

        },
        computed: {
            porc_progreso : function () {
                return Math.round( (this.page-1) / this.total_pages * 100)
            }
        },
        data: function () {
            return {
                page: 9, // página inicial
                total_pages: 9,
                anio_construccion_opciones: [],
                form: {
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
                vistas_vivienda_opc: [
                    {
                        name: "Ciudad",
                        img: "img/GENERALIMG0023.jpg"
                    },
                    {
                        name: "Campo",
                        img: "img/GENERALIMG0024.jpg"
                    },
                    {
                        name: "Pueblo",
                        img: "img/GENERALIMG0025.jpg"
                    },
                    {
                        name: "Monumental",
                        img: "img/GENERALIMG0026.jpg"
                    },
                    {
                        name: "Industrial",
                        img: "img/GENERALIMG0027.jpg"
                    },
                    {
                        name: "Playa",
                        img: "img/GENERALIMG0028.jpg"
                    },
                    {
                        name: "Mar",
                        img: "img/GENERALIMG0029.jpg"
                    },
                    {
                        name: "Parque/bosque",
                        img: "img/GENERALIMG0029.jpg"
                    },
                    {
                        name: "Montaña",
                        img: "img/GENERALIMG0031.jpg"
                    },
                    {
                        name: "Lago/pantano/río",
                        img: "img/GENERALIMG0032.jpg"
                    },
                ],
                cedulaHabitabilidadOpc: [
                    { name: "Si" },
                    { name: "Pendiente" },
                    { name: "No" },
                ],
                tieneDenunciasDefectosOpc: [
                    { name: "Sí y se han resuelto" },
                    { name: "Sí y no se han resuelto " },
                    { name: "No" },
                ],
                simpleSiNoOpc: [
                    { name: "Si" },
                    { name: "No" },
                ],
                gastosInquilinoOpc: [
                    { name: "Luz" },
                    { name: "Agua" },
                    { name: "Gas" },
                    { name: "Basura" },
                    { name: "Comunidad" },
                    { name: "Ibi" },
                ],
                haEstadoOcupadaOpc: [
                    { name: "No" },
                    { name: "No ha estado nunca ocupada" },
                    { name: "Ninguna vivienda de la comunidad ha estado alguna vez ocupada" },
                    { name: "Estuvo ocupada pero ya no lo está" },
                    { name: "Está ocupada actualmente" },
                    { name: "Está en proceso de desocupación" },
                ],
                daniosComunidadOpc: [
                    { name: "Humedades o filtraciones" },
                    { name: "Grietas leves en muros o tabiques" },
                    { name: "Grietas serias en muros o tabiques" },
                    { name: "Desprendimientos ocasionales" },
                    { name: "Desprendimientos habituales" },
                    { name: "Defectos en solados o paredes" },
                    { name: "Problemas eléctricos" },
                    { name: "Problemas de fontanería" },
                    { name: "Problemas de bajantes" },
                    { name: "Problemas en caldera" },
                    { name: "Problemas de sistema de calefacción" },
                    { name: "Problemas en chimeneas" },
                    { name: "Problemas en cubiertas o terrazas" },
                    { name: "Problemas en balcones" },
                    { name: "Problemas de ascensores" },
                    { name: "Problemas con restos arqueológicos" },
                    { name: "Problemas de higiene o salubridad" },
                    { name: "Problemas de toxicidad" }
                ],
                ubicacionTipoOpc : [
                    {
                        name: "Ciudad",
                        value: "Ciudad",
                        img: "img/ubicacion/UBICACIONIMG0001.jpg",
                    },
                    {
                        name: "Urbanización",
                        value: "Urbanización",
                        img: "img/ubicacion/UBICACIONIMG0002.jpg",
                    },
                    {
                        name: "Pueblo",
                        value: "Pueblo",
                        img: "img/ubicacion/UBICACIONIMG0003.jpg",
                    },
                    {
                        name: "Parcela",
                        value: "Parcela",
                        img: "img/ubicacion/UBICACIONIMG0004.jpg",
                    },
                    {
                        name: "Polígono",
                        value: "Polígono",
                        img: "img/ubicacion/UBICACIONIMG0005.jpg",
                    },
                    {
                        name: "Explotación agraria",
                        value: "Explotación agraria",
                        img: "img/ubicacion/UBICACIONIMG0006.jpg",
                    }
                ],
                ubicacionLocalidadOpc : [
                    {
                        name: "Playa",
                        img: "img/ubicacion/UBICACIONIMG0007.jpg",
                        l1: "Primera linea",
                        l2: "Segunda linea",
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Esquí",
                        img: "img/ubicacion/UBICACIONIMG0008.jpg",
                        l1: "Centro",
                        l2: "Periferia",
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Parque natural",
                        img: "img/ubicacion/UBICACIONIMG0009.jpg",
                        l1: "Dentro",
                        l2: "Próximo",
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Embalse/pantano",
                        img: "img/ubicacion/UBICACIONIMG0010.jpg",
                        l1: "Junto a",
                        l2: "Próximo",
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Zona turística",
                        img: "img/ubicacion/UBICACIONIMG0011.jpg",
                        l1: null,
                        l2: null,
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Zona monumental",
                        img: "img/ubicacion/UBICACIONIMG0012.jpg",
                        l1: "En casco histórico",
                        l2: "Próximo",
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Calificación de patrimonio de la humanidad",
                        img: "img/ubicacion/UBICACIONIMG0013.jpg",
                        l1: "En casco histórico",
                        l2: "Próximo",
                        l3: "A menos de 50Km",
                    }
                    
                ],
                orientacionOpc: [
                    {
                        name: "Norte",
                    },
                    {
                        name: "Sur",
                    },
                    {
                        name: "Este",
                    },
                    {
                        name: "Oeste",
                    },
                    {
                        name: "Noroeste",
                    },
                    {
                        name: "Noreste",
                    },
                    {
                        name: "Suroeste",
                    },
                    {
                        name: "Sureste",
                    }
                ],
                tipoViviendaOpc : [
                    { name: "Estudio" },
                    { name: "Apartamento" },
                    { name: "Piso" },
                    { name: "Ático" },
                    { name: "Loft en bajo" },
                    { name: "Loft piso alto" },
                    { name: "Duplex" },
                    { name: "Bajo" },
                    { name: "Adosado" },
                    { name: "Pareado" },
                    { name: "Casa individual" },
                    { name: "Casa con parcela" },
                    { name: "Casa con patio" },
                    { name: "Casa rural" },
                    { name: "Sótano" },
                    { name: "Casa con otras construcciones habitables" },
                ],
                tipoEspecialOpc: [
                    {
                        name: "Palacio",
                        img: "img/tipo/TIPOIMG0002.jpg",
                    },
                    {
                        name: "Casa señorial",
                        img: "img/tipo/TIPOIMG0002.jpg",
                    },
                    {
                        name: "Pazo",
                        img: "img/tipo/TIPOIMG0003.jpg",
                    },
                    {
                        name: "Castillo",
                        img: "img/tipo/TIPOIMG0004.jpg",
                    },
                    {
                        name: "Masía",
                        img: "img/tipo/TIPOIMG0005.jpg",
                    },
                    {
                        name: "Cortijo",
                        img: "img/tipo/TIPOIMG0006.jpg",
                    },
                    {
                        name: "Abadía, convento/monasterio",
                        img: "img/tipo/TIPOIMG0007.jpg",
                    },
                    {
                        name: "Hórreo",
                        img: "img/tipo/TIPOIMG0008.jpg",
                    },

                    {
                        name: "Caserío",
                        img: "img/tipo/TIPOIMG0009.jpg",
                    },
                    {
                        name: "Prefabricada madera",
                        img: "img/tipo/TIPOIMG0010.jpg",
                    },
                    {
                        name: "Prefabricada hormigón",
                        img: "img/tipo/TIPOIMG0011.jpg",
                    },
                    {
                        name: "Prefabricada metal",
                        img: "img/tipo/TIPOIMG0012.jpg",
                    },
                    {
                        name: "Prefabricada mixta",
                        img: "img/tipo/TIPOIMG0013.jpg",
                    },
                    {
                        name: "De madera, bungalow",
                        img: "img/tipo/TIPOIMG0014.jpg",
                    },
                    {
                        name: "Bajo tierra",
                        img: "img/tipo/TIPOIMG0015.jpg",
                    },
                    {
                        name: "Troglodita",
                        img: "img/tipo/TIPOIMG0016.jpg",
                    },
                    {
                        name: "Cabaña / choza",
                        img: "img/tipo/TIPOIMG0017.jpg",
                    },

                ],
                interiorDistOpc: [
                    {name: "Habitación"},
                    {name: "Hall"},
                    {name: "Baño"},
                    {name: "Cocina"},
                    {name: "Office"},
                    {name: "Habitación servicio"},
                    {name: "Puertas de acceso"},
                    {name: "Cuarto estar"},
                    {name: "Salón"},
                    {name: "Trastero"},
                    {name: "Plazas garaje"},
                    {name: "Bodega / despensa"},
                    {name: "Balcón"},
                    {name: "Terraza"},
                    {name: "Porche"},
                    {name: "Despacho"},
                    {name: "Biblioteca"},
                    {name: "Lavadero/ plancha"},
                    {name: "Buhardilla"},
                    {name: "Torreon"},
                    {name: "Patio"},
                    {name: "Vestidor"},
                    {name: "Gimnasio"},
                    {name: "Sala audio visual"},
                    {name: "Sala de juegos"},
                    {name: "Bar"},
                    {name: "Piscina climatizada"}
                ],
                armarioNumPuertas: [
                    {
                        name: "Una puerta",
                        img: "img/interior/INTIMG0003.jpg",
                    },
                    {
                        name: "De dos puertas",
                        img: "img/interior/INTIMG0004.jpg",
                    },
                    {
                        name: "De tres puertas",
                        img: "img/interior/INTIMG0005.jpg",
                    },
                    {
                        name: "De cuatro puertas",
                        img: "img/interior/INTIMG0006.jpg",
                    },
                    {
                        name: "De 5 puertas",
                        img: "img/interior/INTIMG0007.jpg",
                    },
                    {
                        name: "De 6 puertas o más",
                        img: "img/interior/INTIMG0008.jpg",
                    }
                ],
                armarioMaterialOpc: [
                    { name: "Una puerta" },
                    { name: "De madera maciza" },
                    { name: "Chapada de madera" },
                    { name: "Con cristal" },
                    { name: "Roble" },
                    { name: "Castaño" },
                    { name: "Cerezo " },
                    { name: "Nogal" },
                    { name: "Haya" },
                    { name: "Pino" },
                    { name: "Olivo" },
                    { name: "Olmo" },
                    { name: "Cedro" },
                    { name: "Ébano" },
                    { name: "Caoba" },
                    { name: "Madera" },
                    { name: "Teca" },
                    { name: "Iroko" },
                    { name: "Tropical" },
                    { name: "De espejo" },
                    { name: "De cristal" },
                    { name: "De obra" },
                    { name: "De material plástico o sintético" },
                    { name: "De material metálíco" }
                ],
                puertasModelosOpc: [
                    {
                        name: "Clásica",
                        img: "img/puertas/PUERTASIMG0001.jpg",
                    },
                    {
                        name: "Moderna",
                        img: "img/puertas/PUERTASIMG0002.jpg",
                    },
                    {
                        name: "Rústica",
                        img: "img/puertas/PUERTASIMG0003.jpg",
                    },
                    {
                        name: "Étnica",
                        img: "img/puertas/PUERTASIMG0004.jpg",
                    },
                    {
                        name: "Con cristal",
                        img: "img/puertas/PUERTASIMG0005.jpg",
                    },
                    {
                        name: "Vidriera",
                        img: "img/puertas/PUERTASIMG0006.jpg",
                    },
                    {
                        name: "Singular",
                        img: "img/puertas/PUERTASIMG0007.jpg",
                    },
                    {
                        name: "De emergencia",
                        img: "img/puertas/PUERTASIMG0008.jpg",
                    }
                ],
                puertasHojasOpc: [
                    {
                        name: "1",
                        img: "img/puertas/PUERTASIMG0009.jpg",
                    },
                    {
                        name: "2",
                        img: "img/puertas/PUERTASIMG00010.jpg",
                    },
                    {
                        name: "3",
                        img: "img/puertas/PUERTASIMG00011.jpg",
                    },
                    {
                        name: "4",
                        img: "img/puertas/PUERTASIMG00012.jpg",
                    },
                    {
                        name: "5",
                        img: "img/puertas/PUERTASIMG00013.jpg",
                    },
                    {
                        name: "6",
                        img: "img/puertas/PUERTASIMG00014.jpg",
                    },
                ],
                puertasTipoMaderaOpc: [
                    {name: "Caoba"},
                    {name: "Ébano"},
                    {name: "Teca"},
                    {name: "Iroko"},
                    {name: "Tropical"},
                    {name: "Roble"},
                    {name: "Nogal"},
                    {name: "Cerezo"},
                    {name: "Olivo"},
                    {name: "Olmo"},
                    {name: "Haya"},
                    {name: "Pino"},
                    {name: "Cedro"},
                    {name: "Castaño"},
                    {name: "Álamo"},
                    {name: "Abeto"},
                    {name: "Abedul"}
                ],
                puertasMovimientoOpc: [
                    {name: "abatible", img: "img/puertas/PUERTASIMG0021.jpg"},
                    {name: "pivotante", img: "img/puertas/PUERTASIMG0022.jpg"},
                    {name: "doble", img: "img/puertas/PUERTASIMG0023.jpg"},
                    {name: "multiple", img: "img/puertas/PUERTASIMG0024.jpg"},
                    {name: "plegable", img: "img/puertas/PUERTASIMG0025.jpg"},
                    {name: "corredera", img: "img/puertas/PUERTASIMG0026.jpg"},
                ],
                puertasCorrederaOpc: [
                    {name: "enfrentadas", img: "img/puertas/PUERTASIMG0027.jpg"},
                    {name: "corredera_y_fijo", img: "img/puertas/PUERTASIMG0028.jpg"},
                    {name: "paralelas", img: "img/puertas/PUERTASIMG0029.jpg"},
                    {name: "en_esquina", img: "img/puertas/PUERTASIMG0030.jpg"},
                    {name: "telescopicas", img: "img/puertas/PUERTASIMG0031.jpg"},
                    {name: "plegables", img: "img/puertas/PUERTASIMG0032.jpg"},
                    {name: "apilables", img: "img/puertas/PUERTASIMG0033.jpg"},
                ],
                puertasRelieveOpc: [
                    {name: "a01", img: "img/puertas/PUERTASIMG0034.jpg"},
                    {name: "a02", img: "img/puertas/PUERTASIMG0035.jpg"},
                    {name: "a03", img: "img/puertas/PUERTASIMG0036.jpg"},
                    {name: "a04", img: "img/puertas/PUERTASIMG0037.jpg"},
                    {name: "a05", img: "img/puertas/PUERTASIMG0038.jpg"},

                    {name: "b01", img: "img/puertas/PUERTASIMG0039.jpg"},
                    {name: "b02", img: "img/puertas/PUERTASIMG0040.jpg"},
                    {name: "b03", img: "img/puertas/PUERTASIMG0041.jpg"},
                    {name: "b04", img: "img/puertas/PUERTASIMG0042.jpg"},
                    {name: "b05", img: "img/puertas/PUERTASIMG0043.jpg"},

                    {name: "c01", img: "img/puertas/PUERTASIMG0044.jpg"},
                    {name: "c02", img: "img/puertas/PUERTASIMG0045.jpg"},
                    {name: "c03", img: "img/puertas/PUERTASIMG0046.jpg"},
                    {name: "c04", img: "img/puertas/PUERTASIMG0047.jpg"},
                    {name: "c05", img: "img/puertas/PUERTASIMG0048.jpg"},
                    {name: "c06", img: "img/puertas/PUERTASIMG0049.jpg"},
                    {name: "c07", img: "img/puertas/PUERTASIMG0050.jpg"},
                    {name: "c08", img: "img/puertas/PUERTASIMG0051.jpg"},

                    {name: "d01", img: "img/puertas/PUERTASIMG0052.jpg"},
                    {name: "d02", img: "img/puertas/PUERTASIMG0053.jpg"},
                    {name: "d03", img: "img/puertas/PUERTASIMG0054.jpg"},
                    {name: "d04", img: "img/puertas/PUERTASIMG0055.jpg"},
                    {name: "d05", img: "img/puertas/PUERTASIMG0055.jpg"},
                    {name: "d06", img: "img/puertas/PUERTASIMG0056.jpg"},
                    {name: "d07", img: "img/puertas/PUERTASIMG0057.jpg"},
                    {name: "d08", img: "img/puertas/PUERTASIMG0058.jpg"},

                ],

                puertasAcabadoOpc: [
                    {name: "Lacada", img: "img/puertas/PUERTASIMG0059.jpg"},
                    {name: "Barnizada", img: "img/puertas/PUERTASIMG0060.jpg"},
                    {name: "Pintada", img: "img/puertas/PUERTASIMG0061.jpg"},
                ],

                puertasIncrutacionesOpc: [
                    {name: "Hueso", img: "img/puertas/PUERTASIMG0062.jpg"},
                    {name: "Maderas nobles", img: "img/puertas/PUERTASIMG0063.jpg"},
                    {name: "Metal", img: "img/puertas/PUERTASIMG0064.jpg"},
                    {name: "Marfil", img: "img/puertas/PUERTASIMG0065.jpg"},
                    {name: "Combinación de anteriores", img: null},
                ],

                puertasCristaleraOpc: [ ],//llenado con js
                    
                puertasMolduraCristalOpc: [ ],//llenado con js

                puertasSeguridadOpc: [
                    {
                        value: "con_cerradura",
                        name: "Con cerradura",
                        img: "img/puertas/PUERTASIMG0124.jpg",
                    },
                    {
                        value: "sin_cerradura",
                        name: "Sin cerradura",
                        img: "img/puertas/PUERTASIMG0125.jpg",
                    },
                    {
                        value: "puerta_extra",
                        name: "Con puerta extra de entrada",
                        img: "img/puertas/PUERTASIMG0126.jpg",
                    },
                    {
                        value: "acorazada_g3",
                        name: "Puerta acorazada, grado 3",
                        img: "img/puertas/PUERTASIMG0127.jpg",
                    },
                    {
                        value: "acorazada_g4",
                        name: "Puerta acorazada, grado 4",
                        img: "img/puertas/PUERTASIMG0128.jpg",
                    },
                    {
                        value: "acorazada_g5",
                        name: "Puerta acorazada, grado 5",
                        img: "img/puertas/PUERTASIMG0129.jpg",
                    },
                    {
                        value: "anti_okupa",
                        name: "Puerta anti-okupa",
                        img: "img/puertas/PUERTASIMG0133.jpg",
                    },
                    {
                        value: "cilindro_antibumping",
                        name: "Cilindro antibumping",
                        img: "img/puertas/PUERTASIMG0130.jpg",
                    },
                    {
                        value: "cerradura_digital",
                        name: "Cerradura digital",
                        img: "img/puertas/PUERTASIMG0131.jpg",
                    },
                    {
                        value: "escudo_de_cerradura",
                        name: "Escudo de cerradura",
                        img: "img/puertas/PUERTASIMG0132.jpg",
                    },
                    {
                        value: "cerradura_con_huella_digital",
                        name: "Cerradura con huella digital",
                        img: "img/puertas/PUERTASIMG0134.jpg",
                    }
                ]
            }
        },
        methods: {
            paginaAnt(){
                if(this.page > 1) {
                    this.page--
                    window.scrollTo(0,0);
                }
            },
            paginaSig(){
                if(this.total_pages > this.page ) { 
                    this.page++
                    window.scrollTo(0,0);
                }
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
    .img-borde, .border{
        border: 1px dotted green;
    }

    .item-localidad{
        flex-grow: 1;
    }
</style>