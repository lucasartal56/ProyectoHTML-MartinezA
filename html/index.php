<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>

    <div class="p-3 text-dark bg-success-subtle border-dark-subtle rounded-3">
        

        <!-- ----------------ESTE DIV CONTIENE TODO LO QUE SIGUE, DA COLOR AL FONDO------------------------- -->


        <div class="row">

            <div class="col-6">
                


                    <div class="p-3 text-dark bg-info border border-dark rounded-3">
                        <!-- p-1 text-dark bg-info-subtle border border-dark rounded-3
                        text-dark bg-info border border-dark rounded-3 -->
                        <div class="row">
                            <div class="col-4 justify-content-center">
                                <div class="p-2 bg-success border border-dark-subtle rounded-3">
                                    <img src="../images/iconoguardar.jpg" alt="" width="20px" height="auto"
                                        class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                            <div class="col-4 justify-content-center">
                                <div class="p-2 bg-warning border border-dark-subtle rounded-3">
                                    <img src="../images/iconoeditar.jpg" alt="" width="20px" height="auto"
                                        class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                            <div class="col-4 justify-content-center">
                                <div class="p-2 bg-danger border border-dark-subtle rounded-3">
                                    <img src="../images/iconoeliminar.jpg" alt="" width="20px" height="auto"
                                        class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-------------------------------------Aquí empieza el formulario------------------------>
                        <div class="row ">
                            <h3 class="text-center">Formulario de Información Personal</h3>
                            <div class="col-12 justify-content-center">
                                <div class="p-3 text-dark bg-info-subtle border-dark-subtle rounded-3">

                                    <!-- Aquí empieza el formulario -->
                                    <form action="#" method="get">
                                        <br><br>
                                        <div class="row">
                                            <div class="col-4 text-center">
                                                <label for="">CATÁLOGO</label>
                                            </div>
                                            <div class="col-4 text-center">
                                                <label for="">Nombre 1</label>
                                            </div>
                                            <div class="col-4 text-center">
                                                <label for="">Nombre 2</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <input type="number" class="form-control" placeholder="000000" name="catalogo">
                                            </div>
                                            <div class="col-4">

                                                <input type="text" class="form-control" placeholder="Ejemplo" name="nombre1">
                                            </div>
                                            <div class="col-4">

                                                <input type="text" class="form-control" placeholder="Ejemplo" name="nombre2">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-4 text-center">
                                                <label for="">Apellido 1</label>
                                            </div>
                                            <div class="col-4 text-center">
                                                <label for="">Apellido 2</label>
                                            </div>
                                            <div class="col-4 text-center">
                                                <label for="">Correo</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <input type="text" class="form-control" placeholder="Ejemplo" name="apellido1">
                                            </div>
                                            <div class="col-4">

                                                <input type="text" class="form-control" placeholder="Ejemplo" name="apellido2">
                                            </div>
                                            <div class="col-4">

                                                <input type="email" class="form-control" placeholder="@ejemplo.com" name="correo">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-3 text-center">
                                                <label for="">Edad</label>
                                            </div>
                                            <div class="col-3 text-center">
                                                <label for="">Sexo</label>
                                            </div>
                                            <div class="col-3 text-center">
                                                <label for="">Grado</label>
                                            </div>
                                            <div class="col-3 text-center">
                                                <label for="">Arma</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <input type="number" class="form-control" placeholder="00" name="edad">
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" aria-label="Default select example">

                                                    <option value="1">Masculino</option>
                                                    <option value="2">Femenino</option>
                                                    <option value="2">Prefiero no decirlo</option>
                                                    <option value="2">No sé</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <input type="text" class="form-control" placeholder="Ejemplo" name="grado">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" class="form-control" placeholder="Ejemplo" name="arma">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-6 text-center">
                                                <label for="">Dependencia</label>
                                            </div>
                                            <div class="col-6 text-center">
                                                <label for="">Cursos</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" class="form-control" placeholder="Ejemplo">
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Kaibil
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Paracaidista
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Informática
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <button class="btn btn-primary" type="submit">Enviar</button>
                                        </div>
                                        <!-- Aquí finaliza el formulario -->
                                        <br>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                
            </div>

            <!-- Aquí empieza el contenedor número 3 -->
            
            <div class="col-6">
                <div class="p-1 text-dark bg-info-subtle border border-dark rounded-3">
                    
                    <!-- Aquí comienza el carrousel -->

                    <div class="row">
                        <div class="col-12">
                            <div class="p-3 text-dark bg-info border-dark rounded-3">
                                <h3 class="text-center">Brigadas de Infantería del Ejército de Guatemala</h3>
                                
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <div class="p-3 text-dark bg-info border-dark-subtle rounded-3 mt-5">
                                <div id="carouselExampleIndicators" class="carousel slide">
                                    <div class="carousel-indicators">
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="12" aria-label="Slide 13"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="13" aria-label="Slide 14"></button>
                                    </div>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="../images/primerabrigada.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/logoprimera2.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/segundabrigada.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/segundalogo.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/tercerabrigada.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/terceralogo.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/cuartabrigada.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/logocuarta.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/quinta.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/quintalogo.jpg" class="d-block w-100" alt="...">
                                      </div> 
                                      <div class="carousel-item">
                                        <img src="../images/sexta.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/sextalogo.jpg" class="d-block w-100" alt="...">
                                      </div> 
                                      <div class="carousel-item">
                                        <img src="../images/septimalogo.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="../images/septima.jpg" class="d-block w-100" alt="...">
                                      </div>                                                    
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                                
                            </div>
                        </div>

                        <!-- Aquí empieza el acordión -->

                        <div class="col-6">
                            <div class="p-3 text-dark bg-info border-dark-subtle rounded-3">
                                <!-- Aqui empieza el codigo de bootstrap del carrusel -->
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Primera Brigada de Infantería 
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <strong>La Primera Brigada de Infantería “GLGL”,</strong> se encuentra ubicada en el Km. 474 de la ruta CA-13, hacia la cabecera departamental de la Isla de Flores, El Petén y está conformada por hombres y mujeres de uniforme que han sabido responder con valentía, dignidad, profundo sentido del deber y amor a la patria, desarrollando su trabajo diario, al servicio de la nación.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Segunda Brigada de Infantería
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <strong>La Segunda Brigada de Infantería, "CGRC", Zacapa,</strong> con sede en el departamento de Zacapa, conducirá operaciones bélicas y no bélicas, en apoyo a la misión constitucional del Ejército de Guatemala, basados en los Artículos 244 y 249, desarrollando una eficiente defensa, cooperación institucional, administración, profesionalización y proyección en su área de responsabilidad, y a orden del Estado Mayor de la Defensa Nacional en cualquier parte de la República.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Tercera Brigada de Infantería
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <strong>Tercera Brigada de Infantería “General Manuel Maximiliano Aguilar Santamaría”,</strong> La región sur oriente del país es protegida por los Soldados de Oriente, con sede en el departamento de Jutiapa; ubicada estratégicamente en el kilómetro 113.5 de la Ruta Interamericana CA-1, con área de responsabilidad operacional en los departamentos de Jutiapa, Jalapa y Santa Rosa, abarcando 8,237 kms², lo que representa el 7.6% del territorio nacional y dando cobertura a una población de 1,381,734 habitantes.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Cuarta Brigada de Infantería
                                          </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                            <strong>Cuarta Brigada de Infantería “G.J.R.B.”,</strong> situada en el municipio de Cuyotenango del departamento de Suchitepéquez, es el hogar de los soldados “Xancatales” quienes tienen el honor y alto compromiso de representar el nombre del Reformador de la Patria, el General Justo Rufino Barrios.
                                          </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Quinta Brigada de Infantería
                                          </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                            <strong>Quinta Brigada de Infantería “MGS”,</strong> cuya sede se encuentra en Huehuetenango, lleva el nombre del distinguido Mariscal Gregorio Solares, quien se destacó por su valentía en la batalla de la Arada en la que combatió al lado del Capitán General Rafael Carrera, su área de responsabilidad operacional se delimita a los departamentos de Huehuetenango, Quiché y Sololá, con una riqueza natural, multicultural, plurilingüe, pluricultural y multilingüe, es realzada por la cordillera azul de los Cuchumatanes, las imponentes ruinas de Zaculeu, la pintoresca Villa de Chichicastenango, el maravilloso lago de Atitlán y los bosques de Chuimequená. Este vasto territorio, constituye la cuna del legendario guerrero "Kaibil Balam" y del Héroe "Tecún Umán".
                                          </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Sexta Brigada de Infantería
                                          </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                            <strong>Sexta Brigada de Infantería "Coronel Antonio José de Irisarri",</strong>  con sede en Playa Grande, municipio de Ixcán, departamento del Quiché, conducirá operaciones bélicas, no bélicas, de cooperación integral y de ayuda humanitaria, a partir del día "D" y hora "H", en su Área de Responsabilidad Operacional; para mantener la independencia, soberanía, el honor de Guatemala, la integridad del territorio, la paz y seguridad interior, exterior y colectiva en la región y apoyar en situaciones de emergencia y calamidad pública; con el propósito de contribuir a mantener el ambiente de seguridad que coadyuve al desarrollo integral de la población.
                                          </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Séptima Brigada de Infantería
                                          </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                            <strong>Séptima Brigada de Infantería “General Kjell Eugenio Laugerud García”,</strong> conducirá operaciones bélicas y no bélicas, operaciones interinstitucionales, de seguridad y control en los departamentos de Baja Verapaz y el Progreso así como en los municipios de la cuenca del Polochic de Alta Verapaz, a partir del día “D” a la hora “H” con la finalidad de coadyuvar al desarrollo de los guatemaltecos, contrarrestando las amenazas multidimensionales y apoyar a las instituciones para brindar respuesta inmediata y eficiente ante desastres.
                                          </div>
                                        </div>
                                      </div>

                                  </div>
                                  <!-- Aqui finaliza el carrusel de bootstrap -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

        <br><br>
            <!-- Aquí empieza la página 2 de la tabla -->
        <div class="row">
            <div class="col-6">
                <div class="p-3 text-dark bg-info-subtle border border-dark rounded-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="p-3 text-center bg-info rounded-3">
                                <h3>Tabla de Información</h3>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-3 text-center bg-info rounded-3">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Catálogo</th>
                                                <th>Nombre1</th>
                                                <th>Nombre2</th>
                                                <th>Apellido1</th>
                                                <th>Apellido2</th>
                                                <th>Correo</th>
                                                <th>Edad</th>
                                                <th>Grado</th>
                                                <th>Arma</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                <?php echo isset($_GET["catalogo"]) ? $_GET["catalogo"] : ""; ?>
                                                </td>
                                                <td>
                                                <?php echo isset($_GET["nombre1"]) ? $_GET["nombre1"] : ""; ?>
                                                </td>
                                                <td>
                                                <?php echo isset($_GET["nombre2"]) ? $_GET["nombre2"] : ""; ?>
                                                </td>
                                                <td>
                                                <?php echo isset($_GET["apellido1"]) ? $_GET["apellido1"] : ""; ?>    
                                                </td>
                                                <td>
                                                <?php echo isset($_GET["apellido2"]) ? $_GET["apellido2"] : ""; ?>
                                                </td>
                                                <td>
                                                <?php echo isset($_GET["correo"]) ? $_GET["correo"] : ""; ?>
                                                </td>
                                                <td>
                                                <?php echo isset($_GET["edad"]) ? $_GET["edad"] : ""; ?>
                                                </td>
                                                <td>
                                                <?php echo isset($_GET["grado"]) ? $_GET["grado"] : ""; ?>
                                                </td>
                                                <td>
                                                <?php echo isset($_GET["arma"]) ? $_GET["arma"] : ""; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td>2</td>
                                                <td>662345</td>
                                                <td>Jennifer</td>
                                                <td>Sucely</td>
                                                <td>Jiménez</td>
                                                <td>González</td>
                                                <td>jenifua@gmial.com</td>
                                                <td>23</td>
                                                <td>Alférez</td>
                                                <td>Marina</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>664321</td>
                                                <td>Nixon</td>
                                                <td>Abraham</td>
                                                <td>Cuxum</td>
                                                <td>Raxcaco</td>
                                                <td>cuxil@gmial.com</td>
                                                <td>24</td>
                                                <td>Subteniente</td>
                                                <td>Artillería</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>674567</td>
                                                <td>Mario</td>
                                                <td>Daniel</td>
                                                <td>Chocoj</td>
                                                <td>Cruz</td>
                                                <td>peaches@gmial.com</td>
                                                <td>24</td>
                                                <td>Subteniente</td>
                                                <td>P.M.</td>
                                            </tr>
                                            <tr>
                                            <td>5</td>
                                                <td>656207</td>
                                                <td>Francisco</td>
                                                <td>Daniel</td>
                                                <td>Rivas</td>
                                                <td>García</td>
                                                <td>frankd11366@gmial.com</td>
                                                <td>24</td>
                                                <td>Subteniente</td>
                                                <td>Infantería</td>
                                            </tr>
                                            <tr>
                                            <td>6</td>
                                                <td>657544</td>
                                                <td>Roger</td>
                                                <td>Ronaldo</td>
                                                <td>Carpio</td>
                                                <td>Guerra</td>
                                                <td>roger51@gmial.com</td>
                                                <td>25</td>
                                                <td>Subteniente</td>
                                                <td>P.M.</td>
                                            </tr>
                                            <td>7</td>
                                                <td>649876</td>
                                                <td>José</td>
                                                <td>Rodrigo</td>
                                                <td>Maldonado</td>
                                                <td>Morales</td>
                                                <td>josemaldonado@gmial.com</td>
                                                <td>26</td>
                                                <td>Alférez</td>
                                                <td>Marina</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>657869</td>
                                                <td>Edgar</td>
                                                <td>Daniel</td>
                                                <td>Morán</td>
                                                <td>Mejía</td>
                                                <td>moranedgar@gmial.com</td>
                                                <td>25</td>
                                                <td>Subteniente</td>
                                                <td>Caballería</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>654533</td>
                                                <td>Luis</td>
                                                <td>Alejandro</td>
                                                <td>Mencos</td>
                                                <td>Chavez</td>
                                                <td>luismencos@gmial.com</td>
                                                <td>25</td>
                                                <td>Subteniente</td>
                                                <td>TT.MM.</td>
                                            </tr>
                                            <tr>
                                            <td>10</td>
                                                <td>657235</td>
                                                <td>Carlos</td>
                                                <td>Enrique</td>
                                                <td>Vásquez</td>
                                                <td>Ordoñez</td>
                                                <td>carlosvasquez@gmial.com</td>
                                                <td>26</td>
                                                <td>Subteniente</td>
                                                <td>Caballería</td>
                                            </tr>
                                            <tr>
                                            
                                        </tbody>
                                    </table>
                                    <!-- Aquí finaliza la tabla -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Aquí finaliza la pagina 2 -->

            <div class="col-6">
                <div class="p-3 text-dark bg-info-subtle border border-dark rounded-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="p-3 text-center bg-info rounded-3">
                                <h3>Galería</h3>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <div class="p-2 text-center bg-info rounded-3">
                                <img src="../images/foto1.jpg" alt=""  class="img-fluid h-120">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-1 text-center bg-info rounded-3">
                            <img src="../images/foto2.jpg" alt="" class="img-fluid h-100">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 text-center bg-info rounded-3">
                            <img src="../images/foto8.jpg" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <div class="p-1 text-center bg-info rounded-3">
                                <img src="../images/foto4.jpg" alt=""  class="img-fluid">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-1 text-center bg-info rounded-3">
                            <img src="../images/foto5.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-1 text-center bg-info rounded-3">
                            <img src="../images/foto6.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <div class="p-1 text-center bg-info rounded-3">
                                <img src="../images/foto7.jpg" alt=""  class="img-fluid">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-1 text-center bg-info rounded-3">
                            <img src="../images/foto9.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-1 text-center bg-info rounded-3">
                            <img src="../images/foto3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>


    

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>