<form method="post" id="form">
    <div class="form-group">
        <label>ID Buku:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->idBuku; ?>" name="idBuku-baru" placeholder="Masukan ID Buku">
    </div>
    <div class="form-group">
         <label>Judul Buku:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->namaBuku; ?>" name="namaBuku" placeholder="Masukan Judul Buku" >
    </div>
    <div class="form-group">
            <label>Jenis Buku:</label>
        <select class="form-control" name="jenisBuku">
            <option value="<?php echo $hasil->jenisBuku; ?>"><?php echo $hasil->jenisBuku; ?></option>
            <option value="Agama">Agama</option>
            <option value="Biografi">Biografi</option>
            <option value="Fiksi">Fiksi</option>
            <option value="Humor">Humor</option>
            <option value="Politik">Politik</option>
            <option value="Science Tech">Science Tech</option>
        </select>
    </div>
    <div class="form-group">
       <label>Pengarang:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->Pengarang; ?>" name="Pengarang" placeholder="Masukan Nama Pengarang">
    </div>
    <div class="form-group">
       <label>Tahun Terbit:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->tahunTerbit; ?>" name="tahunTerbit" placeholder="Masukan Tahun Terbit">
    </div>
    <div class="form-group">
       <label>ISBN:</label>
       <input type="text" class="form-control" value="<?php echo $hasil->ISBN; ?>" name="ISBN" placeholder="Masukan ISBN">
    </div>
    <div class="form-group">
       <label>Jumlah Buku:</label>
       <input type="number" class="form-control" value="<?php echo $hasil->jmlhBuku; ?>" name="jmlhBuku" placeholder="Masukan Jumlah Buku">
    </div>
    <input type="hidden" name="idBuku-lama" value="<?php echo $hasil->idBuku;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/DataBuku/editBuku",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataBuku/tampilBuku");    
                    }
                });
            });
        });
</script> 