
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Desa Wisata</h1>
                    <p class="mb-4">Database informasi desa wisata yang tersedia pada aplikasi Nampung Jabar.</p>

                    <!-- DataTales Example -->
                    <div class="card mb-4" style="background-color:#fefae0;">
                        <div class="card-body">
                          <div class="float-right">
                          <a href="<?= base_url('listdesa/tambahdata');?>" class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                           Tambah
                          </a>
                          </div>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead style="background-color: #606C38; opacity : 0.6;">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Desa Wisata</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($list as $li) : ?>
                                    <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $li['name']; ?></td>
                                    <td><?= $li['img']; ?></td>
                                    
                                    <td>
                                    <a href="<?= base_url('listdesa/editdata');?>/<?= $li['id']?>" class="btn mb-3" style="background-color: #606C38; opacity : 0.6" >
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Edit
                                    </a>
                                    <a href="<?= base_url('listdesa/hapusdata');?>/<?= $li['id']?>" class="btn mb-3" style="background-color: #606C38; opacity : 0.6" 
                                    onclick="return confirm('yakin?');">
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