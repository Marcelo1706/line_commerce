<?php
require_once("includes/header.php");
require_once("clases/criptografia.php");
require_once("clases/baseDatos.php");
$objBD = new baseDatos("localhost","line_commerce","root","mysql");
?>
<style>
body, html {
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
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
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
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
</style>
<br>
<br>
<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="img/logo.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="" method="post" id="form_login">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nombre de Usuario" required autofocus>
            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
            <select class="form-control" id="tipo_usuario" required>
                <option value="">-- Tipo de Usuario --</option>
                <option value="cliente">Cliente</option>
                <option value="vendedor">Negocio</option>
                </select>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar Sesión</button>
        </form>
    </div>
    <div class="text-center">
        <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
    </div>
</div>
<?php require_once("includes/scripts.php") ?>
<script language="javascript">
$(document).ready(function(){
    $("#form_login").on("submit",function(e){
        e.preventDefault();

        var fd = new FormData();
        fd.append("usuario",$("#usuario").val());
        fd.append("clave",$("#password").val());
        fd.append("tipo_usuario",$("#tipo_usuario").val());
        $.ajax({
            url: 'admin/ajax.php?request=login',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response == '1'){
                    swal({
                        icon: "warning",
                        text: "El usuario no existe o no corresponde a los privilegios seleccionados"
                    })
                }else{
                    if(response == '2'){
                        swal({
                            icon: "warning",
                            text: "La contraseña es incorrecta"
                        })
                    }else{
                        window.location = $("#tipo_usuario").val()+"/index.php";
                    }
                }
            }
        });
    })
})
</script>