<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card mb-3">
  <div class="card-header" style="background-color: #fefae0; opacity :0.7;">
    <h3>Form Tambah Rekomendasi Desa Wisata</h3>
  </div>
  <div class="card-body" style="background-color: rgb(244, 223, 185);">
  <?php echo form_open_multipart('Rekomendasi/tambahdata');?>
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Rekomendasi</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name">
    <?= form_error('name', '<small class="text pl-1 text-danger">','</small>');?>
  </div>
  <label for="formGroupExampleInput">Deskripsi</label>
  <div class="form-group">
    <input class="form-control" name="deskripsi" id="formGroupExampleInput">
    <?= form_error('deskripsi', '<small class="text pl-1 text-danger">','</small>');?>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">ID Artikel</label>
    <input type="text" class="form-control" id="formGroupExampleInput" pattern="[0-9]" name="id_artikel" value="">
    <?= form_error('id_artikel', '<small class="text pl-1 text-danger">','</small>');?>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Choose File</label>
    <input type="file" name="thumb_rekomendasi" class="form-control" id="formGroupExampleInput" >
  </div>
  <div class="float-right mx-2">
      <a href="<?= base_url('rekomendasi/index');?>"  class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
        Cancel
      </a>
  </div>
  <div class="float-right">
      <button href="" type="submit" class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
        Tambah
      </button>
  </div>
</form>

  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
