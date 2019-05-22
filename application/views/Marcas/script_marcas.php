<script>

    $(document).ready(function () {
  
    var base_url = "<?php echo base_url(); ?>";
 
 $(".btn-view-marcas").on("click",function(){
        var id_marca = $(this).val();
        alert(id_marca);
        $.ajax({
            url: base_url + "Marcas/view/"+ id_marca,
            type: "POST",
            success: function(resp){
                $("#modal-info .modal-body").html(resp);
               // alert(resp);
            }
        });
    });
});

</script>

<script>

	$(document).ready(function () {
  
    var base_url = "<?php echo base_url(); ?>";
 
 $(".btn-edit").on("click",function(){
        var id_marca = $(this).val();
        $.ajax({
            url: base_url + "Marcas/edit/"+ id_marca,
            type: "POST",
            success: function(resp){
                $("#modal-info .modal-body").html(resp);
               // alert(resp);
            }
        });
    });
});

</script>
