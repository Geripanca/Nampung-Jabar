<!-- Ckeditor -->
<script src="<?=base_url('assets/');?>vendor/ckeditor/ckeditor.js"></script>
<script src="<?=base_url('assets/');?>vendor/ckeditor/adapter/jquery.js"></script>
<!-- Alert Ketika Error -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card mb-3">
  
  <div class="card-header" style="background-color: #fefae0; opacity :0.7;">
    <h3>Form Edit Artikel</h3>
  </div>
  <div class="card-body" style="background-color: rgb(244, 223, 185);">
  <?php echo form_open_multipart('Artikel/editdata2');?>
    <input type="hidden" name="id" value="<?= $artikel['id'];?>">
    <input type="hidden" name="foto_lama" value="<?= $artikel['poster_artikel'];?>">
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Artikel</label>
    <input type="text" class="form-control" id="formGroupExampleInput name" name="name"
    value="<?= $artikel['name'];?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Alamat</label>
    <input type="text" class="form-control" id="alamat formGroupExampleInput name" name="alamat"
    value="<?= $artikel['alamat'];?>" >
  </div>
  <label for="formGroupExampleInput">Deskripsi</label>
  <div class="form-group">
    <textarea class="artikel form-control" name="deskripsi"  id="deskripsi formGroupExampleInput"><?= $artikel['deskripsi'];?></textarea>
    
    <?= form_error('deskripsi', '<small class="text pl-1 text-danger">','</small>');?>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Choose File</label>
    <input type="file" class="form-control" name="foto_artikel" id="formGroupExampleInput">
  </div>
  <div class="float-right mx-2">
      <a href="<?= base_url('artikel/index');?>"  class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
        Cancel
      </a>
  </div>
  <div class="float-right">
      <button href="" type="submit" name="ubahdata" class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
        Update
      </button>
  </div>
</form>

 

</div>

</div>
<!-- /.container-fluid -->

</div>

<!-- End of Main Content -->

<script>
     CKEDITOR.replace( 'deskripsi' );
 </script>

