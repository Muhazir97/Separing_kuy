<br>

<div class="container">

<div class="card">
  <div class="card-header">
    <h3 align="center"><u>EDIT HISTORY</u></h3>
  </div>
  <div class="card-body">
    <p class="card-text">
      <form action="<?php echo base_url(). 'profil/update_history'?>" method="post" enctype="multipart/form-data" >
  
    <?php foreach ($history as $main) : ?>

          <div class="form-group">
            <label>Team</label>
            <input type="hidden" name="id_history" class="form-control" value="<?php echo $main->id_history?>">
            <input type="hidden" name="id_user" class="form-control" value="<?php echo $this->session->userdata('id_user') ?>" required>
            <input type="text" name="team" class="form-control" placeholder="Team" value="<?php echo $main->team?>" readonly required> 
          </div>

          <div class="form-group">
            <label>Skor Akhir</label>
            <input type="text" name="skor_akhir" class="form-control" placeholder="Skor Akhir" value="<?php echo $main->skor_akhir?>" required>  
          </div>

          <div class="form-group">
            <label>Team Lawan</label>
            <input type="text" name="team_lawan" class="form-control" placeholder="Team Lawan" value="<?php echo $main->team_lawan?>" required>  
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