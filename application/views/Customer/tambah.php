<form method="post" id="form">
    <div class="form-group">
        <label>ID Customer:</label>
        <input type="text" class="form-control"  name="idCustomer" placeholder="Masukan ID">
    </div>
    <div class="form-group">
         <label>Nama:</label>
        <input type="text" class="form-control"  name="namaCustomer" placeholder="Masukan Nama" >
    </div>
    <div class="form-group">
       <label>Alamat:</label>
       <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>

<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type    : 'POST',
                    url : "<?php echo base_url(); ?>/DataCustomer/simpanCustomer",
                    data: data,
                    cache   : false,
                    success : function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataCustomer/tampilCustomer");
                    }
                });
            });
        });
</script>