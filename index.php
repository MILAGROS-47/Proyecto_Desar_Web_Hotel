<!DOCTYPE html>
<?php
include("conexion.php");
?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/main.css">

        <title>Hotel Imperial</title>
    </head>
    <body>
        <header class="container-fluid bg-primary d-flex justify-content-center">
            <p class="text-light mb-0 p-3 fs-6"><em>"Descubre la magia de la hospitalidad"</em></p>
        </header>

        <nav  class="navbar navbar-expand-lg navbar-light p-3"  id="menu">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <span class="fs-5 text-primary fw-bold">Hotel Imperial</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#equipo">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../php/habitaciones.php">Todas las Habitaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#seccion-contacto">Contactos</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-primary btn-primary-outline-success" type="button">Registrate</button>
                    </form>
                </div>

            </div>

        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="../img/inicio/cuarto1.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Refugio sereno</p>
                        <h5>Este cuarto de hotel está diseñado en tonos fríos para crear una atmósfera tranquila y relajante. Las paredes están pintadas en tonos azulados para crear una atmosfera mas placentera.</h5>
                        <br>
                        <a href="../php/informacion.php?id=1" class="btn btn-primary">Ver más</a>
                    </div>
                </div>



                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../img/inicio/cuarto2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Moderno y funcional</p>
                        <h5>Diseñado con un enfoque práctico, este cuarto de hotel cuenta con una decoración moderna y funcional, ofreciendo todas las comodidades necesarias para una estancia cómoda y conveniente.</h5>
                        <br>
                        <a href="../php/informacion.php?id=2" class="btn btn-primary">Ver más</a>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../img/inicio/cuarto3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Lujoso y espacioso</p>
                        <h5>Este cuarto de hotel ofrece amplios espacios con muebles de alta gama y detalles de lujo, creando un ambiente sofisticado y relajante para disfrutar de una estancia exclusiva.</h5>
                        <br>
                        <a href="../php/informacion.php?id=3" class="btn btn-primary">Ver más</a>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../img/inicio/cuarto4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Elegante y minimalista</p>
                        <h5>Con una estética minimalista y líneas limpias, este cuarto de hotel destaca por su sencillez y elegancia, ofreciendo un ambiente sereno y contemporáneo.</h5>
                        <br>
                        <a href="../php/informacion.php?id=4" class="btn btn-primary">Ver más</a>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../img/inicio/cuarto5.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Acogedor y contemporáneo </p>
                        <h5>Este cuarto de hotel combina elementos modernos y cálidos, con una decoración elegante y confortable que te hará sentir como en casa.</h5>
                        <br>
                        <a href="../php/informacion.php?id=5" class="btn btn-primary">Ver más</a>
                    </div>
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>   


        <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
            <h1 class="p-3 fs-2 border-top border-3">Somos un hotel equipado con todas tus necesidades <span class="text-primary">al servicio del cliente<span/></h1>
            <p class="p-3  fs-4">
                <span class="text-primary">Hotel Imperial</span> es un lujoso establecimiento situado en el corazón de una exuberante ciudad. Con una arquitectura elegante y moderna, nuestro hotel ofrece un ambiente sofisticado y acogedor que te hará sentir como en casa.       
            </p>   
        </section>
        <section class="w-100">
            <div class="row w-75 mx-auto" id="servicios-fila-1">
                <?php
                $objcon = new Conectarse();
                $consulta = "select * from tb_habitacion;";
                $res = $objcon->conectar()->query($consulta);
                $cantidad = 0;
                while ($row = $res->fetch()) {
                    if ($cantidad == 6) {
                        break;
                    }
                    $cantidad++;
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center align-items-center my-5">
                        <div class="image-container">
                            <img src="<?= $row[3] ?>" alt="desarrollo" class="img-fluid rounded">
                            <div class="overlay">
                                <h3 class="fs-5 mt-4 px-4 pb-1">Habitación <?= $row[0] ?></h3>
                                <p class="px-4"><?= $row[4] ?></p>
                                <div class="d-flex justify-content-center pb-3">
                                    <a href="informacion.php?id=<?= $row[0] ?>" class="btn btn-primary">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>



        <!--========================================================== -->
        <!-- SECCION ACERCA DE NOSOTROS-->
        <!--========================================================== -->

        <section>
            <div class="container w-50 m-auto text-center" id="equipo">
                <h1 class="mb-5 fs-2">Somos un hotel con las mejores condiciones para atenderte<span class="text-primary"> durante tu estancia</span>.</h1>
                <p class="fs-4 ">Buscamos ser uno de los hoteles mas reconocidos y solicitados de la capital, es por ello que nuestro equipo cuenta con los trabajadores mas profesionales del sector</p>
            </div>

            <div class="mt-5 text-center">
                <img id="img-equipo" src="../img/inicio/equipo.jpg" alt="equipo">
            </div>

            <div id="local" class="border-top border-2">
                <div class="contenedor-imagen"  style="position: relative;">
                    <!-- Aquí va la imagen de fondo -->
                    <img src="https://www.peru.travel/Contenido/General/Imagen/es/681/1.1/lima-san-isidro.jpg" alt="imagen de fondo" class="img-fondo">
                    <!-- Aquí va el contenido de texto -->
                    <div class="wrapper-local">
                        <h2>Ubicado en la hermosa capital de Lima</h2>
                        <h2 class="text-primary mb-4" id="typewriter"></h2>
                        <p class="fs-5 text-body">Elegimos Lima como ubicación estratégica para un hotel debido a su importancia como centro económico y político, así como por su atractivo turístico y conexiones internacionales. ¡Visítenos y no se arrepentirán!</p>
                        <section class="d-flex justify-content-start" id="numeros-local">
                            <div>
                                <p class="text-primary fs-5">32</p>
                                <p>Sedes</p>
                            </div>
                            <div>
                                <p class="text-primary fs-5">100%</p>
                                <p>Verificados</p>
                            </div>
                            <div>
                                <p class="text-primary fs-5">Siempre</p>
                                <p>Recomendados</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>


        </section>

        <!--========================================================== -->
        <!--FOOTER-->
        <!--========================================================== -->

        <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
            <p class="fs-5 px-3 pt-3">Hotel Imperial &copy; Todos Los Derechos Reservados 2023</p>
            <div id="iconos" >
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>  
            </div>
        </footer>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script src="main.js"></script>
    </body>
</html>
