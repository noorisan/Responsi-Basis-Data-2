<form method="POST" id="form">
    <div class="form-group">
        <label>ID Peminjaman:</label>
        <input type="number" class="form-control"  name="idPeminjaman" placeholder="masukan id peminjaman">
    </div>
    <div class="form-group">
        <label>ID Anggota:</label>
        <select class="form-control" name="idAnggota">
            <option value="">--pilih anggota--</option>
            <?php foreach($Anggota as $a) : ?>
                <option value="<?php echo $a->idAnggota; ?>"><?php echo $a->idAnggota; ?> - <?php echo $a->Nama; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
       <label>ID Buku:</label>
       <select class="form-control" name="idBuku">
            <option value="">--pilih buku--</option>
            <?php foreach($Buku as $b) : ?>
                <option value="<?php echo $b->idBuku; ?>"><?php echo $b->idBuku; ?> - <?php echo $b->namaBuku; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
       <label>ID Petugas:</label>
       <select class="form-control" name="idPetugas">
            <option value="">--pilih petugas--</option>
            <?php foreach($Petugas as $p) : ?>
                <option value="<?php echo $p->idPetugas; ?>"><?php echo $p->idPetugas; ?> - <?php echo $p->Nama; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
       <label>Jumlah Peminjaman:</label>
       <input type="number" class="form-control" name="jmlhPinjam" placeholder="masukan jumlah peminjaman">
    </div>
    <div class="form-group">
       <label>Tanggal Peminjaman:</label>
       <input type="date" class="form-control" name="tglPinjam" >
    </div>
    <div class="form-group">
       <label>Tanggal Kembali:</label>
       <input type="date" class="form-control" name="tglKembali" >
    </div>
    <div class="form-group">
       <label>Status:</label>
       <select class="form-control" name="statusBuku">
            <option value="">--pilih status--</option>
            <option value="Dipinjam">Dipinjam</option>
            <option value="Dikembalikan">Dikembalikan</option>
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
                    url : "<?php echo base_url(); ?>/DataPeminjaman/simpanPeminjaman",
                    data: data,
                    cache   : false,
                    success : function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataPeminjaman/tampilPeminjaman");
                    }
                });
            });
        });
</script>