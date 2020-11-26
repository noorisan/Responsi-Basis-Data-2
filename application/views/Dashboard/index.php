        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?> </h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Buku</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $buku["totalBuku()"]; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Anggota</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $anggota; ?> </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Petugas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $petugas; ?> </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users-cog fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Peminjaman</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $peminjaman; ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-people-carry fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>