<style>
    .table>tbody>tr>td {
        vertical-align: middle;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="text-center">
                <h1 class="display-4">Categorías</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center mb-4">
        <div class="col-lg text-center">
            <button class="btn btn-primary" id="btnInsert" data-toggle="modal" data-target="#modalInsert">Agregar Categoría</button>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-lg-10">
            <table class="table table-hover table-responsive table-bordered table-light d-table w-100">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" width="10%">ID</th>
                        <th scope="col" width="60%">Nombre de Categoría</th>
                        <th scope="col" width="30%">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $categorias = $objBD->leer("categoria","*");
                        if(count($categorias) > 0){
                            foreach($categorias as $cat){
                                echo '
                                    <tr>
                                        <td>'.$cat['id_categoria'].'</td>
                                        <td>'.$cat['nombre'].'</td>
                                        <td>
                                            <button class="btn btn-warning btn-block" data-id="'.$cat["id_categoria"].'" data-nombre="'.$cat["nombre"].'" data-descripcion="'.$cat["descripcion"].'" data-toggle="modal" data-target="#modalUpdate">Editar</button>
                                            <button class="btn btn-danger btn-block" data-id="'.$cat["id_categoria"].'" data-toggle="modal" data-target="#modalDelete">Eliminar</button>
                                        </td>
                                    </tr>
                                ';
                            }
                        }else{
                            echo '
                                <tr>
                                    <td colspan="3">No hay categorias aún</td>
                                </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Insert-->
<div class="modal fade" id="modalInsert" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal">Agregar Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-12">
                            <form action="" method="post" id="formInsert">
                                <div class="form-group">
                                    <label for="nom_cat">Nombre de Categoría</label>
                                    <input type="text" class="form-control" id="nom_cat_ins" placeholder="Nombre de Categoría" maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control" id="descripcion_ins" rows="3" maxlength="500" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="icono">Icono de Categoría</label>
                                    <input type="file" class="form-control-file" id="icono_ins" accept="image/*" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="insertar()">Insertar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update-->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal">Modificar Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-12">
                        <form>
                                <div class="form-group">
                                    <label for="nom_cat">Nombre de Categoría</label>
                                    <input type="text" class="form-control" id="nom_cat" placeholder="Nombre de Categoría" maxlength="50" required>
                                    <input type="hidden" name="id_cat" id="id_cat" value="">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control" id="descripcion" rows="3" maxlength="500" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="icono_upd">Icono de Categoría</label>
                                    <input type="file" class="form-control-file" id="icono_upd" accept="image/*" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="modificar()">Modificar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Delete-->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModal">Eliminar Categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Está seguro que desea eliminar la categoría?
        <input type="hidden" id="id_eliminar" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="eliminar()">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<script language="javascript">

//llenar contenido del modal del update y delete
$(document).ready(function (){
    $(document).on('show.bs.modal','#modalUpdate' ,function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id') 
        var nombre = button.data('nombre') 
        var descripcion = button.data('descripcion') 
        var modal = $(this)

        modal.find('#id_cat').val(id)
        modal.find('#nom_cat').val(nombre)
        modal.find('#descripcion').val(descripcion)
    })
    $(document).on('show.bs.modal','#modalDelete' ,function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id') 
        var modal = $(this)

        modal.find('#id_eliminar').val(id)
    })
})

function insertar(){
    var fd = new FormData();
    var nombre = $("#nom_cat_ins").val();
    var descripcion = $("#descripcion_ins").val();
    var icono = $("#icono_ins")[0].files[0];
    fd.append("nombre",nombre);
    fd.append("descripcion",descripcion);
    fd.append("icono",icono);
    $.ajax({
        url: 'ajax.php?request=insertar_cat',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
            if(response != 0){
                swal({
                    icon: "success",
                    text: "Categoría agregada correctamente"
                }).then((value) => {
                    window.location = "index.php?pg=categorias"
                })
            }else{
                swal({
                    icon: "warning",
                    text: "Ocurrió un error al insertar la categoría"
                })
            }
        },
    });
}

function modificar(){
    var fd = new FormData();
    var nombre = $("#nom_cat").val();
    var descripcion = $("#descripcion").val();
    var icono = $("#icono_upd")[0].files[0];
    var id = $("#id_cat").val();
    fd.append("nombre",nombre);
    fd.append("descripcion",descripcion);
    fd.append("icono",icono);
    fd.append("id",id);
    $.ajax({
        url: 'ajax.php?request=actualizar_cat',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
            if(response == 1){
                swal({
                    icon: "success",
                    text: "Categoría actualizada correctamente"
                }).then((value) => {
                    window.location = "index.php?pg=categorias"
                })
            }else{
                swal({
                    icon: "warning",
                    text: response
                })
            }
        },
    });
}

function eliminar(){
    var fd = new FormData();
    fd.append("id",$("#id_eliminar").val())
    $.ajax({
        url: 'ajax.php?request=eliminar_cat',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
            if(response == 1){
                swal({
                    icon: "success",
                    text: "Categoría eliminada correctamente"
                }).then((value) => {
                    window.location = "index.php?pg=categorias"
                })
            }else{
                swal({
                    icon: "warning",
                    text: response
                })
            }
        },
    });
}
</script>