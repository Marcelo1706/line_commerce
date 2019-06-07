<?php

function contar($tabla, $objBD){
    $res = $objBD->leer($tabla,"COUNT(*) AS cuenta");
    return $res[0]["cuenta"];
}

function contar_pedidos($estado, $objBD){
    //Estados: 
    // 1- Pendiente
    // 2- En proceso
    // 3- Finalizados
    $res = $objBD->leer("pedido","COUNT(*) AS cuenta",array("estado" => $estado ));
    return $res[0]["cuenta"];
}

function contar_mensajes($destinatario, $objBD){
    //Estados:
    // 1- Sin leer
    // 2- Leído
    $res = $objBD->leer("mensajes","COUNT(*) AS cuenta",array("receptor" => $destinatario, "estado" => 1));
    return $res[0]["cuenta"];
}
?>