<form method="post" id="form">
    <div class="form-group">
        <label>ID Customer:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->idCustomer; ?>" name="idCustomer-baru" placeholder="Masukan ID">
    </div>
    <div class="form-group">
         <label>Nama:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->namaCustomer; ?>" name="namaCustomer" placeholder="Masukan Nama" >
    </div>
    <div class="form-group">
       <label>Alamat:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->alamat; ?>" name="alamat">
    </div>
    <input type="hidden" name="idCustomer-lama" value="<?php echo $hasil->idCustomer;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/DataCustomer/editCustomer",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataCustomer/tampilCustomer");    
                    }
                });
            });
        });
</script> 