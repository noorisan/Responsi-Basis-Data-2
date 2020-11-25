<form method="post" id="form">
    <div class="form-group">
        <label>ID Salesman:</label>
        <input type="text" class="form-control"  name="idSalesman" placeholder="Masukan ID">
    </div>
    <div class="form-group">
         <label>Nama:</label>
        <input type="text" class="form-control"  name="namaSalesman" placeholder="Masukan Nama" >
    </div>
    <div class="form-group">
       <label>Komisi:</label>
       <input type="text" class="form-control" name="komisiSalesman" value="0">
    </div>
    <div class="form-group">
       <label>Target Jual:</label>
       <input type="text" class="form-control" name="targetSales" placeholder="Masukan Target Jual">
    </div>
    <div class="form-group">
       <label>Produk terjual:</label>
       <input type="text" class="form-control" name="produkTerjual" placeholder="Masukan Jumlah Produk yang Terual">
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>

<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type    : 'POST',
                    url : "<?php echo base_url(); ?>/DataSalesman/simpanSalesman",
                    data: data,
                    cache   : false,
                    success : function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataSalesman/tampilSalesman");
                    }
                });
            });
        });
</script>