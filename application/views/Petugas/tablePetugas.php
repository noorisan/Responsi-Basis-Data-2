<div class="container-fluid">

<button type="button" class="tambah btn btn-sm btn-success mb-2"><i class="fas fa-plus">Tambah Data</i></button>
<table class="table table-bordered table-stiped table-sm table-responsive-md mt-2" id="tablePetugas">
  
  <thead class="thead-dark text-center">
    <tr>
    <th >ID Petugas</th>
    <th>Nama Petugas</th>
    <th>Alamat</th>
    <th>No. Telepon</th>
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($Petugas as $c): ?>
    <tr class="bg-light" align="center">
      <td><?php echo $c->idPetugas; ?></td>
      <td><?php echo $c->Nama; ?></td>
      <td><?php echo $c->Alamat; ?></td>
      <td><?php echo $c->noTlepon; ?></td>
      <td>
        <center>
          <button type="button" idPetugas="<?php echo $c->idPetugas; ?>" class="edit btn btn-warning"><i class="fas fa-edit"></i></button>
          <button type="button" idPetugas="<?php echo $c->idPetugas; ?>" class="hapus btn btn-danger"> <i class="fas fa-trash"></i></button>
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
                var aksi = 'Tambah Petugas';
                $.ajax({
                    url: '<?php echo base_url(); ?>/DataPetugas/tambah',
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

                    var idPetugas = $(this).attr("idPetugas");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataPetugas/edit',
                        method: 'post',
                        data: {idPetugas:idPetugas},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var idPetugas = $(this).attr("idPetugas");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataPetugas/hapus',
                        method: 'post',
                        data: {idPetugas:idPetugas},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
            $(document).ready(function () {
                $('#tablePetugas').DataTable();
            });
        </script>