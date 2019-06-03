<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/icono.png">

    <title>Line Commerce</title>
    <style>
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu a::after {
            transform: rotate(-90deg);
            position: absolute;
            right: 6px;
            top: .8em;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: .1rem;
            margin-right: .1rem;
        }

        .banner {
            background: url(img/banner.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">
            <img src="img/icono.png" width="32" height="32" class="d-inline-block align-top" alt="">
            Line Commerce
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorías
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Categoría 1</a></li>
                        <li><a class="dropdown-item" href="#">Categoría 2</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Categoría 3</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Subcategoría 1</a></li>
                                <li><a class="dropdown-item" href="#">Subcategoría 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Registrarse</a>
                </li>
            </ul>
            <form class="form-inline d-inline w-50">
                <div class="w-25"></div>
                <input class="form-control mr-sm-2 w-50" type="search" placeholder="¿Qué estás buscando?"
                    aria-label="¿Qué estás buscando?">
                <button class="btn btn-outline-light mr-0 my-2 my-sm-0 w-25" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid banner mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 mx-auto">
                    <img src="img/icono.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-10">
                    <h1 class="display-4 text-light"><strong>Line Commerce</strong></h1>
                    <hr class="my-4 bg-light">
                    <p class="lead text-light"><strong>Tu líder en productos de calidad, al mejor precio</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="h1 text-primary text-center">Categorías Populares</h1>
                <hr class="my-4">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-sm-3 my-2">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                        <br>
                        <br>
                        <h5 class="card-title">Categoría 1</h5>
                        <p class="card-text">Descripción de la Categoría</p>
                        <a href="#" class="btn btn-primary">Ver Productos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                        <br>
                        <br>
                        <h5 class="card-title">Categoría 2</h5>
                        <p class="card-text">Descripción de la Categoría</p>
                        <a href="#" class="btn btn-primary">Ver Productos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                        <br>
                        <br>
                        <h5 class="card-title">Categoría 3</h5>
                        <p class="card-text">Descripción de la Categoría</p>
                        <a href="#" class="btn btn-primary">Ver Productos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                        <br>
                        <br>
                        <h5 class="card-title">Categoría 4</h5>
                        <p class="card-text">Descripción de la Categoría</p>
                        <a href="#" class="btn btn-primary">Ver Productos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5"></div>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="h1 text-primary text-center">Últimos Productos</h1>
                <hr class="my-4">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-sm-3 my-2">
                <div class="card">
                    <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$ 99.99</h6>
                        <p class="card-text">Descripción del Producto de hasta 300 caracteres.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card">
                    <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$ 99.99</h6>
                        <p class="card-text">Descripción del Producto de hasta 300 caracteres.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card">
                    <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$ 99.99</h6>
                        <p class="card-text">Descripción del Producto de hasta 300 caracteres.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card">
                    <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$ 99.99</h6>
                        <p class="card-text">Descripción del Producto de hasta 300 caracteres.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card">
                    <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$ 99.99</h6>
                        <p class="card-text">Descripción del Producto de hasta 300 caracteres.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card">
                    <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$ 99.99</h6>
                        <p class="card-text">Descripción del Producto de hasta 300 caracteres.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card">
                    <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$ 99.99</h6>
                        <p class="card-text">Descripción del Producto de hasta 300 caracteres.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card">
                    <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$ 99.99</h6>
                        <p class="card-text">Descripción del Producto de hasta 300 caracteres.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5"></div>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="h1 text-primary text-center">Encuentra lo que buscas en nuestras categorías</h1>
                <hr class="my-4">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-sm-3 my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Categoría Principal
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Subcategoria 1</li>
                        <li class="list-group-item">Subcategoria 2</li>
                        <li class="list-group-item">Subcategoria 3</li>
                        <li class="list-group-item">Subcategoria 4</li>
                        <li class="list-group-item">Subcategoria 5</li>
                        <li class="list-group-item">Subcategoria 6</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Categoría Principal
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Subcategoria 1</li>
                        <li class="list-group-item">Subcategoria 2</li>
                        <li class="list-group-item">Subcategoria 3</li>
                        <li class="list-group-item">Subcategoria 4</li>
                        <li class="list-group-item">Subcategoria 5</li>
                        <li class="list-group-item">Subcategoria 6</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Categoría Principal
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Subcategoria 1</li>
                        <li class="list-group-item">Subcategoria 2</li>
                        <li class="list-group-item">Subcategoria 3</li>
                        <li class="list-group-item">Subcategoria 4</li>
                        <li class="list-group-item">Subcategoria 5</li>
                        <li class="list-group-item">Subcategoria 6</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Categoría Principal
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Subcategoria 1</li>
                        <li class="list-group-item">Subcategoria 2</li>
                        <li class="list-group-item">Subcategoria 3</li>
                        <li class="list-group-item">Subcategoria 4</li>
                        <li class="list-group-item">Subcategoria 5</li>
                        <li class="list-group-item">Subcategoria 6</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="my-5"></div>
    <!-- Footer -->
    <footer class="page-footer font-small bg-primary pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase text-light">Line Commerce</h5>
                    <p class="text-light">Somos Líderes en posicionar tu negocio y hacer que llegue a más personas</p>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase text-light">Información Útil</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-light">Ayuda y Contacto</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Consejos de Seguridad</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Términos y Condiciones</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Acerca de Line Commerce</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase text-light">Servicos de Line Commerce</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-light">Cuenta para Vendedores</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Cuenta para Clientes</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Acceso Administrativo</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Todos los Productos</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-light">© 2019 Copyright: Line Commerce</div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script language="javascript">
        $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                $('.dropdown-submenu .show').removeClass("show");
            });


            return false;
        });
    </script>
</body>

</html>