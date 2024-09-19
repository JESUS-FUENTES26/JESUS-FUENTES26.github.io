<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Juegos Tradicionales Mexicanos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    <style>
        .li{
            font-weight: 900;
        }
        .cont {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .tablero-container {
            text-align: center;
        }

        .tablero {
            display: grid;
            grid-template-columns: repeat(4, 100px);
            grid-gap: 10px;
            margin-top: 20px;
        }

        .carta {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
            color: black;
            cursor: pointer;
        }

        .carta p {
            color: black;
        }

        .carta-actual {
            text-align: center;
            color: black;
        }

        .botones {
            margin-top: 20px;
            text-align: center;
        }
    </style>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-white" href="#page-top">Juegos Tradicionales Mexicanos</a><br>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Balero</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Cuerda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Loteria</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <img src="./assets/img/fondo.jpg" width="100%" alt="">

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Balero</h2>
                </div>
               <center> <img class="mx-auto rounded-circle" src="./assets/img/balero.jpg" width="500" alt=""></center><br><br>
                <p>
                El balero, también conocido como boliche, emboque, capirucho, choca, coca o perinola, es un juguete de malabares compuesto de un tallo, generalmente de madera, unido por una cuerda a una bola con uno o varios agujeros de diámetro ajustado al tallo. El objetivo del juego es hacer incrustar un eje delgado en el hueco del mazo.
                </p>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">La cuerda</h2>
                </div><br>
                <center><img class="mx-auto rounded-circle" src="./assets/img/cuerda.jpg" alt=""></center><br><br>
                <p>
                El juego la cuerda, también conocido como saltar la cuerda, es un juego tradicional que se juega en grupo o individual. Consiste en que una o varias personas saltan sobre una cuerda que se hace girar de manera que pase debajo de sus pies y sobre su cabeza.

                Reglas Básicas

                No pisar la cuerda ni tocarla con los pies o piernas mientras se salta.
                Saltar continuamente, sin interrupciones, para evitar perder.
                Gana el participante que logre saltar la cuerda por más tiempo o realice más saltos.
                Modos de Juego

                Juego individual: una persona hace girar la cuerda y salta.
                Juego en grupo: al menos tres personas participan, dos que voltean la cuerda y una tercera que salta.
                Juego en equipo: dos personas sostienen la cuerda por los extremos y la hacen subir y bajar mientras una tercera persona salta y trata de mantener el ritmo.
                </p>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <?php
                // Array de cartas de la lotería con su nombre, imagen y audio
                $cartas_original = [
                    ["nombre" => "Las jaras", "imagen" => "Loteria/las jaras.jpg", "audio" => "sound/Las jaras.opus"],
                    ["nombre" => "El soldado", "imagen" => "Loteria/el soldado.jpg", "audio" => "sound/El soldado.opus"],
                    ["nombre" => "El paraguas", "imagen" => "Loteria/el paraguas.jpg", "audio" => "sound/El paraguas.opus"],
                    ["nombre" => "El negrito", "imagen" => "Loteria/el negrito.jpg", "audio" => "sound/El negrito.opus"],
                    ["nombre" => "La Mano", "imagen" => "img/mano.jpg", "audio" => "sound/La mano.opus"],
                    ["nombre" => "La araña", "imagen" => "Loteria/la araña.jpg", "audio" => "sound/La araña.opus"],
                    ["nombre" => "El Valiente", "imagen" => "img/valiente.jpg", "audio" => "sound/El valiente.opus"],
                    ["nombre" => "El Melon", "imagen" => "img/melon.jpg", "audio" => "sound/El melon.opus"],
                    ["nombre" => "La Corona", "imagen" => "img/corona.jpg", "audio" => "sound/La corona.opus"],
                    ["nombre" => "La Garza", "imagen" => "img/garza.jpg", "audio" => "sound/La garza.opus"],
                    ["nombre" => "El Mundo", "imagen" => "Loteria/el mundo.jpg", "audio" => "sound/El mundo.opus"],
                    ["nombre" => "La Rosa", "imagen" => "Loteria/la rosa.jpg", "audio" => "sound/La rosa.opus"],
                    ["nombre" => "La Sandia", "imagen" => "img/sandia.jpg", "audio" => "sound/La sandia.opus"],
                    ["nombre" => "La estrella", "imagen" => "Loteria/la estrella.jpg", "audio" => "sound/La estrella.opus"],
                    ["nombre" => "El Alacran", "imagen" => "img/alacran.jpg", "audio" => "sound/El alacran.opus"],
                    ["nombre" => "El Corazon", "imagen" => "img/corazon.jpg", "audio" => "sound/El corazon.opus"],
                    ["nombre" => "La Muerte", "imagen" => "img/muerte.jpg", "audio" => "sound/La muerte.opus"],
                    ["nombre" => "La Sirena", "imagen" => "img/sirena.jpg", "audio" => "sound/La sirena.opus"]
                ];

                // Comprobar si ya existe un orden de cartas guardado en la sesión
                if (!isset($_SESSION['cartas'])) {
                    $_SESSION['cartas'] = $cartas_original; // Inicializar las cartas en la sesión
                }

                // Revolver el array si se presiona el botón "Revolver"
                if (isset($_POST['revolver'])) {
                    shuffle($_SESSION['cartas']); // Revolver las cartas en la sesión
                }

                // Utilizar el orden de cartas guardado en la sesión
                $cartas = $_SESSION['cartas'];

                // Obtener la carta actual
                $cartaActual = isset($_POST['carta_actual']) ? $_POST['carta_actual'] : 0;

                // Incrementar para mostrar la siguiente carta si se presiona "Siguiente"
                if (isset($_POST['siguiente'])) {
                    $cartaActual++;
                    if ($cartaActual >= count($cartas)) {
                        $cartaActual = 0; // Volver a la primera carta si llegamos al final
                    }
                }

                // Manejo de clic en una carta
                if (isset($_POST['fila']) && isset($_POST['columna'])) {
                    $fila = (int)$_POST['fila'];
                    $columna = (int)$_POST['columna'];
                    $index = $fila * 4 + $columna; // Calcular el índice de la carta seleccionada
                    if ($index >= 0 && $index < count($cartas)) {
                        $cartaActual = $index;
                    }
                }

                $carta = $cartas[$cartaActual];
                ?>
                <div class="container cont">
                    <!-- Tablero de cartas y botón "Revolver" -->
                    <div class="tablero-container">
                        <form method="post" style="margin-bottom: 20px;">
                            <button class="btn btn-primary" type="submit" name="revolver">Revolver</button>
                        </form>

                        <div class="tablero">
                            <!-- Muestra el tablero de cartas -->
                            <?php for ($i = 0; $i < 16; $i++): ?>
                                <?php $fila = floor($i / 4); $columna = $i % 4; ?>
                                <form method="post" style="display:inline-block;">
                                    <input type="hidden" name="fila" value="<?= $fila; ?>">
                                    <input type="hidden" name="columna" value="<?= $columna; ?>">
                                    <button type="submit" style="border:none; background:none; padding:0;">
                                        <div class="carta">
                                            <img src="<?= $cartas[$i % count($cartas)]['imagen']; ?>" alt="<?= $cartas[$i % count($cartas)]['nombre']; ?>" width="80">
                                        </div>
                                    </button>
                                </form>
                            <?php endfor; ?>
                        </div>

                        
                    </div>

                    <!-- Mostrar carta actual y controles de audio -->
                    <div class="carta-actual">
                        <h2>Carta actual: <?= $carta['nombre']; ?></h2><br>
                        <img src="<?= $carta['imagen']; ?>" alt="<?= $carta['nombre']; ?>" class="imagen-carta" width="150">
                        &emsp;&emsp;
                        <audio controls>
                            <source src="<?= $carta['audio']; ?>" type="audio/mpeg">
                            Tu navegador no soporta audio.
                        </audio>

                        <!-- Botones para Siguiente y Revolver -->
                        <form method="post" class="botones">
                            <input  type="hidden" name="carta_actual" value="<?= $cartaActual; ?>">
                            <button class="btn btn-primary" type="submit" name="siguiente">Siguiente</button>
                            <button class="btn btn-primary" type="submit" name="revolver">Revolver</button>
                        </form>
                        <!-- Buscador por fila y columna -->
                        <form method="post" class="botones">
                            <label for="fila">Fila:</label>
                            <input type="number" name="fila" min="0" max="3" required>&emsp;
                            <label for="columna">Columna:</label>
                            <input type="number" name="columna" min="0" max="3" required>&emsp;
                            <button class="btn btn-primary" type="submit" name="buscar">Buscar Carta</button>
                        </form>
                    </div>
                </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Desarrolladores</h2><br><br>
                </div>
                <div class="row">
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/perfil.jpeg" alt="..." />
                            <h4>Jesus Fuentes</h4>
                            <p class="text-muted">programador web</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/juanpa.jpeg" alt="..." />
                            <h4>Juan Cetz</h4>
                            <p class="text-muted">programador web</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contacto</h2>
                    <h3 class="section-subheading text-muted">ingresa lo que se te pide</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="su nombre *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="su Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">es requerido un email</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">email no valido</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="su telefono *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">es requerido un telefono</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="su mensaje *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">escribe aqui</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">hubo un error al enviar el mensaje</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">enviar mensaje</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
