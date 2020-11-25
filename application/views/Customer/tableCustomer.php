<div class="container-fluid">

  <button type="button" class="tambah btn btn-sm btn-success mb-2"><i class="fas fa-plus">Tambah Data</i></button>
<table class="table table-bordered table-stiped table-sm table-responsive-md mt-2">
  
  <thead class="thead-dark text-center">
    <tr>
    <th >No</th>
    <th >ID Customer</th>
    <th >Nama</th>
    <th >Alamat</th>
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php $no=1;foreach ($customer as $c): ?>
    <tr class="bg-light">
      <td align="center"><?php echo $no++; ?></td>
      <td><?php echo $c->idCustomer; ?></td>
      <td><?php echo $c->namaCustomer; ?></td>
      <td><?php echo $c->alamat; ?></td>
      <td>
        <center>
          <button type="button" idCustomer="<?php echo $c->idCustomer; ?>" class="edit btn btn-warning"><i class="fas fa-edit"></i></button>
          <button type="button" idCustomer="<?php echo $c->idCustomer; ?>" class="hapus btn btn-danger"> <i class="fas fa-trash"></i></button>
        </center>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>

<!-- The Modal -->
        <div class="modal fade" id="myModal">
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
                var aksi = 'Tambah Customer';
                $.ajax({
                    url: '<?php echo base_url(); ?>/DataCustomer/tambah',
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

                    var idCustomer = $(this).attr("idCustomer");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataCustomer/edit',
                        method: 'post',
                        data: {idCustomer:idCustomer},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var idCustomer = $(this).attr("idCustomer");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataCustomer/hapus',
                        method: 'post',
                        data: {idCustomer:idCustomer},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>