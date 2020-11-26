<form method="post" id="form">
    <div class="form-group">
        <label>ID Petugas:</label>
        <input type="text" class="form-control"  name="idPetugas">
    </div>
    <div class="form-group">
        <label>Nama Petugas:</label>
        <input type="text" class="form-control"  name="Nama">
    </div>
    <div class="form-group">
         <label>Alamat:</label>
        <input type="text" class="form-control"  name="Alamat">
    </div>
    <div class="form-group">
       <label>No. Telepon:</label>
       <input type="text" class="form-control" name="noTlepon">
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>

<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type    : 'POST',
                    url : "<?php echo base_url(); ?>/DataPetugas/simpanPetugas",
                    data: data,
                    cache   : false,
                    success : function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataPetugas/tampilPetugas");
                    }
                });
            });
        });
</script>