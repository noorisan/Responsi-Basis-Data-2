<form method="post" id="form">
    <div class="form-group">
        <label>ID Sale:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->idSale; ?>" name="idSale-baru" placeholder="Masukan ID">
    </div>
    <div class="form-group">
        <label>ID Salesman:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->idSalesman; ?>" name="idSalesman" placeholder="Masukan Nama ID Salesman">
    </div>
    <div class="form-group">
       <label>ID Property:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->idProduk; ?>" name="idProduk">
    </div>
    <div class="form-group">
       <label>ID Customer:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->idCustomer; ?>" name="idCustomer">
    </div>
    <div class="form-group">
       <label>Tanggal:</label>
       <input type="date" class="form-control" value="<?php echo $hasil->date; ?>" name="date">
    </div>
    <div class="form-group">
       <label>Jumlah Penjualan:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->jumlahSale; ?>" name="jumlahSale">
    </div>
    <div class="form-group">
       <label>Total Bayar:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->totalBayar; ?>" name="totalBayar">
    </div>
    <input type="hidden" name="idSale-lama" value="<?php echo $hasil->idSale;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/DataSale/editSale",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataSale/tampilSale");    
                    }
                });
            });
        });
</script> 