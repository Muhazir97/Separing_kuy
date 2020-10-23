<br>

<div class="container">

<div class="card">
  <div class="card-header">
    <h3 align="center"><u>EDIT PROFIL</u></h3>
  </div>
  <div class="card-body">
    <p class="card-text">
      <form action="<?php echo base_url(). 'profil/update_user'?>" method="post" enctype="multipart/form-data" >
  
    <?php foreach ($user as $main) : ?>

          <div class="form-group" align="center">
            <label>Foto Profil</label><br>
            <img src="<?php echo base_url(). '/upload/'.$main->foto ?>" class="rounded-circle" class="card-img-top" alt="..."  class="p-3" width="200" height="200"><br><br>
             <input type="hidden" name="old_image" class="form-control" value="<?php echo $main->foto?>" required>       
            <input type="file" name="foto" class="form-control" >
          </div>

          <div class="form-group">
            <label>Username</label>
            <input type="hidden" name="id_user" class="form-control" value="<?php echo $main->id_user?>">
            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $main->username?>" required> 
          </div>

          <div class="form-group">
            <label>Bio</label>
            <input type="text" name="bio" class="form-control" placeholder="Bio" value="<?php echo $main->bio?>" required>  
          </div>

          <div class="form-group">
            <label>No Telephone</label>
            <input type="number" name="no_tlp" class="form-control" placeholder="No Telephone" value="<?php echo $main->no_tlp?>" required>  
          </div>

          <div class="form-group">
            <label>Email Team</label>
            <input type="email" name="email_team" class="form-control" placeholder="Email" value="<?php echo $main->email_team?>" required>  
          </div>

          <div class="form-group">
            <label>Alamat Home Base</label>
            <input type="text" name="home_base" class="form-control" placeholder="Masukan link alamat Google Map" value="<?php echo $main->home_base?>"><br> 
            <input type="text" name="home_base" class="form-control" placeholder="Masukan Nama Alamat" value="<?php echo $main->home_base?>" required>  
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