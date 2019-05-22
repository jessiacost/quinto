
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Clientes
        <small>Nuevo Cliente</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">  
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                    <?php if ($this->session->flashdata("error")) : ?>
                <div class="alert alert-danger alert-dismissible">
                <p><?php echo $this->session->flashdata("error"); ?></p>
                </div>
            <?php endif; ?>
                        <form action="<?php echo base_url(); ?>clientes/store" method="post">
                        <div class="form-group">

                        <label for="nombre">razonsocial_cliente</label>
                        <input type="text" class="form-control"id="razonsocial_cliente" name="razonsocial_cliente">
                        </div>

                        <div class="form-group">

                        <label for="nombre">documento_cliente</label>
                        <input type="text" class="form-control"id="documento_cliente" name="documento_cliente">
                        </div>
                        <div class="form-group">

                        <label for="nombre">tel_cliente</label>
                        <input type="text" class="form-control"id="tel_cliente" name="tel_cliente">
                        </div>
                        <div class="form-group">

                        <label for="nombre">direccion_cliente</label>
                        <input type="text" class="form-control"id="direccion_cliente" name="direccion_cliente">
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
<!-- /.content-wrapper -->

