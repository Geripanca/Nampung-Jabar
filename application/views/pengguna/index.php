
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"> Pengguna</h1>
                    <p class="mb-4">Database pengguna yang terdaftar pada aplikasi Nampung Jabar.</p>
                    <!-- DataTales Example -->
                    <div class="card mb-4" style="background-color:#fefae0;">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead style="background-color: #606C38; opacity : 0.6;">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pengguna</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pengguna as $pe) : ?>
                                    <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $pe['name']; ?></td>
                                    <td>
                                    <a href="<?= base_url('Pengguna/hapusdata')?>/<?= $pe['id']?>" class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                    Delete
                                    </a>
                                    </td>

                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>

