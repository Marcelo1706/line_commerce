<?php
require_once("includes/header.php");
require_once("includes/menu_principal.php");+
require_once("clases/baseDatos.php");
$objBD = new baseDatos("localhost","line_commerce","root","mysql");
$cats_p = $objBD->leer("categoria","*",null,"ORDER BY popularidad DESC LIMIT 4");
$cats = $objBD->leer("categoria","*");
?>
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
        <!-- Carga de Categorías -->
        <?php 
        foreach($cats_p as $c){
            echo '
            <div class="col-sm-3 my-2">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="'.$c['icono_categoria'].'">
                        <br>
                        <br>
                        <h5 class="card-title">'.$c['nombre'].'</h5>
                        <p class="card-text">'.$c['descripcion'].'</p>
                        <a href="categorias.php?cat='.$c['id_categoria'].'" class="btn btn-primary">Ver Productos</a>
                    </div>
                </div>
            </div>
            ';
        }
        ?>
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
                <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png" alt="Card image cap">
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
                <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png" alt="Card image cap">
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
                <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png" alt="Card image cap">
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
                <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png" alt="Card image cap">
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
                <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png" alt="Card image cap">
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
                <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png" alt="Card image cap">
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
                <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png" alt="Card image cap">
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
                <img class="card-img-top" src="https://bulma.io/images/placeholders/128x128.png" alt="Card image cap">
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
        <!-- Carga de todas las categorías y subcategorías -->
        <?php
        foreach($cats as $c){
            echo '
            <div class="col-sm-3 my-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <a class="font-weight-bold text-dark" href="categorias.php?cat='.$c['id_categoria'].'">'.$c['nombre'].'</a>
                    </div>
                    <ul class="list-group list-group-flush">
            ';
            $sub_cat = $objBD->leer("sub_categoria","*",array("id_categoria" => $c['id_categoria']));
            foreach($sub_cat as $sc){
            echo '
                        <li class="list-group-item"><a class="text-dark" href="sub_categorias.php?cat='.$sc['id_subcategoria'].'">'.$sc['nombre'].'</a></li>
            ';  
            }
            echo '
                    </ul>
                </div>
            </div>
            ';
        }
        ?>
    </div>
</div>
<?php
require_once("includes/footer.php");
require_once("includes/scripts.php");
?>