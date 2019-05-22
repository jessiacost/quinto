
<!-- =============================================== -->
<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap4.css">

<script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>


<script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.js"></script>


<script src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap4.js"></script>


<script>
  $(function () {
    
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Clientes
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
                        <a href="<?php echo base_url(); ?>cliente/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Clientes</a>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                    <table id="example1" class="table table-bordered btn-hover">
                        <thead>
                            <tr>
                                <th>id_cliente</th>
                                <th>razonsocial_cliente</th>
                                <th>documento_cliente</th>
                                <th>tel_cliente</th>
                                <th>direccion_cliente</th>
                                <th>estado_cliente</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php if(!empty($cliente)):?>
                                <?php foreach($cliente as $clientes):?>
                            <tr>
                                <td><?php echo $clientes->id_cliente;?></td>
                                <td><?php echo $clientes->razonsocial_cliente;?></td>
                                <td><?php echo $clientes->documento_cliente;?></td>
                                <td><?php echo $clientes->tel_cliente;?></td>
                                <td><?php echo $clientes->direccion_cliente;?></td>
                                <td><?php echo $clientes->estado_cliente;?></td>
                                  <td> 
                                    <div class="btn-group">
                                        
                                        <button type="button" class="btn btn-info btn-view-cliente" data-toggle="modal" data-target="#modal-info"
                                        value="<?php echo $clientes->id_cliente;?>">
                                            <span class="fa fa-eye"></span> Ver
                                        </button>

                                        <a href="<?php echo base_url();?>clientes/edit/<?php echo $clientes->id_cliente;?>"class="btn btn-warning"><span class="fa fa-pencil"></span> Editar </a>

                                        <a href="<?php echo base_url(); ?>clientes/delete/<?php echo $clientes->id_cliente; ?>"class="btn btn-danger btn-remove"><span class="fa fa-remove"></span> Anular </a>

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
                <h4 class="modal-title">Informacion de Clientes</h4>
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
