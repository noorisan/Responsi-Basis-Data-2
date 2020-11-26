<form method="post" id="form">
    <div class="form-group">
        <label>ID Anggota:</label>
        <input type="text" class="form-control"  name="idAnggota">
    </div>
    <div class="form-group">
        <label>Nama Anggota:</label>
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
    <div class="form-group">
       <label>Pekerjaan:</label>
       <select class="form-control" name="Pekerjaan">
            <option value="">--pilih pekerjaan--</option>
            <option value="Pengajar/Dosen/Guru">Pengajar/Dosen/Guru</option>
            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
            <option value="Lainnya">Lainnya</option>
        </select>
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>

<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type    : 'POST',
                    url : "<?php echo base_url(); ?>/DataAnggota/simpanAnggota",
                    data: data,
                    cache   : false,
                    success : function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataAnggota/tampilAnggota");
                    }
                });
            });
        });
</script>