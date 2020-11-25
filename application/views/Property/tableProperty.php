<div class="container-fluid">

  <button type="button" class="tambah btn btn-sm btn-success mb-2"><i class="fas fa-plus">Tambah Data</i></button>
<table class="table table-bordered table-stiped table-sm table-responsive-md mt-2">
  
  <thead class="thead-dark text-center">
    <tr>
    <th >No</th>
    <th >ID Property</th>
    <th>Nama Property</th>
    <th>Stock</th>
    <th>Harga Unit</th>
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php $no=1;foreach ($Property as $c): ?>
    <tr class="bg-light">
      <td align="center"><?php echo $no++; ?></td>
      <td><?php echo $c->idProduk; ?></td>
      <td><?php echo $c->namaProduk; ?></td>
      <td align="center"><?php echo $c->stockProduk; ?></td>
      <td>Rp. <?php echo number_format($c->hargaProduk,0,',','.'); ?></td>
      <td>
        <center>
          <button type="button" idProduk="<?php echo $c->idProduk; ?>" class="edit btn btn-warning"><i class="fas fa-edit"></i></button>
          <button type="button" idProduk="<?php echo $c->idProduk; ?>" class="hapus btn btn-danger"> <i class="fas fa-trash"></i></button>
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
                var aksi = 'Tambah Property';
                $.ajax({
                    url: '<?php echo base_url(); ?>/DataProperty/tambah',
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

                    var idProduk = $(this).attr("idProduk");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataProperty/edit',
                        method: 'post',
                        data: {idProduk:idProduk},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var idProduk = $(this).attr("idProduk");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataProperty/hapus',
                        method: 'post',
                        data: {idProduk:idProduk},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>