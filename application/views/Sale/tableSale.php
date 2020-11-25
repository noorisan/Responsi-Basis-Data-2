<div class="container-fluid">

  <button type="button" class="tambah btn btn-sm btn-success mb-2"><i class="fas fa-plus">Tambah Data</i></button>
<table class="table table-bordered table-stiped table-sm table-responsive-lg mt-2">
  
  <thead class="thead-dark text-center">
    <tr>
    <th >No</th>
    <th >ID Sale</th>
    <th >ID Salesman</th>
    <th >ID Property</th>
    <th >ID Customer</th>
    <th >Tanggal</th>
    <th >Jumlah Pembelian</th>
    <th >Total Bayar</th>
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php $no=1;foreach ($Sale as $c): ?>
    <tr class="bg-light">
      <td align="center"><?php echo $no++; ?></td>
      <td><?php echo $c->idSale; ?></td>
      <td><?php echo $c->idSalesman; ?></td>
      <td><?php echo $c->idProduk; ?></td>
      <td><?php echo $c->idCustomer; ?></td>
      <td><?php echo $c->date; ?></td>
      <td><?php echo $c->jumlahSale; ?></td>
      <td><?php echo $c->totalBayar; ?></td>
      <td>
        <center>
          <button type="button" idSale="<?php echo $c->idSale; ?>" class="edit btn btn-warning"><i class="fas fa-edit"></i>
          </button>
          <button type="button" idSale="<?php echo $c->idSale; ?>" class="hapus btn btn-danger"> <i class="fas fa-trash"></i>
          </button>
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
                var aksi = 'Tambah Sale';
                $.ajax({
                    url: '<?php echo base_url(); ?>/DataSale/tambah',
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

                    var idSale = $(this).attr("idSale");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataSale/edit',
                        method: 'post',
                        data: {idSale:idSale},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var idSale = $(this).attr("idSale");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/DataSale/hapus',
                        method: 'post',
                        data: {idSale:idSale},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>