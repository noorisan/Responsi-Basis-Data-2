<form method="post" id="form">
    <div class="form-group">
        <label>ID Petugas:</label>
        <input type="text" class="form-control"  name="idPetugas-baru" value="<?php echo $hasil->idPetugas;?>">
    </div>
    <div class="form-group">
        <label>Nama Petugas:</label>
        <input type="text" class="form-control"  name="Nama" value="<?php echo $hasil->Nama;?>">
    </div>
    <div class="form-group">
         <label>Alamat:</label>
        <input type="text" class="form-control"  name="Alamat" value="<?php echo $hasil->Alamat;?>">
    </div>
    <div class="form-group">
       <label>No. Telepon:</label>
       <input type="text" class="form-control" name="noTlepon" value="<?php echo $hasil->noTlepon;?>">
    </div>
    <input type="hidden" name="idPetugas-lama" value="<?php echo $hasil->idPetugas;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/DataPetugas/editPetugas",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataPetugas/tampilPetugas");    
                    }
                });
            });
        });
</script> 