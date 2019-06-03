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
                        <a href="registro.php?tipo=negocio" class="text-light">Cuenta para Vendedores</a>
                    </li>
                    <li>
                        <a href="registro.php?tipo=cliente" class="text-light">Cuenta para Clientes</a>
                    </li>
                    <li>
                        <a href="admin_login.php" class="text-light">Acceso Administrativo</a>
                    </li>
                    <li>
                        <a href="productos.php" class="text-light">Todos los Productos</a>
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