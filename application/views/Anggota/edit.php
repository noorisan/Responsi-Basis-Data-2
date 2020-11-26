<form method="post" id="form">
    <div class="form-group">
        <label>ID Anggota:</label>
        <input type="text" class="form-control"  name="idAnggota-baru" value="<?php echo $hasil->idAnggota;?>">
    </div>
    <div class="form-group">
        <label>Nama Anggota:</label>
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
    <div class="form-group">
       <label>Pekerjaan:</label>
       <select class="form-control" name="Pekerjaan">
            <option value="<?php echo $hasil->Pekerjaan;?>"><?php echo $hasil->Pekerjaan;?></option>
            <option value="Pengajar/Dosen/Guru">Pengajar/Dosen/Guru</option>
            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
            <option value="Lainnya">Lainnya</option>
        </select>
    </div>
    <input type="hidden" name="idAnggota-lama" value="<?php echo $hasil->idAnggota;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/DataAnggota/editAnggota",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataAnggota/tampilAnggota");    
                    }
                });
            });
        });
</script> 