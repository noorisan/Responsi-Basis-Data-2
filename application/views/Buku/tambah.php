<form method="post" id="form">
    <div class="form-group">
        <label>ID Buku:</label>
        <input type="text" class="form-control"  name="idBuku" placeholder="Masukan ID Buku">
    </div>
    <div class="form-group">
         <label>Judul Buku:</label>
        <input type="text" class="form-control"  name="namaBuku" placeholder="Masukan Judul Buku" >
    </div>
    <div class="form-group">
            <label>Jenis Buku:</label>
        <select class="form-control" name="jenisBuku">
            <option value="">--pilih jenis buku--</option>
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
       <input type="text" class="form-control" name="Pengarang" placeholder="Masukan Nama Pengarang">
    </div>
    <div class="form-group">
       <label>Tahun Terbit:</label>
       <input type="text" class="form-control" name="tahunTerbit" placeholder="Masukan Tahun Terbit">
    </div>
    <div class="form-group">
       <label>ISBN:</label>
       <input type="text" class="form-control" name="ISBN" placeholder="Masukan ISBN">
    </div>
    <div class="form-group">
       <label>Jumlah Buku:</label>
       <input type="number" class="form-control" name="jmlhBuku" placeholder="Masukan Jumlah Buku">
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>

<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type    : 'POST',
                    url : "<?php echo base_url(); ?>/DataBuku/simpanBuku",
                    data: data,
                    cache   : false,
                    success : function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataBuku/tampilBuku");
                    }
                });
            });
        });
</script>