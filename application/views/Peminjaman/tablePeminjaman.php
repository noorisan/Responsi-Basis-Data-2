<div class="container-fluid">

  <button type="button" class="tambah btn btn-sm btn-success mb-2"><i class="fas fa-plus">Tambah Data</i></button>
<table class="table table-bordered table-stiped table-sm table-responsive-lg mt-2">
  
  <thead class="thead-dark text-center">
    <tr>
    <th >ID Peminjaman</th>
    <th >ID Anggota</th>
    <th >ID Buku</th>
    <th >ID Petugas</th>
    <th >Jumlah Pinjam</th>
    <th >Tanggal Pinjam</th>
    <th >Tanggal Kembali</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($Peminjaman as $c): ?>
    <tr class="bg-light" align="center">
      <td><?php echo $c->idPeminjaman; ?></td>
      <td><?php echo $c->idAnggota; ?></td>
      <td><?php echo $c->idBuku; ?></td>
      <td><?php echo $c->idPetugas; ?></td>
      <td><?php echo $c->jmlhPinjam; ?></td>
      <td><?php echo $c->tglPinjam; ?></td>
      <td><?php echo $c->tglKembali; ?></td>
      <td><?php echo $c->statusBuku; ?></td>
      <td>
        <center>
          <button type="button" idPeminjaman="<?php echo $c->idPeminjaman; ?>" class="edit btn btn-warning"><i class="fas fa-edit"></i>
          </button>
          <button type="button" idPeminjaman="<?php echo $c->idPeminjaman; ?>" class="hapus btn btn-danger"> <i class="fas fa-trash"></i>
          </button>
        </center>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>
<!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="judul"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="tampil_modal">
                        <!-- Data akan di tampilkan disini-->
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                </div>

                </div>
            </div>
        </div>
<script>
            $(document).ready(function(){

                $('.tambah').click(function(){
                var aksi = 'Tambah Peminjaman';
                $.ajax({
                    url: '<?php echo base_url(); ?>/DataPeminjaman/tambah',
                    method: 'post',
                    data: {aksi:aksi},
                    success:function(data){
                        $('#myModal').modal("show");
                        $('#tampil_modal').html(data);
                        document.getElementById("judul").innerHTML='Tambah Data';

                    }
                });
                });

                $('.edit').click(function(){

                    var idPeminjaman = $(this).attr("idPeminjaman");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataPeminjaman/edit',
                        method: 'post',
                        data: {idPeminjaman:idPeminjaman},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var idPeminjaman = $(this).attr("idPeminjaman");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataPeminjaman/hapus',
                        method: 'post',
                        data: {idPeminjaman:idPeminjaman},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>