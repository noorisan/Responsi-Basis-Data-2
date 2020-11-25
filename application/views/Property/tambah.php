<form method="post" id="form">
    <div class="form-group">
        <label>ID Property:</label>
        <input type="text" class="form-control"  name="idProduk">
    </div>
    <div class="form-group">
        <label>Nama Property:</label>
        <input type="text" class="form-control"  name="namaProduk">
    </div>
    <div class="form-group">
         <label>Stock:</label>
        <input type="number" class="form-control"  name="stockProduk">
    </div>
    <div class="form-group">
       <label>Harga Unit:</label>
       <input type="text" class="form-control" name="hargaProduk">
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>

<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type    : 'POST',
                    url : "<?php echo base_url(); ?>/DataProperty/simpanProperty",
                    data: data,
                    cache   : false,
                    success : function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataProperty/tampilProperty");
                    }
                });
            });
        });
</script>