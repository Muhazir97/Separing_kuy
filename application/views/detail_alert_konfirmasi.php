<br><br>	
<div class="container">
<align><center><H3><u>DETAIL ALERT</u></H3></center></align>
<BR>


  <?php foreach ($futsal as $kom ): ?>
<div class="card mb-3">
  <h5 class="card-header">

    <a href="<?php echo base_url('profil_lawan/index/' .$kom->id_pengirim)?>">
      <span class="font-weight-bold"><?php echo $kom->username ?></span>
    </a>
    <br><?php echo $kom->isi_notif ?> <br> Silahkan kunjungi profil 
    <a href="<?php echo base_url('profil_lawan/index/' .$kom->id_pengirim)?>"><?php echo $kom->username ?></a> dan kofirmasi/kontak secara langsung jika sudah sepakat separing</h5>

  <div class="card-body">
    <h5 class="card-title"> <div class="table-responsive">
        <table class="table table-hover">
  <thead class="thead-dark" align="center">
    <tr>
      <th scope="col">Kategori </th>
      <th scope="col">Venue </th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">Area</th>
      <th scope="col">Lawan</th>
    </tr>
  </thead> 
  <tbody align="center">
    <tr>
      <th><?php echo $kom->kategori ?></th>
      <td><?php echo $kom->venue ?></td>
      <td><?php echo date('d F Y', strtotime($kom->tanggal));  ?></td>
      <td><?php echo $kom->jam ?></td>
      <td><?php echo $kom->area ?></td>
      <td><?php echo $kom->lawan ?></td>  
    </tr>
  </tbody>
</table></h5>

<form action="<?php echo base_url(). 'detail_alert/input_jadwal/'. $kom->id_alert ?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
          
        <input type="hidden" name="id_user" class="form-control" value="<?php echo $kom->id_user?>">
        <input type="hidden" name="kategori" class="form-control" value="<?php echo $kom->kategori?>">
        <input type="hidden" name="venue" class="form-control" value="<?php echo $kom->venue?>">
        <input type="hidden" name="tanggal" class="form-control" value="<?php echo $kom->tanggal?>">
        <input type="hidden" name="jam" class="form-control" value="<?php echo $kom->jam?>">
        <input type="hidden" name="area" class="form-control" value="<?php echo $kom->area?>">
        <input type="hidden" name="lawan" class="form-control" value="<?php echo $kom->lawan?>">

          </div>

        <div align="center">
        <button type="submit" class="btn btn-success mt-3" ><i class="fas fa-paper-plane"></i>  Oke</button>
        </div>
      </form>
      <br>
     <div align="center">
      <a onclick="return confirm('Yakin anda akan menghapus data ini ?')"> <?php echo anchor('detail_alert/hapus_alert/' .$kom->id_alert, '<div href="" class="btn btn-danger " > <i class="fas fa-trash-alt"></i> Hapus Alert Ini</div>' )  ?></a>
     </div>

  </div>
</div>
<?php endforeach; ?> 
</div>
<br><br><br>	