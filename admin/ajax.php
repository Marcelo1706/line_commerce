<?php
session_start();
require_once("../clases/criptografia.php");
require_once("../clases/baseDatos.php");
$objBD = new baseDatos("localhost","line_commerce","root","mysql");

if(isset($_GET['request'])){
    $request = $_GET['request'];
    if($request == "insertar_cat"){
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
        $archivo = $objBD->leer("categoria","icono_categoria",array("id_categoria" => $id))[0]["icono_categoria"];
        $res = $objBD->borrar("categoria",array("id_categoria" => $id));
        if($res > 0){
            echo 1;
        }else{
            echo $res;
        }
    }
}
?>