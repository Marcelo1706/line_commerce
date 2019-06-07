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
                    <a class="nav-link active" href="login.php">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="registro.php">Registrarse</a>
                </li>
            </ul>
            <form class="form-inline d-inline w-50" action="buscar.php" method="post">
                <div class="w-25"></div>
                <input class="form-control mr-sm-2 w-50" type="search" placeholder="¿Qué estás buscando?"
                    aria-label="¿Qué estás buscando?">
                <button class="btn btn-outline-light mr-0 my-2 my-sm-0 w-25" type="submit">Buscar</button>
            </form>
        </div>
    </nav>