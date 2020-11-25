<form method="POST" id="form">
    <div class="form-group">
        <label>ID Sale:</label>
        <input type="text" class="form-control"  name="idSale">
    </div>
    <div class="form-group">
         <label>ID Salesman:</label>
        <input type="text" class="form-control"  name="idSalesman">
    </div>
    <div class="form-group">
       <label>ID Property:</label>
       <input type="text" class="form-control" name="idProduk">
    </div>
    <div class="form-group">
       <label>ID Customer:</label>
       <input type="text" class="form-control" name="idCustomer">
    </div>
    <div class="form-group">
       <label>Tanggal:</label>
       <input type="date" class="form-control" name="date">
    </div>
    <div class="form-group">
       <label>Jumlah Penjualan:</label>
       <input type="text" class="form-control" name="jumlahSale">
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>

<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type    : 'POST',
                    url : "<?php echo base_url(); ?>/DataSale/simpanSale",
                    data: data,
                    cache   : false,
                    success : function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataSale/tampilSale");
                    }
                });
            });
        });
</script>