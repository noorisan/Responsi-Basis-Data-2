<div class="container-fluid">

  <button type="button" class="tambah btn btn-sm btn-success mb-2"><i class="fas fa-plus">Tambah Data</i></button>
<table class="table table-bordered table-stiped table-sm table-responsive-md mt-2">
  
  <thead class="thead-dark text-center">
    <tr>
    <th >ID Buku</th>
    <th >Judul Buku</th>
    <th >Jenis Buku</th>
    <th >Pengarang</th>
    <th>Tahun Terbit</th>
    <th>ISBN</th>
    <th>Jumlah Buku</th>
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($buku as $c): ?>
    <tr class="bg-light text-center">
      <td><?php echo $c->idBuku; ?></td>
      <td><?php echo $c->namaBuku; ?></td>
      <td><?php echo $c->jenisBuku; ?></td>
      <td><?php echo $c->Pengarang; ?></td>
      <td><?php echo $c->tahunTerbit; ?></td>
      <td><?php echo $c->ISBN; ?></td>
      <td><?php echo $c->jmlhBuku; ?></td>
      <td>
        <center>
          <button type="button" idBuku="<?php echo $c->idBuku; ?>" class="edit btn btn-warning"><i class="fas fa-edit"></i></button>
          <button type="button" idBuku="<?php echo $c->idBuku; ?>" class="hapus btn btn-danger"> <i class="fas fa-trash"></i></button>
        </center>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>

<!-- The Modal -->
        <div class="modal" id="myModal" >
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
                var aksi = 'Tambah Buku';
                $.ajax({
                    url: '<?php echo base_url(); ?>/DataBuku/tambah',
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

                    var idBuku = $(this).attr("idBuku");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataBuku/edit',
                        method: 'post',
                        data: {idBuku:idBuku},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var idBuku = $(this).attr("idBuku");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataBuku/hapus',
                        method: 'post',
                        data: {idBuku:idBuku},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>