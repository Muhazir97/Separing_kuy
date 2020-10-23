<br><br><br><div class="container">
  <div class="alert alert-success">
    
  <h5><p class="text-center align-middle ">
   Konfirmasi sukses,<br>
   Silahkan klik Oke untuk mengupdate jadwal team agar tidak tampil di pencarian lawan lagi
  </p></h5>
    
  </div>
</div>
<?php foreach ($jadwal as $kom ): ?>
<form action="<?php echo base_url(). 'detail_alert/update_jadwal/'. $kom->id_jadwal ?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
        <input type="hidden" name="id_alert" class="form-control" value="<?php echo $kom->id_alert?>">
        <input type="hidden" name="id_jadwal" class="form-control" value="<?php echo $kom->id_jadwal?>">  
        <input type="hidden" name="id_user" class="form-control" value="<?php echo $kom->id_user?>">
        <input type="hidden" name="kategori" class="form-control" value="<?php echo $kom->kategori?>">
        <input type="hidden" name="venue" class="form-control" value="<?php echo $kom->venue?>">
        <input type="hidden" name="tanggal" class="form-control" value="<?php echo $kom->tanggal?>">
        <input type="hidden" name="jam" class="form-control" value="<?php echo $kom->jam?>">
        <input type="hidden" name="area" class="form-control" value="<?php echo $kom->area?>">
        <input type="hidden" name="lawan" class="form-control" value="<?php echo $kom->username?>">

          </div>

        <div align="center">
        <button type="submit" class="btn btn-success mt-3" ><i class="fas fa-paper-plane"></i>&nbsp;  Oke &nbsp;</button>
        </div>
      </form>
      <?php endforeach; ?>
      <br><br><br>
      <br><br><br>
      <br>