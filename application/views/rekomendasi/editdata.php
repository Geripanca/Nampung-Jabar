<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card mb-3">
  <div class="card-header" style="background-color: #fefae0; opacity :0.7;">
    <h3>Form Edit Rekomendasi Desa Wisata</h3>
  </div>
  <div class="card-body" style="background-color: rgb(244, 223, 185);">
  <?php echo form_open_multipart('Rekomendasi/editdata2');?>
  <input type="hidden" name="id" value="<?= $rekomendasi['id'];?>">
  <input type="hidden" name="foto_lama" value="<?= $rekomendasi['img'];?>">
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Rekomendasi</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name"
    value="<?= $rekomendasi['name'];?>">
  </div>
  <label for="formGroupExampleInput">Deskripsi</label>
  <div class="form-group">
    <input class="form-control" name="deskripsi" id="formGroupExampleInput"
    value="<?= $rekomendasi['deskripsi'];?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">ID Artikel</label>
    <input type="text" pattern="[0-9]" class="form-control" id="formGroupExampleInput" name="id_artikel" 
    value="<?= $rekomendasi['id_artikel'];?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Choose File</label>
    <input type="file" name="thumb_rekomendasi"class="form-control" id="formGroupExampleInput" >
  </div>
  <div class="float-right mx-2">
      <a href="<?= base_url('rekomendasi/index');?>"  class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
        Cancel
      </a>
  </div>
  <div class="float-right">
      <button href="" type="submit" class="btn mb-3" style="background-color: #606C38; opacity : 0.6">
        Update
      </button>
  </div>
</form>

  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
