<script>

    $(document).ready(function () {
  
    var base_url = "<?php echo base_url(); ?>";
 
 $(".btn-view-cliente").on("click",function(){
        var id_cliente = $(this).val();
        alert(id_cliente);
        $.ajax({
            url: base_url + "cliente/view/"+ id_cliente,
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
        var id_cliente = $(this).val();
        $.ajax({
            url: base_url + "cliente/edit/"+ id_cliente,
            type: "POST",
            success: function(resp){
                $("#modal-info .modal-body").html(resp);
               // alert(resp);
            }
        });
    });
});

</script>
