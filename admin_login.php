<?php
require_once("includes/header.php");
?>
<style>
    body,
    html {
        height: 100%;
        background-repeat: no-repeat;
        background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
    }

    .card-container.card {
        max-width: 350px;
        padding: 40px 40px;
    }

    .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
    }

    .card {
        background-color: #F7F7F7;
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-top: 50px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .profile-img-card {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
    }

    .profile-name-card {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0 0;
        min-height: 1em;
    }

    .reauth-email {
        display: block;
        color: #404040;
        line-height: 2;
        margin-bottom: 10px;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .form-signin #inputEmail,
    .form-signin #inputPassword {
        direction: ltr;
        height: 44px;
        font-size: 16px;
    }

    .form-signin input[type=email],
    .form-signin input[type=password],
    .form-signin input[type=text],
    .form-signin select,
    .form-signin button {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        z-index: 1;
        position: relative;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .form-signin .form-control:focus {
        border-color: rgb(104, 145, 162);
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgb(104, 145, 162);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgb(104, 145, 162);
    }

    .btn.btn-signin {
        background-color: rgb(104, 145, 162);
        padding: 0px;
        font-weight: 700;
        font-size: 14px;
        height: 36px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: none;
        -o-transition: all 0.218s;
        -moz-transition: all 0.218s;
        -webkit-transition: all 0.218s;
        transition: all 0.218s;
    }

    .btn.btn-signin:hover,
    .btn.btn-signin:active,
    .btn.btn-signin:focus {
        background-color: rgb(12, 97, 33);
    }

    .forgot-password {
        color: rgb(104, 145, 162);
    }

    .forgot-password:hover,
    .forgot-password:active,
    .forgot-password:focus {
        color: rgb(12, 97, 33);
    }
</style>
<br>
<br>
<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="img/logo.png" />
        <p id="profile-name" class="profile-name-card">Acceso Administrativo</p>
        <form class="form-signin" action="" method="post" id="login_admin">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nombre de Usuario" required autofocus>
            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
            <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="Iniciar Sesión">
        </form>
    </div>
    <div class="text-center">
        <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
    </div>
</div>
<div id="resultado">

</div>
<?php
require_once("includes/scripts.php");
?>
<script language="javascript">
$(document).on("submit","#login_admin",function(event){
    event.preventDefault();
    $.ajax({
        type: "post",
        url: "clases/ajax.php?request=admin_login",
        data: $("#login_admin").serialize(),
        success: function(evt){
            switch(evt){
                case '1':
                    window.location = "admin/index.php";
                case '2':
                    swal({
                        icon: "warning",
                        text: "Su contraseña es incorrecta"
                    })
                break;
                case '3':
                    swal({
                        icon: "warning",
                        text: "El usuario no existe o no pertenece a este rol"
                    })
                break;
                default:
                    swal({
                        icon: "error",
                        text: "Error: "+evt
                    })
                break;
            }
        }
    })
})
</script>