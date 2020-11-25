<form method="post" id="form">
    <p>Yakin ingin menghapus data? <?php echo $hasil->idSalesman;?> - <?php echo $hasil->namaSalesman;?> </p>
    <input type="hidden" name="idSalesman" value="<?php echo $hasil->idSalesman;?>">
    <button id="tombol_hapus" type="button" class="btn btn-danger" data-dismiss="modal" >Hapus</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_hapus").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/DataSalesman/hapusSalesman",
                    data: data,

                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataSalesman/tampilSalesman");
                      
                    }
                });
            });
        });
</script> 