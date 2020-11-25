<div class="container-fluid">

  <button type="button" class="tambah btn btn-sm btn-success mb-2"><i class="fas fa-plus">Tambah Data</i></button>
<table class="table table-bordered table-stiped table-sm table-responsive-md mt-2">
  
  <thead class="thead-dark text-center">
    <tr>
    <th >No</th>
    <th >Id Salesman</th>
    <th >Nama</th>
    <th >Komisi</th>
    <th >Target Jual</th>
    <th >Produk Terjual</th>
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php $no=1;foreach ($salesman as $s): ?>
    <tr class="bg-light">
      <td align="center"><?php echo $no++; ?></td>
      <td><?php echo $s->idSalesman; ?></td>
      <td><?php echo $s->namaSalesman; ?></td>
      <td>Rp. <?php echo number_format($s->komisiSalesman,0,',','.'); ?></td>
      <td align="center"><?php echo $s->targetSales; ?></td>
      <td align="center"><?php echo $s->produkTerjual; ?></td>
      <td>
        <center>
          <button type="button" idSalesman="<?php echo $s->idSalesman; ?>" class="edit btn btn-warning"><i class="fas fa-edit"></i></button>
          <button type="button" idSalesman="<?php echo $s->idSalesman; ?>" class="hapus btn btn-danger"> <i class="fas fa-trash"></i></button>
        </center>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>

<!-- Button to Open the Modal -->
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
                var aksi = 'Tambah Salesman';
                $.ajax({
                    url: '<?php echo base_url(); ?>/DataSalesman/tambah',
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

                    var idSalesman = $(this).attr("idSalesman");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataSalesman/edit',
                        method: 'post',
                        data: {idSalesman:idSalesman},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var idSalesman = $(this).attr("idSalesman");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataSalesman/hapus',
                        method: 'post',
                        data: {idSalesman:idSalesman},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>