<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Hi, Selamat Datang <?= $akun['name'];?></h1>

<!-- Page Heading -->

<div class="card mb-3">
 
  <div class="card-body">
    <h5 class="card-title">Desa Cisande</h5>
    <p class="card-text">Kelola Data Mitra</p>
    <a href="" class="btn btn-primary " data-toggle="modal" data-target="#CisandeModal">Join</a>
  </div>
</div>
<div class="card mb-3">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Desa Cimahi</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="<?= base_url('mitra/kelolacimahi')?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card mb-3">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


    




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Cisande Modal-->
<div class="modal fade" id="CisandeModal" tabindex="-1" role="dialog" aria-labelledby="CisandeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CisandeModalLabel">Masuk ke kelola data Cisande?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" type="submit" href="<?= base_url('mitra/joincisande')?>">Join</a>
                </div>
            </div>
        </div>
    </div>

