<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/line_commerce/js/jquery.min.js"></script>
<script src="/line_commerce/js/popper.min.js"></script>
<script src="/line_commerce/js/bootstrap.min.js"></script>
<script src="/line_commerce/js/sweetalert.min.js"></script>
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