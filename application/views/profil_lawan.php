<br>
<div class="container-fluid">
  <align><center><H3><u>PROFIL LAWAN</u></H3></center></align>
  <br>
  <div class="row">

    <!--Data Team-->
    <br>
    <br><br><br><br> <br>
    <br><br><br><br>
     <div class="col-md-3 col-xs-12">
<?php foreach ($user as $kom ): ?>
<div class="card p-2 shadow" align="center">
  <a href="<?php echo base_url(). '/upload/'.$kom->foto ?>" >  
  <img src="<?php echo base_url(). '/upload/'.$kom->foto ?>" class="rounded-circle" class="card-img-top" alt="..."  class="p-3" width="250" height="250"></a>
  <div class="card-body">
    <h3 class="card-title"><?php echo $kom->username ?></h3>
    <p class="card-text"><?php echo $kom->bio ?></p>
  </div>
  <ul class="list-group list-group-flush ">
    <li class="list-group-item"><h5><u>* Contact Team *</u></h5></li>
    <li class="list-group-item"><i class="fab fa-whatsapp"></i> <?php echo $kom->no_tlp ?></li>
    <li class="list-group-item"><i class="far fa-envelope"></i> <?php echo $kom->email_team ?></li>
    <li class="list-group-item"><i class="fas fa-map-marker-alt"></i><a href="<?php echo $kom->home_base ?>">Lokasi Home Base</a> </li>
  </ul>
</div>
</div>
<?php endforeach; ?>

<!--End Data Team-->

<!--Data Pemain-->
 <div class="col-md-8 col-xs-8">
<div class="card shadow">
  <div class="card-header">
    <h5 class="card-title text-center"><u>Data Pemain</u></h5>
  </div>
  <div class="card-body">
       
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
        <table class="table table-hover" align="center">
  <thead class="thead-dark" align="center">
    <tr>
      <th scope="col">Foto Pemain</th>
      <th scope="col">No Punggung</th>
      <th scope="col">Nama</th>
      <th scope="col">Usia</th>
    </tr>
  </thead>

  <?php foreach ($pemain as $kom ): ?>

  <tbody align="center">
    <tr>
      <td style="width: 10%;"><a href="<?php echo base_url(). '/upload/'.$kom->foto ?>" >  <img src="<?php echo base_url(). '/upload/'.$kom->foto ?>"class="card-img-top" alt="..."></a>
      </td>
      <td><?php echo $kom->no_punggung ?></td>
      <th><?php echo $kom->nama ?></th>
      <td><?php echo $kom->usia ?></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
   </div>    
      </div>   
    </div>
    <br>
    <br>
    
 </div> 
</div>
 
<!-- End Data Pemain-->
<br>

<!--Jadwal Team-->
<div class="card shadow">
  <div class="card-header">
    <h5 class="card-title text-center"><u>Jadwal Team</u></h5>
  </div>
  <div class="card-body">
       
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
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
  <?php foreach ($jadwal as $kom ): ?>
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
  <?php endforeach; ?>
</table>
   </div>    
      </div>   
    </div>
    <br>
    <br>
    
 </div> 
</div>
<!-- End Jadwal Team-->
<br>

<!--History Team-->
<div class="card shadow">
  <div class="card-header">
    <h5 class="card-title text-center"><u>History Pertandingan</u></h5>
  </div>
  <div class="card-body">
       
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
        <table class="table table-hover">
  <thead class="thead-dark" align="center">
    <tr>
      <th scope="col">Team </th>
      <th scope="col">Skor Akhir</th>
      <th scope="col">Team Lawan</th>
    </tr>
  </thead>

   <?php foreach ($history as $kom ): ?>

  <tbody align="center">
    <tr>
      <th><?php echo $kom->team ?></th>
      <td><?php echo $kom->skor_akhir ?></td>
      <td><?php echo $kom->team_lawan ?></td>
    </tr>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
  </div>     
      </div>   
    </div>
    <br>
    <br>
    
 </div> 
</div>
<!-- End History Team-->

</div>
</div>
</div>

</div>
</div>
<br>

