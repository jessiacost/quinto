
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Categorias
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>Categorias/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Categoria</a>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                    <table id="example1" class="table table-bordered btn-hover">
                        <thead>
                            <tr>
                                <th>id_categoria</th>
                                <th>descripcion_categoria</th>
                                <th>estado_categoria</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php if(!empty($categorias)):?>
                                <?php foreach($categorias as $categoria):?>
                            <tr>
                                <td><?php echo $categoria->id_categoria;?></td>
                                <td><?php echo $categoria->descripcion_categoria;?></td>
                                <td><?php echo $categoria->estado_categoria;?></td>
                                 <td>
                                    <div class="btn-group">
                                        
                                        <button type="button" class="btn btn-info btn-view-categorias" data-toggle="modal" data-target="#modal-info"
                                        value="<?php echo $categoria->id_categoria;?>">
                                            <span class="fa fa-eye"></span> Ver
                                        </button>

                                        <a href="<?php echo base_url();?>Categorias/edit/<?php echo $categoria->id_categoria;?>"class="btn btn-warning"><span class="fa fa-pencil"></span> Editar </a>

                                        <a href="<?php echo base_url(); ?>Categorias/delete/<?php echo $categoria->id_categoria; ?>"class="btn btn-danger btn-remove"><span class="fa fa-remove"></span> Anular </a>

                                    </div>
                                </td>
                            </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal modal-info" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Informacion de Categorias</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info pull-right" data-dismiss="modal">Cerrar</button>
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

