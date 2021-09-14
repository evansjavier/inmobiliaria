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
        },
        computed: {
            porc_progreso : function () {
                return Math.round( (this.page-1) / this.total_pages * 100)
            }
        },
        data: function () {
            return {
                page: 1, // página inicial
                total_pages: 8,
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
                        img: "img/ubicacion/UBICACIÓNIMG0001.jpg",
                    },
                    {
                        name: "Urbanización",
                        value: "Urbanización",
                        img: "img/ubicacion/UBICACIÓNIMG0002.jpg",
                    },
                    {
                        name: "Pueblo",
                        value: "Pueblo",
                        img: "img/ubicacion/UBICACIÓNIMG0003.jpg",
                    },
                    {
                        name: "Parcela",
                        value: "Parcela",
                        img: "img/ubicacion/UBICACIÓNIMG0004.jpg",
                    },
                    {
                        name: "Polígono",
                        value: "Polígono",
                        img: "img/ubicacion/UBICACIÓNIMG0005.jpg",
                    },
                    {
                        name: "Explotación agraria",
                        value: "Explotación agraria",
                        img: "img/ubicacion/UBICACIÓNIMG0006.jpg",
                    }
                ],
                ubicacionLocalidadOpc : [
                    {
                        name: "Playa",
                        img: "img/ubicacion/UBICACIÓNIMG0007.jpg",
                        l1: "Primera linea",
                        l2: "Segunda linea",
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Esquí",
                        img: "img/ubicacion/UBICACIÓNIMG0008.jpg",
                        l1: "Centro",
                        l2: "Periferia",
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Parque natural",
                        img: "img/ubicacion/UBICACIÓNIMG0009.jpg",
                        l1: "Dentro",
                        l2: "Próximo",
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Embalse/pantano",
                        img: "img/ubicacion/UBICACIÓNIMG0010.jpg",
                        l1: "Junto a",
                        l2: "Próximo",
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Zona turística",
                        img: "img/ubicacion/UBICACIÓNIMG0011.jpg",
                        l1: null,
                        l2: null,
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Zona monumental",
                        img: "img/ubicacion/UBICACIÓNIMG0012.jpg",
                        l1: "En casco histórico",
                        l2: "Próximo",
                        l3: "A menos de 50Km",
                    },
                    {
                        name: "Calificación de patrimonio de la humanidad",
                        img: "img/ubicacion/UBICACIÓNIMG0013.jpg",
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