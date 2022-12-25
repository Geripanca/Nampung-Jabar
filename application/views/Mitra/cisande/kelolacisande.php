
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kelola Desa Cisande</h1>
                    <p class="mb-4">Database informasi rekomendasi desa cisande yang tersedia pada aplikasi Nampung Jabar.</p>
                    <!-- DataTales Example -->
                    <div class="card mb-4" style="background-color:#fefae0;">
                        <div class="card-body">
                          <div class="float-right">
                          <a href="<?= base_url('cisande/tambahdata');?>" class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                           Tambah
                          </a>
                          </div>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead style="background-color: #606C38; opacity : 0.6;">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama </th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Img</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>

