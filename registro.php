<?php
require_once("includes/header.php");
?>
<style>
    /*
 * Specific styles of signin component
 */
    /*
 * General styles
 */
    body,
    html {
        height: 100%;
        background-repeat: no-repeat;
        background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
    }

    .auto {
        height: auto !important;
    }

    .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
    }

    /*
 * Card component
 */
    .card {
        background-color: #F7F7F7;
        /* just in case there no content*/
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-top: 50px;
        /* shadows and rounded borders */
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
        /* -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%; */
    }

    /*
 * Form styles
 */
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
        /*background-color: #4d90fe; */
        background-color: rgb(104, 145, 162);
        /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
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
    <div class="row justify-content-md-center" id="div_principal">
        <div class="col-sm-8">
            <div class="card card-container">
                <p id="profile-name" class="profile-name-card">¿Para qué usarás Line Commerce?</p>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-6">
                            <a onclick="siguiente_cuadro('cliente')">
                                <div class="card card-container bg-primary text-center">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                    <br>
                                    <br>
                                    <h5 class="card-title text-light">Comprar Productos</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a onclick="siguiente_cuadro('negocio')">
                                <div class="card card-container bg-primary text-center">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                    <br>
                                    <br>
                                    <h5 class="card-title text-light">Vender Productos</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registro de Clientes -->
    <div class="row justify-content-md-center" id="registro_cliente">
        <div class="col-sm-8">
            <div class="card card-container">
                <p id="profile-name" class="profile-name-card">Registro de Clientes</p>
                <div class="container">
                    <div class="row justify-content-md-center">
                        
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" onclick="siguiente_cuadro('volver')" >Volver</button>
            </div>
        </div>
    </div>
    <!-- Registro de Negocios -->
    <div class="row justify-content-md-center" id="registro_negocio">
        <div class="col-sm-8">
            <div class="card card-container">
                <p id="profile-name" class="profile-name-card">Registro de Negocios</p>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-12">
                            <form>
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" placeholder="Nombre de Usuario" maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <label for="password1">Contraseña</label>
                                    <input type="password" class="form-control" id="password1" placeholder="Contraseña" maxlength="20" required>
                                </div>
                                <div class="form-group">
                                    <label for="password2">Repetir Contraseña</label>
                                    <input type="password" class="form-control" id="password2" placeholder="Repetir Contraseña" maxlength="20" required>
                                </div>
                                <div class="form-group">
                                    <label for="negocio">Nombre del Negocio</label>
                                    <input type="text" class="form-control" id="negocio" placeholder="Nombre del Negocio" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción del Negocio</label>
                                    <textarea class="form-control" id="descripcion" rows="3" maxlength="500" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="mail" class="form-control" id="email" placeholder="alguien@example.com" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Dirección del Negocio</label>
                                    <textarea class="form-control" id="direccion" rows="3" maxlength="500" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="negocio" placeholder="Teléfono" maxlength="15" required>
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto de Perfil</label>
                                    <input type="file" class="form-control-file" id="foto" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Registrarse" name="enviar" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" onclick="siguiente_cuadro('volver')" >Volver</button>
            </div>
            <br>
        </div>
    </div>
</div>
<?php
require_once("includes/scripts.php");
?>
<script language="javascript">
    $(document).ready(function() {
        $("#registro_cliente").hide();
        $("#registro_negocio").hide();
    })
    function siguiente_cuadro(cuadro){
        switch(cuadro){
            case 'cliente':
                $("#div_principal").hide();
                $("body").addClass("auto");
                $("#registro_cliente").show();
            break;
            case 'negocio':
                $("#div_principal").hide();
                $("body").addClass("auto");

                $("#registro_negocio").show();
            break;
            case 'volver':
                $("#registro_cliente").hide();
                $("#registro_negocio").hide();
                $("#div_principal").show();
                $("body").removeClass("auto");
            break;
        }
    }
</script>