<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/PNG ISO.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.5.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">
    <title>Puerto Medic 24</title>
</head>
<body>
    <header class="header">
        
        <div class="header-informacion">
            <div class="content">
                    <div class="parte1">
                        <div>
                            <i class='bx bxs-phone'></i>
                            <span>0424-833-5651</span>
                        </div>
                        <div>
                            <i class='bx bxs-envelope' ></i>
                            <span>info@puertomedic24.com</span> 
                        </div>
                        
                    </div>
                    <div class="parte2">
                        <div>
                            <a href=""><i class='bx bxl-facebook' ></i></a>
                        </div>
                        <div>
                            <a href=""><i class='bx bxl-instagram-alt' ></i></a>
                        </div>
                        <div>
                            <a href=""><i class='bx bxl-twitter' ></i></a>
                        </div>
                    </div>
            </div>
        </div>
        <nav class="header-menu nav" id="navbar">
            <div class="content">
                <div class="parte1"id="menu">
                    <img class="img1" src="./img/COLOR 2.png" alt="">
                </div>

                <div class="col">
                    <label for="check" class="bar-btn" id="checke">
                        <i class='bx bx-menu'></i>
                    </label>
                </div>
                
                <div class="parte2" >
                    <a href=""><span>Inicio</span></a>
                    <a href="#nosotros"><span>Nosotros</span></a>
                    <a href="#funciona"><span>¿Cómo Funciona?</span></a>
                    <a href="#honorarios"><span>Honorarios Médicos</span></a>
                    <a href="#especialistas"><span>Especialistas</span></a>
                    <a href="#contactanos"><span>Contáctanos</span></a>
                </div>
            </div>
        </nav>
        <div class="parte3" id="Parte3">
            <div class="divi">
                <a href="" onclick="Cerrar();"><span>Inicio</span></a>
                <a href="#nosotros" onclick="Cerrar();"><span>Nosotros</span></a>
                <a href="#funciona"onclick="Cerrar();"><span>¿Cómo Funciona?</span></a>
                <a href="#honorarios" onclick="Cerrar();"><span>Honorarios Médicos</span></a>
                <a href="#especialistas" onclick="Cerrar();"><span>Especialistas</span></a>
                <a href="#contactanos" onclick="Cerrar();"><span>Contáctanos</span></a>
            </div>
            
        </div>
    </header>
    <main>
        <div class="banner">
            <ul>
                <li>
                    <div class="ima">
                        <img src="./img/wysiwyg-uploads_1580196666465-doctor.jpg" alt="">
                    </div>
                    
                    <div class="content">
                        <div class="textos">
                            <div class="textos2">
                                <h2 class="normal">Brindamos Atención Médica</h2>
                                <h1 class="grande">En Diversas Especialidades</h1>
                                <h4 class="peque">Al Más Bajo Costo</h4>
                            </div>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ima">
                        <img src="./img/Becoming-a-medical-doctor-or-physician-in-Germany.jpg" alt="">
                    </div>
                    
                    <div class="content">
                        <div class="textos">
                            <div class="textos2">
                                <h2 class="normal">Para Su Comodidad</h2>
                                <h1 class="grande">Ofrecemos Nuestros Servicios</h1>
                                <h4 class="peque">En La Ciudad De Barcelona, Puerto La Cruz y Lechería</h4>
                            </div>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ima">
                        <img src="./img/800-Doctors-Talking-GettyImages-1421919753.jpg" alt="">
                    </div>
                    
                    <div class="content">
                        <div class="textos">
                            <div class="textos2">
                                <h2 class="normal">Por Tan Solo 1$ Anual</h2>
                                <h1 class="grande">Obtén Descuentos</h1>
                                <h4 class="peque">En Consultas y Servicios</h4>
                            </div>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ima">
                        <img src="./img/Becoming-a-medical-doctor-or-physician-in-Germany.jpg" alt="">
                    </div>
                    
                    <div class="content">
                        <div class="textos">
                            <div class="textos2">
                                <h2 class="normal">Conoce En Tiempo Real</h2>
                                <h1 class="grande">Nuestros Servicios Afiliados</h1>
                                <h4 class="peque">De Ecografías, Rayos X, Tomografías, Laboratorios y Más<br>Las 24 Horas Del Día</h4>
                            </div>
                            
                        </div>
                    </div>
                </li>
            </ul>
            
        </div >
        <div class="about-us" id="nosotros">
            <div class="content">
                <div class="partes">
                    <div class="parte1">
                    <h1>Sobre <span class="moradito">Nosotros</span></h1>
                    <p>Somos la primera empresa digital del estado Anzoátegui que ofrece 
                        servicios de salud al más bajo costo  teniendo como premisa el bienestar
                         de nuestros pacientes. Contamos con profesionales de la salud altamente 
                         calificados y con amplia trayectoria que busca no solo el tratamiento de
                          las enfermedades si no también la prevención de las mismas.</p>
                          <ul>
                            <div class="check">
                                <span><i class='bx bx-check'></i>Brindamos atención medica en diversas especialidades al más bajo costo.</span><br>
                                <span><i class='bx bx-check'></i>Para su comodidad ofrecemos nuestros servicios en la ciudad de Barcelona, 
                                    Puerto La Cruz y Lechería.</span><br>
                                <span><i class='bx bx-check'></i>Por tan solo 1$  anual afíliate a nosotros y obtén descuentos en consultas
                                    y servicios.</span><br>
                                <span><i class='bx bx-check'></i>Conoce en tiempo real donde ubicar  nuestros servicios afiliados de ecografía, rayos x, tomografía, 
                                    laboratorios y más las 24 horas del día.</span>
                            </div>
                        
                </div>
                <div class="parte2">
                    <div class="liston">
                        <span>PUERTO MEDIC <span class="n24">24</span></span>
                        <div class="imga">
                            <img src="./img/PNG ISO.png" alt="">
                        </div>
                        
                    </div>
                </div>
                </div>
                
            </div>
        </div>
        <div class="especialidades" id="especialidades">
            
            <div class="content">
                <div class="titulo">
                    <div>
                        <h1>Especialidades Médicas</h1>
                        <div class="linea"><div class="li"></div></div>
                    </div>
                    
                </div>
                <div class="partes">
                    <div class="parte1">
                    <div class="prim">
                        <div class="caja" id="caja1">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro1">
                                        <div class="centro" >
                                            <i class='bx bx-female-sign' id="icono1"></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo1">GINECOLOGÍA</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>
                        <div class="caja" id="caja2">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro2">
                                        <div class="centro">
                                            <i class='bx bx-first-aid'  id="icono2"></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo2">MEDICINA INTERNA</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>
                        <div class="caja" id="caja3">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro3">
                                        <div class="centro">
                                            <i class='bx bx-child' id="icono3" ></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo3">PEDIATRÍA</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>
                        <div class="caja" id="caja4">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro4">
                                        <div class="centro">
                                            <i class='bx bx-donate-blood' id="icono4"></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo4">CIRUGÍA VASCULAR</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>
                        <div class="caja" id="caja5"><div class="contenido">
                            <div>
                                <div class="center">
                            <div class="icono" id="centro5">
                                    <div class="centro">
                                        <i class='bx bx-male-sign' id="icono5"></i>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="center">
                                <span id="titulo5">UROLOGÍA</span>
                            </div>
                            </div>
                                
                        </div></div>
                    
                    
                        
                        <div class="caja" id="caja6">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro6">
                                        <div class="centro">
                                            <i class='bx bx-bed' id="icono6"></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo6">CIRUGÍA GENERAL</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>
                        <div class="caja" id="caja7">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro7">
                                        <div class="centro">
                                            <i class='bx bx-brain' id="icono7"></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo7">NEUROLOGÍA</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>
                        <div class="caja" id="caja8">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro8">
                                        <div class="centro">
                                            <i class='bx bx-pulse'  id="icono8"></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo8">CARDIOLOGÍA</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>
                        <div class="caja" id="caja9"><div class="contenido">
                            <div>
                                <div class="center">
                            <div class="icono" id="centro9">
                                    <div class="centro">
                                        <i class='bx bx-clinic' id="icono9"></i>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="center">
                                <span id="titulo9">NEFROLOGÍA</span>
                            </div>
                            </div>
                                
                        </div></div>
                        <div class="caja" id="caja10">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro10">
                                        <div class="centro">
                                            <i class='bx bxs-brain'  id="icono10"></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo10">NEUROCIRUGÍA</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>

                    
                    
                        <div class="caja" id="caja11"><div class="contenido">
                            <div>
                                <div class="center">
                            <div class="icono" id="centro11">
                                    <div class="centro">
                                        <i class='bx bxs-folder-open' id="icono11"></i>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="center">
                                <span id="titulo11">RADIOLOGÍA</span>
                            </div>
                            </div>
                                
                        </div></div>
                        <div class="caja" id="caja12"><div class="contenido">
                            <div>
                                <div class="center">
                            <div class="icono" id="centro12">
                                    <div class="centro">
                                        <i class='bx bx-bone' id="icono12" ></i>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="center">
                                <span id="titulo12">TRAUMATOLOGÍA</span>
                            </div>
                            </div>
                                
                        </div></div>
                        <div class="caja" id="caja13">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro13">
                                        <div class="centro">
                                            <i class='bx bx-glasses'  id="icono13"></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo13">OFTALMOLOGÍA</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>
                        <div class="caja" id="caja14">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro14">
                                        <div class="centro">
                                            <i class='bx bx-body' id="icono14"></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo14">GASTROENTEROLOGÍA</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>
                        <div class="caja" id="caja15">
                            <div class="contenido">
                                <div>
                                    <div class="center">
                                <div class="icono" id="centro15">
                                        <div class="centro">
                                            <i class='bx bxl-audible' id="icono15"></i>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center">
                                    <span id="titulo15">OTORRINOLARINGOLOGÍA</span>
                                </div>
                                </div>
                                    
                            </div>
                        </div>
                    
                </div>
                </div>
                </div>
                
        </div>
        </div>
        <div class="funciona" id="funciona">
            <div class="content">
                <div class="titulo">
                    <div>
                        <h1>¿Cómo Funciona?</h1>
                        <div class="linea"><div class="li"></div></div>
                    </div>
                    
                </div>
                <div class="partes">
                    <div class="parte1">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/c8c0sYQ87m8?si=BuQ1aZ_cTSxz0akw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="parte2">
                        
                        <div class="Pasos">
                            <div class="numero">
                                <div class="numerito">
                                    <span>1</span>
                                </div>
                                
                            </div>
                            <div class="explicacion">
                                <span></span>En la pestaña <span class="negrita">HORARIOS MÉDICOS</span>, podrá visualizar 
                                    las distintas especialidades médicas con las que contamos, honorarios, horarios
                                     y ubicación donde se ofrecen los servicios.</span>
                            </div>
                        </div>
                        <div class="Pasos">
                            <div class="numero">
                                <div class="numerito">
                                    <span>2</span>
                                </div>
                            </div>
                            <div class="explicacion">
                                <span>Debe seleccionar la opción <span class="negrita">AGENDAR CITA</span>, podrá colocar los datos personales solicitados. 
                                    Tambien deberá especificar la especialidad médica que desea, horario y la ubicación 
                                    de la misma. Una vez lleno el formulario hacer clic en ENVIAR.</span>
                            </div>
                        </div>
                        <div class="Pasos">
                            <div class="numero">
                                <div class="numerito">
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="explicacion">
                                <span>Posteriormente recibirá vía <span class="negrita">WhatsApp</span> y/o <span class="negrita">MSN</span> un mensaje donde se le indicará 
                                    disponibilidad de la consulta. En este mismo mensaje recibirá los datos para 
                                    cancelación del servicio solicitado (pago 
                                    móvil, transferencia, zelle, etc).</span>
                            </div>
                        </div>
                        <div class="Pasos">
                            <div class="numero">
                                <div class="numerito">
                                    <span>4</span>
                                </div>
                            </div>
                            <div class="explicacion">
                                <span>Una vez concretada la selección de su consulta proceda a enviar capture
                                     y referencia del método de pago seleccionado por usted.</span>
                            </div>
                        </div>
                        <div class="Pasos">
                            <div class="numero">
                                <div class="numerito">
                                    <span>5</span>
                                </div>
                            </div>
                            <div class="explicacion">
                                <span>Finalmente, yaverificado el pago se le enviara un menase con la palabra <span class="negrita">AGENDADO</span>.</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="honorarios" id="honorarios">
            <div class="content">
                <div class="titulo">
                    <div>
                        <h1>Honorarios Médicos</h1>
                        <div class="linea"><div class="li"></div></div>
                    </div>
                </div>
                <div class="tabla-contenido">
                    <table class="tabla">
                        <thead>
                            <tr>
                                <th class="color5">Especialidad</th>
                                <th class="color1">Ubicación</th>
                                <th class="color2">Honorario (Afiliado)</th>
                                <th class="color3">Hononario (No afiliado)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ecografías</td>
                                <td>Policlínica Puerto La Cruz </td>
                                <td class="precio">$25</td>
                                <td class="precio">$30</td>
                            </tr>
                            <tr class="color4">
                                <td>Cardiología</td>
                                <td>Policlínica Puerto La Cruz </td>
                                <td class="precio">$35</td>
                                <td class="precio">$45</td>
                            </tr>
                            <tr>
                                <td>Gastroenterología</td>
                                <td>Policlínica Puerto La Cruz </td>
                                <td class="precio">$25</td>
                                <td class="precio">$30</td>
                            </tr>
                            <tr class="color4">
                                <td>Ginecología</td>
                                <td>Policlínica Puerto La Cruz </td>
                                <td class="precio">$45</td>
                                <td class="precio">$60</td>
                            </tr>
                            <tr>
                                <td>Pediatría</td>
                                <td>Policlínica Puerto La Cruz </td>
                                <td class="precio">$25</td>
                                <td class="precio">$30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flecha">
                    <div class="flechita">
                        <i class='bx bx-arrow-back'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="especialistas" id="especialistas">
            <div class="content">
                <div class="titulo">
                    <div>
                        <h1>Nuestros Especialistas</h1>
                        <div class="linea"><div class="li"></div></div>
                    </div>
                </div>
                <div class="card-especialistas">
                    <div class="card">
                        <div class="imagen imagen1">
                        </div>
                        <div class="contenido">
                            <div class="nombre">
                                <h4 id="nombre1">Dr. Deniel Díaz</h4>
                            </div>
                            <div class="espe">
                                <span id="espe1">Cardiología</span>
                            </div>
                            <div class="horarios">
                                <div class="parte1">
                                    <div class="dias"><span id="dias11">Lunes</span></div>
                                    <div class="dias"><span id="dias21">Miercoles</span></div>
                                    <div class="dias"><span id="dias31">Viernes</span></div>
                                </div>
                                <div class="parte2">
                                    <div class="horas"><span id="horas11">3:00 pm - 4:00 pm</span></div>
                                    <div class="horas"><span id="horas21">10:00 am - 12:00 m</span></div>
                                    <div class="horas"><span id="horas31">7:00 am - 12:00 m</span></div>
                                </div>
                            </div>
                            <div class="boton">
                                <button onclick="Formulario(1);">Agendar cita</button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="imagen imagen2">
                        </div>
                        <div class="contenido">
                            <div class="nombre">
                                <h4 id="nombre2">Dra. Rosa Ramírez</h4>
                            </div>
                            <div class="espe">
                                <span id="espe2">Gastroenterología</span>
                            </div>
                            <div class="horarios">
                                <div class="parte1">
                                    <div class="dias"><span id="dias12">Lunes</span></div>
                                    <div class="dias"><span id="dias22">Miercoles</span></div>
                                    <div class="dias"><span id="dias32">Viernes</span></div>
                                </div>
                                <div class="parte2">
                                    <div class="horas"><span id="horas12">3:00 pm - 4:00 pm</span></div>
                                    <div class="horas"><span id="horas22">10:00 am - 12:00 m</span></div>
                                    <div class="horas"><span id="horas32">7:00 am - 12:00 m</span></div>
                                </div>
                            </div>
                            <div class="boton">
                                <button onclick="Formulario(2);">Agendar cita</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="imagen imagen3">
                        </div>
                        <div class="contenido">
                            <div class="nombre">
                                <h4 id="nombre3">Dra. Radcelis Bolaño</h4>
                            </div>
                            <div class="espe">
                                <span id="espe3">Pediatría</span>
                            </div>
                            <div class="horarios">
                                <div class="parte1">
                                    <div class="dias"><span id="dias13">Lunes</span></div>
                                    <div class="dias"><span id="dias23">Miercoles</span></div>
                                    <div class="dias"><span id="dias33">Viernes</span></div>
                                </div>
                                <div class="parte2">
                                    <div class="horas"><span id="horas13">3:00 pm - 4:00 pm</span></div>
                                    <div class="horas"><span id="horas23">10:00 am - 12:00 m</span></div>
                                    <div class="horas"><span id="horas33">7:00 am - 12:00 m</span></div>
                                </div>
                            </div>
                            <div class="boton">
                                <button onclick="Formulario(3);">Agendar cita</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="imagen imagen4">
                        </div>
                        <div class="contenido">
                            <div class="nombre">
                                <h4 id="nombre4">Dr. Eloy Brito</h4>
                            </div>
                            <div class="espe">
                                <span id="espe4">Ecografía</span>
                            </div>
                            <div class="horarios">
                                <div class="parte1">
                                    <div class="dias"><span id="dias14">Lunes</span></div>
                                    <div class="dias"><span id="dias24">Miercoles</span></div>
                                    <div class="dias"><span id="dias34">Viernes</span></div>
                                </div>
                                <div class="parte2">
                                    <div class="horas"><span id="horas14">3:00 pm - 4:00 pm</span></div>
                                    <div class="horas"><span id="horas24">10:00 am - 12:00 m</span></div>
                                    <div class="horas"><span id="horas34">7:00 am - 12:00 m</span></div>
                                </div>
                            </div>
                            <div class="boton">
                                <button onclick="Formulario(4);">Agendar cita</button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="imagen imagen5">
                        </div>
                        <div class="contenido">
                            <div class="nombre">
                                <h4 id="nombre5">Dra. Valentina Narváez</h4>
                            </div>
                            <div class="espe">
                                <span id="espe5">Ginecología</span>
                            </div>
                            <div class="horarios">
                                <div class="parte1">
                                    <div class="dias"><span id="dias15">Lunes</span></div>
                                    <div class="dias"><span id="dias25">Miercoles</span></div>
                                    <div class="dias"><span id="dias35">Viernes</span></div>
                                </div>
                                <div class="parte2">
                                    <div class="horas"><span id="horas15">3:00 pm - 4:00 pm</span></div>
                                    <div class="horas"><span id="horas25">10:00 am - 12:00 m</span></div>
                                    <div class="horas"><span id="horas35">7:00 am - 12:00 m</span></div>
                                </div>
                            </div>
                            <div class="boton">
                                <button onclick="Formulario(5);">Agendar cita</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="imagen imagen6">
                        </div>
                        <div class="contenido">
                            <div class="nombre">
                                <h4 id="nombre6">Dr. Franklin López</h4>
                            </div>
                            <div class="espe">
                                <span id="espe6">Ginecología</span>
                            </div>
                            <div class="horarios">
                                <div class="parte1">
                                    <div class="dias"><span id="dias16">Lunes</span></div>
                                    <div class="dias"><span id="dias26">Miercoles</span></div>
                                    <div class="dias"><span id="dias36">Viernes</span></div>
                                </div>
                                <div class="parte2">
                                    <div class="horas"><span id="horas16">3:00 pm - 4:00 pm</span></div>
                                    <div class="horas"><span id="horas26">10:00 am - 12:00 m</span></div>
                                    <div class="horas"><span id="horas36">7:00 am - 12:00 m</span></div>
                                </div>
                            </div>
                            <div class="boton">
                                <button  onclick="Formulario(6);">Agendar cita</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ver-todos">
                    <div class="boton">
                        <button>Ver todos <i class='bx bx-arrow-back'></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="centro-form" id="center">
            <div class="formulario">
                <div class="content">
                    <div class="top">
                        <div class="titulo">
                            <h1>Agendar una Cita</h1>
                        </div>
                        <div class="cerrar" id="cerrar">
                            <i class='bx bx-x'></i>
                        </div>
                    </div>
                    <div class="form">
                        <form action="" method="post">
                            <div class="contenido">
                                <input type="text" name="" id="numero" hidden>
                                <div id="Cuadrito" class="Cuadrito"><div class="cuadrito"><i class='bx bxs-user'></i></div><input type="text" id="nombres" name="nombres" placeholder="Ingrese su nombre*" required></div>
                                <div id="Cuadrito" class="Cuadrito"><div class="cuadrito"><i class='bx bx-envelope'></i></div><input type="mail" id="correo" name="correo" placeholder="Ingrese su correo electrónico *" required></div>
                                <div id="Cuadrito" class="Cuadrito"><div class="cuadrito"><i class='bx bx-mobile-alt'></i></div><input type="tel" id="telefono" name="telefono" placeholder="Ingrese su número telefónico *" maxlength="11" required></div>
                                <div id="Cuadrito" class="Cuadrito"><div class="cuadrito"><i class='bx bx-clinic'></i></div><input type="text" id="especialidad" class="disabled" name="especialidad2" placeholder="Ingrese la especialidad *" required></div>
                                <div id="Cuadrito" class="Cuadrito"><div class="cuadrito"><i class='bx bx-first-aid'></i></div><input type="text" id="doctor" class="disabled" name="doctor2" placeholder="Ingrese el doctor *" required></div>
                                <div class="divisor">
                                    <div id="Cuadrito" class="Cuadrito"><div class="cuadrito" id="open-datepicker"><i class='bx bx-calendar'></i></div><input type="date" id="fecha" name="fecha" maxlength="11" onblur="validar(event)"  required></div>
                                    <div id="Cuadrito" class="Cuadrito"><div class="cuadrito"><i class='bx bx-time-five' ></i></div>
                                        <select name="horas" id="horas" required>
                                            <option value="" selected disabled >Elegir hora...</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="boton">
                                    <input type="submit" name="boton" id="boton" value="Agendar">
                                 </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-us" id="contactanos">
            <div class="content">
                <div class="titulo">
                    <div>
                        <h1>Contáctanos</h1>
                        <div class="linea"><div class="li"></div></div>
                    </div>
                    
                </div>
                <div class="partes">
                    <div class="parte1">
                        
                       <img src="./img/top-banner.png" alt="">
                    </div>
                    <div class="parte2">
                        <div class="titulo">
                            <h3>Escribenos tus dudas</h3>
                        </div>
                        <div class="texto">
                        <p>Creemos en brindar la mejor atención posible a todos nuestros pacientes existentes y damos la bienvenida a nuevos pacientes</p>
                        </div>
                        <div class="form">
                            <form action="" method="post">
                                <div class="text"><input type="text" name="nombre" id="nombre" placeholder="Tu nombre *" required></div>
                                <div class="divisor">
                                    <div class="text"><input type="tel" placeholder="Tu número de teléfono *" name="telefono" required></div>
                                    <div class="text"><input type="email" name="correo" id="" placeholder="Tu correo *" required></div>
                                </div>
                                
                                <div class="text"><textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje *" required></textarea></div>
                                <div class="boton">
                                    <input type="submit" name="contactanos" id="" value="Enviar">
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        </div>
        <footer>
            <div class="content">
                <div class="partes">
                    <div class="parte1">
                        <div class="img">
                            <img src="./img/POSITIVO2.png" alt="">
                        </div>
                        <div class="texto">
                            <p>Ofrecemos servicios de salud al más bajo costo teniendo como premisa el bienestar de nuestros pacientes.
                                Contamos con profesionales de la salud altamente calificados y con amplia trayectoria.
                            </p>
                        </div>
                        <div class="redes">
                            <div>
                                <a href=""><i class='bx bxl-facebook' ></i></a>
                            </div>
                            <div>
                                <a href=""><i class='bx bxl-instagram-alt' ></i></a>
                            </div>
                            <div>
                                <a href=""><i class='bx bxl-twitter' ></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="parte2">
                        <div class="titulo">
                            <h3>Menu</h3>
                        </div>
                        <ul>
                            <li><a href=""><i class='bx bxs-chevrons-right'></i>Inicio</a></li>
                            <li><a href="#nosotros"><i class='bx bxs-chevrons-right'></i>Nosotros</a></li>
                            <li><a href="#funciona"><i class='bx bxs-chevrons-right'></i>¿Cómo Funciona? </a></li>
                            <li><a href="#honorarios"><i class='bx bxs-chevrons-right'></i>Honorarios Médicos</a></li>
                            <li><a href="#especialistas"><i class='bx bxs-chevrons-right'></i>Especialistas</a></li>
                            <li><a href="#contactanos"><i class='bx bxs-chevrons-right'></i>Contáctanos</a></li>
                        </ul>
                    </div>
                    <div class="parte3">
                        <div class="titulo">
                            <h3>Contacto</h3>
                        </div>
                        <div class="contenido">
                            <div class="telefono">
                                <i class='bx bxl-whatsapp' ></i>
                                <span>0424-8335651</span>
                            </div>
                            <div class="correo">
                                <i class='bx bx-envelope' ></i>
                                <span>info@puertomedic24.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="parte1">
                        <span>Copyright © 2024 Puerto Medic 24  &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Todos los derechos reservados</span>
                    </div>
                    <div class="parte2">
                        <span>Terms and Conditions | Privacy Policy | Sitemap | Disclaimer</span>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="./script.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.5.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</body>
</html>

<?php
    require_once './mail.php';
?>