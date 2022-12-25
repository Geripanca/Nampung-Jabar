<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- Content Row -->
<section class="vh-10">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg">
        <div class="card" style="border-radius: 1rem;">
          <div class="row">
            
            <div class=" col-lg d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="<?= base_url('Mitra/joincisande')?>" method="post">
                  <div class="form-outline mb-4">
                    <label>Masukan Code</label>
                    <input type="text" id="code" name="code" class="form-control form-control-lg" />
                    <?= form_error('code', '<small class="text pl-3">','</small>');?>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-warning btn-lg btn-block" type="submit">Join</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Akhir Content-->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

