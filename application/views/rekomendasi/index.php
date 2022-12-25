
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Rekomendasi Desa Wisata</h1>
                    <p class="mb-4">Database informasi rekomendasi desa wisata yang tersedia pada aplikasi Nampung Jabar.</p>
                    <!-- DataTales Example -->
                    <div class="card mb-4" style="background-color:#fefae0;">
                        <div class="card-body">
                          <div class="float-right">
                          <a href="<?= base_url('rekomendasi/tambahdata');?>" class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                           Tambah
                          </a>
                          </div>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead style="background-color: #606C38; opacity : 0.6;">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Rekomendasi Desa Wisata</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($rekomendasi as $re) : ?>
                                    <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $re['name']; ?></td>
                                    <td><?= $re['img']; ?></td>
                                    <td><?= $re['deskripsi']; ?></td>
                                    
                                    <td>
                                    <a href="<?= base_url('rekomendasi/editdata')?>/<?= $re['id']?>" class="btn mb-3" style="background-color: #606C38; opacity : 0.6" >
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Edit
                                    </a>
                                    <a href="<?= base_url('rekomendasi/hapusdata');?>/<?= $re['id']?>" class="btn mb-3" onclick="return confirm('yakin?');"
                                    style="background-color: #606C38; opacity : 0.6">
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

