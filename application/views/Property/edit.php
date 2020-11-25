<form method="post" id="form">
    <div class="form-group">
        <label>ID Produk:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->idProduk; ?>" name="idProduk-baru">
    </div>
    <div class="form-group">
         <label>Nama Property:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->namaProduk; ?>" name="namaProduk" placeholder="Masukan Nama" >
    </div>
    <div class="form-group">
       <label>Stock:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->stockProduk; ?>" name="stockProduk">
    </div>
    <div class="form-group">
       <label>Harga Unit:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->hargaProduk; ?>" name="hargaProduk">
    </div>
    <input type="hidden" name="idProduk-lama" value="<?php echo $hasil->idProduk;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/DataProperty/editProperty",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataProperty/tampilProperty");    
                    }
                });
            });
        });
</script> 