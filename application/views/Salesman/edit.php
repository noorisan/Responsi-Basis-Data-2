<form method="post" id="form">
    <div class="form-group">
        <label>ID Salesman:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->idSalesman; ?>" name="idSalesman-baru" placeholder="Masukan ID">
    </div>
    <div class="form-group">
         <label>Nama:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->namaSalesman; ?>" name="namaSalesman" placeholder="Masukan Nama" >
    </div>
    <div class="form-group">
       <label>Komisi:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->komisiSalesman; ?>" name="komisiSalesman">
    </div>
    <div class="form-group">
       <label>Target Jual:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->targetSales; ?>" name="targetSales" placeholder="Masukan Target Jual">
    </div>
    <div class="form-group">
       <label>Produk terjual:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->produkTerjual; ?>" name="produkTerjual" placeholder="Masukan Jumlah Produk yang Terual">
    </div>
    <input type="hidden" name="idSalesman-lama" value="<?php echo $hasil->idSalesman;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/DataSalesman/editSalesman",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataSalesman/tampilSalesman");    
                    }
                });
            });
        });
</script> 