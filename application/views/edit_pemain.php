<br>

<div class="container">

<div class="card">
  <div class="card-header">
    <h3 align="center"><u>EDIT PEMAIN</u></h3>
  </div>
  <div class="card-body">
    <p class="card-text">
      <form action="<?php echo base_url(). 'profil/update'?>" method="post" enctype="multipart/form-data" >
  
    <?php foreach ($pemain as $main) : ?>

          <div class="form-group">
            <label>No Punggung</label>
            <input type="hidden" name="id_pemain" class="form-control" value="<?php echo $main->id_pemain?>">
            <input type="hidden" name="id_user" class="form-control" value="<?php echo $this->session->userdata('id_user') ?>" required>
            <input type="number" name="no_punggung" class="form-control" placeholder="No Punggung" value="<?php echo $main->no_punggung?>" required> 
          </div>

          <div class="form-group">
            <label>Nama Pemain</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Pemain" value="<?php echo $main->nama?>" required>  
          </div>

          <div class="form-group">
            <label>Usia Pemain</label>
            <input type="number" name="usia" class="form-control" placeholder="Usia Pemain" value="<?php echo $main->usia?>" required>  
          </div>

          <div class="form-group">
            <label>Foto Pemain</label><br>
            <img src="<?php echo base_url(). '/upload/'.$main->foto ?>"class="card-img-top" alt="..." style="width: 10%;"> 
             <input type="hidden" name="old_image" class="form-control" value="<?php echo $main->foto?>" required>       
            <input type="file" name="foto" class="form-control" >
          </div>

          
      </div>

        <div align="center">
        <button type="submit" href="<?php echo base_url('profil/index') ?>" class="btn btn-primary mt-3" ><i class="fas fa-backward"></i> Kembali</button>
        <button type="submit" class="btn btn-success mt-3" ><i class="fas fa-paper-plane"></i>  Simpan </button>
        </div>
    
      </form>
      <?php endforeach; ?>
    </p>
  </div>
</div>

</div>
<br><br><br>