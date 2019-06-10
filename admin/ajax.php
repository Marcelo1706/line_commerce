<?php
session_start();
require_once("../clases/criptografia.php");
require_once("../clases/baseDatos.php");
$objBD = new baseDatos("localhost","line_commerce","root","mysql");

if(isset($_GET['request'])){
    $request = $_GET['request'];
    if($request == "registrar_cliente"){
        $_POST['clave'] = cifrar($_POST['clave']);
        $res = $objBD->insertar("cliente",$_POST);
        if($res > 0){
            echo 1;
        }else{
            echo "no se insertó el registro";
        }
    }elseif($request == "registrar_negocio"){
        $filename = $_FILES['foto_perfil']['name'];
        $location = "../upload/profile_pics/".$filename;
        $uploadOk = 1;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        if($uploadOk == 0){
            echo "falló al subir archivo";
        }else{
            if(move_uploaded_file($_FILES['foto_perfil']['tmp_name'],$location)){
                //Si se subió con éxito, procedemos a hacer el insert
                $_POST['clave'] = cifrar($_POST['clave']);
                $_POST['foto_perfil'] = "/line_commerce/upload/profile_pics/".$filename;
                $res = $objBD->insertar("vendedor",$_POST);
                if($res > 0){
                    echo 1;
                }else{
                    echo "no se insertó el registro";
                }
            }else{
                echo "sigue sin subirse";
            }
        }
    }elseif($request == "login"){
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $tabla = $_POST['tipo_usuario'];
        $datos = $objBD->leer($tabla,"*",array("usuario" => $usuario));
        if(count($datos) == 0){
            echo 1;
        }else{
            if(descifrar($datos[0]['clave']) != $clave){
                echo 2;
            }else{
                echo 3;
            }
        }
    }elseif($request == "insertar_cat"){
        $filename = $_FILES['icono']['name'];
        $location = "../upload/".$filename;
        $uploadOk = 1;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        if($uploadOk == 0){
            echo "falló al subir archivo";
        }else{
            if(move_uploaded_file($_FILES['icono']['tmp_name'],$location)){
                //Si se subió con éxito, procedemos a hacer el insert
                extract($_POST);
                $arrInsert = array(
                    "descripcion" => $descripcion,
                    "icono_categoria" => "/line_commerce/upload/".$filename,
                    "nombre" => $nombre,
                    "popularidad" => 100
                );
                $res = $objBD->insertar("categoria",$arrInsert);
                if($res > 0){
                    echo 1;
                }else{
                    echo "no se insertó el registro";
                }
            }else{
                echo "sigue sin subirse";
            }
        }
    }
    elseif($request == "actualizar_cat"){
        $filename = $_FILES['icono']['name'];
        $location = "../upload/".$filename;
        $uploadOk = 1;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        if($uploadOk == 0){
            echo "falló al subir archivo";
        }else{
            if(move_uploaded_file($_FILES['icono']['tmp_name'],$location)){
                //Si se subió con éxito, procedemos a hacer el insert
                extract($_POST);
                $arrUpdate = array(
                    "descripcion" => $descripcion,
                    "icono_categoria" => "/line_commerce/upload/".$filename,
                    "nombre" => $nombre,
                    "popularidad" => 100
                );
                $res = $objBD->actualizar("categoria",$arrUpdate,array("id_categoria" => $id));
                if($res > 0){
                    echo 1;
                }else{
                    echo $res;
                }
            }else{
                echo "sigue sin subirse";
            }
        }
    }
    elseif($request == "eliminar_cat"){
        $id = $_POST['id'];
        // $archivo = $objBD->leer("categoria","icono_categoria",array("id_categoria" => $id))[0]["icono_categoria"];
        $res = $objBD->borrar("categoria",array("id_categoria" => $id));
        if($res > 0){
            echo 1;
        }else{
            echo $res;
        }
    }
    elseif($request == "select_cats"){
        $id = $_POST['id'];
        $cats = $objBD->leer("categoria","*");
        echo '<option value="">-- Seleccione Una --</option>';
        foreach($cats as $c){        
            if($c['id_categoria'] == $id){
                echo '<option value="'.$c['id_categoria'].'" selected>'.$c['nombre'].'</option>';
            }else{
                echo '<option value="'.$c['id_categoria'].'">'.$c['nombre'].'</option>';                
            }
        }
    }
    if($request == "insertar_sub"){
        $filename = $_FILES['icono']['name'];
        $location = "../upload/".$filename;
        $uploadOk = 1;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        if($uploadOk == 0){
            echo "falló al subir archivo";
        }else{
            if(move_uploaded_file($_FILES['icono']['tmp_name'],$location)){
                //Si se subió con éxito, procedemos a hacer el insert
                extract($_POST);
                $arrInsert = array(
                    "descripcion" => $descripcion,
                    "icono_sub" => "/line_commerce/upload/".$filename,
                    "nombre" => $nombre,
                    "id_categoria" => $id_categoria
                );
                $res = $objBD->insertar("sub_categoria",$arrInsert);
                if($res > 0){
                    echo 1;
                }else{
                    echo "no se insertó el registro";
                }
            }else{
                echo "sigue sin subirse";
            }
        }
    }
    elseif($request == "actualizar_sub"){
        $filename = $_FILES['icono']['name'];
        $location = "../upload/".$filename;
        $uploadOk = 1;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        if($uploadOk == 0){
            echo "falló al subir archivo";
        }else{
            if(move_uploaded_file($_FILES['icono']['tmp_name'],$location)){
                //Si se subió con éxito, procedemos a hacer el insert
                extract($_POST);
                $arrUpdate = array(
                    "descripcion" => $descripcion,
                    "icono_sub" => "/line_commerce/upload/".$filename,
                    "nombre" => $nombre,
                    "id_categoria" => $id_categoria
                );
                $res = $objBD->actualizar("sub_categoria",$arrUpdate,array("id_subcategoria" => $id));
                if($res > 0){
                    echo 1;
                }else{
                    echo $res;
                }
            }else{
                echo "sigue sin subirse";
            }
        }
    }
    elseif($request == "eliminar_sub"){
        $id = $_POST['id'];
        // $archivo = $objBD->leer("categoria","icono_categoria",array("id_categoria" => $id))[0]["icono_categoria"];
        $res = $objBD->borrar("sub_categoria",array("id_subcategoria" => $id));
        if($res > 0){
            echo 1;
        }else{
            echo $res;
        }
    }
}
?>