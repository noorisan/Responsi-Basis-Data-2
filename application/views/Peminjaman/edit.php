<form method="post" id="form">
    <div class="form-group">
        <label>ID Peminjaman:</label>
        <input type="number" class="form-control"  name="idPeminjaman-baru" placeholder="masukan id peminjaman" value="<?php echo $hasil->idPeminjaman; ?>">
    </div>
    <div class="form-group">
        <label>ID Anggota:</label>
        <select class="form-control" name="idAnggota">
            <option value="<?php echo $hasil->idAnggota; ?>"><?php echo $hasil->idAnggota;?></option>
            <?php foreach($Anggota as $a) : ?>
                <option value="<?php echo $a->idAnggota; ?>"><?php echo $a->idAnggota; ?> - <?php echo $a->Nama; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
       <label>ID Buku:</label>
       <select class="form-control" name="idBuku">
            <option value="<?php echo $hasil->idBuku; ?>"><?php echo $hasil->idBuku;?></option>
            <?php foreach($Buku as $b) : ?>
                <option value="<?php echo $b->idBuku; ?>"><?php echo $b->idBuku; ?> - <?php echo $b->namaBuku; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
       <label>ID Petugas:</label>
       <select class="form-control" name="idPetugas">
            <option value="<?php echo $hasil->idPetugas; ?>"><?php echo $hasil->idPetugas;?></option>
            <?php foreach($Petugas as $p) : ?>
                <option value="<?php echo $p->idPetugas; ?>"><?php echo $p->idPetugas; ?> - <?php echo $p->Nama; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
       <label>Jumlah Peminjaman:</label>
       <input type="number" class="form-control" name="jmlhPinjam" placeholder="masukan jumlah peminjaman" value="<?php echo $hasil->jmlhPinjam; ?>">
    </div>
    <div class="form-group">
       <label>Tanggal Peminjaman:</label>
       <input type="date" class="form-control" name="tglPinjam" value="<?php echo $hasil->tglPinjam; ?>">
    </div>
    <div class="form-group">
       <label>Tanggal Kembali:</label>
       <input type="date" class="form-control" name="tglKembali" value="<?php echo $hasil->tglKembali; ?>">
    </div>
    <div class="form-group">
       <label>Status:</label>
       <select class="form-control" name="statusBuku">
            <option value="<?php echo $hasil->statusBuku; ?>"><?php echo $hasil->statusBuku; ?></option>
            <option value="Dipinjam">Dipinjam</option>
            <option value="Dikembalikan">Dikembalikan</option>
        </select>
    </div>
    <input type="hidden" name="idPeminjaman-lama" value="<?php echo $hasil->idPeminjaman;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/DataPeminjaman/editPeminjaman",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/DataPeminjaman/tampilPeminjaman");    
                    }
                });
            });
        });
</script> 