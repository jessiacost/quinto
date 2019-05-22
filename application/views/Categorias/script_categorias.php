<script>

    $(document).ready(function () {
  
    var base_url = "<?php echo base_url(); ?>";
 
 $(".btn-view-categorias").on("click",function(){
        var id_categoria = $(this).val();
        $.ajax({
            url: base_url + "Categorias/view/"+ id_categoria,
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
        var id = $(this).val();
        $.ajax({
            url: base_url + "Categorias/edit/"+ id,
            type: "POST",
            success: function(resp){
                $("#modal-info .mo
                    dal-body").html(resp);
               // alert(resp);
            }
        });
    });
});

</script>
