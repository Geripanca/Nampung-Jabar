<!-- Ckeditor -->
<script src="<?=base_url('assets/');?>vendor/ckeditor/ckeditor.js"></script>
<script src="<?=base_url('assets/');?>vendor/ckeditor/adapter/jquery.js"></script>
<!-- Alert Ketika Error -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card mb-3">
  <div class="card-header" style="background-color: #fefae0; opacity :0.7;">
    <h3>Form Tambah Artikel</h3>
  </div>
  <div class="card-body" style="background-color: rgb(244, 223, 185);">
  <?php echo form_open_multipart('Artikel/tambahdata');?>
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Artikel</label>
    <input type="text" class="form-control" id="formGroupExampleInput name" name="name">
    <?= form_error('name', '<small class="text pl-1 text-danger">','</small>');?>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Alamat</label>
    <input type="text" class="form-control" id="alamat formGroupExampleInput name" name="alamat">
    <?= form_error('alamat', '<small class="text pl-1 text-danger">','</small>');?>
  </div>
  <label for="formGroupExampleInput">Deskripsi</label>
  <div class="form-group">
    <textarea class="artikel form-control" name="deskripsi" id="deskripsi formGroupExampleInput"></textarea>
    <?= form_error('deskripsi', '<small class="text pl-1 text-danger">','</small>');?>
  </div>
  <div class="form-group">
  <input type="file"  name="foto_artikel" class="image form-control" id="formGroupExampleInput"  >
 
  </div>
  <div class="float-right mx-2">
      <a href="<?= base_url('artikel/index');?>"  class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
        Cancel
      </a>
  </div>
  <div class="float-right">
      <button  type="submit"  value="upload" class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
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

<script>
     CKEDITOR.replace( 'deskripsi' );
 </script>

