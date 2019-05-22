
<!-- =============================================== -->


<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Marcas
        <small>Editar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                    <?php if($this->session->flashdata("error")): ?>
                <div class="alert alert-danger alert-dismissible">
                <p><?php echo $this->session->flashdata("error");?></p>
                </div>
            <?php endif; ?>
                        <form action="<?php echo base_url(); ?>marcas/update" method="post">
                        <input type="hidden" name="id_marca"value="<?php echo $marcas->id_marca;?>">
                        <div class="form-group">

                        <label for="nombre">descripcion_marca:</label>
                        <input type="text" class="form-control"id="descripcion_marca" name="descripcion_marca"value="<?php echo $marcas->descripcion_marca;?>">
                        </div> 
                        <div class="form-group">

                        <label for="nombre">estado_marca:</label>
                        <input type="text" class="form-control"id="estado_marca" name="estado_marca"value="<?php echo $marcas->estado_marca;?>">
                        </div>
            
                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">
                                Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>