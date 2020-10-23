<br>
<div class="container-fluid">
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
  <div class="card-body">
    <?php echo anchor('profil/edit_profil/' .$this->session->userdata('id_user'), '<div href="" class="btn btn-primary" ><i class="fas fa-edit"></i> Edit Profil</div>') ?>
  </div>
</div>
</div>
<?php endforeach; ?>

<!--End Data Team-->

<!--Data Pemain-->
 <div class="col-md-8 col-xs-8" >
<div class="card shadow" style="overflow: scroll; overflow-x: hidden;height: 573px;">
  <div class="card-header">
    <h5 class="card-title text-center"><u>Data Pemain</u></h5>
  </div>
  <div class="card-body">
       <button class="btn  btn-success mb-3 " data-toggle="modal" data-target="#tambah_pemain"><i class="far fa-address-card"></i> Tambah Pemain </button>
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
      <th scope="col" colspan="2">Aksi</th>
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
      <td><?php echo anchor('profil/edit/' .$kom->id_pemain, '<div href="" class="btn btn-primary" ><i class="fas fa-edit"></i> Edit</div>') ?>&nbsp;
        
       <a onclick="return confirm('Yakin anda akan menghapus data ini ?')"> <?php echo anchor('profil/hapus/' .$kom->id_pemain, '<div href="" class="btn btn-danger " > <i class="fas fa-trash-alt"></i> Hapus</div>' )  ?></a>
      </td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>

<div class="row">
  <div class="col">
    <?php echo $pagination ?>    
  </div> 
</div>

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
       <button class="btn  btn-success mb-3 " data-toggle="modal" data-target="#buat_jadwal"><i class="far fa-calendar-alt"></i> Buat Jadwal </button>
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
      <th scope="col">Aksi</th>
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
      <td>
        
       <a onclick="return confirm('Yakin anda akan menghapus data ini ?')"> <?php echo anchor('profil/hapus_jadwal/' .$kom->id_jadwal, '<div href="" class="btn btn-danger " > <i class="fas fa-trash-alt"></i> Hapus</div>' )  ?></a>
      </td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>

<div class="row">
  <div class="col">
    <?php echo $pagination_jadwal ?>    
  </div> 
</div>

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
       <button class="btn  btn-success mb-3 " data-toggle="modal" data-target="#tambah_history"><i class="fas fa-history"></i> Tambah History </button>
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
        <table class="table table-hover">
  <thead class="thead-dark" align="center">
    <tr>
      <th scope="col">Team </th>
      <th scope="col">Skor Akhir</th>
      <th scope="col">Team Lawan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

   <?php foreach ($history as $kom ): ?>

  <tbody align="center">
    <tr>
      <th><?php echo $kom->team ?></th>
      <td><?php echo $kom->skor_akhir ?></td>
      <td><?php echo $kom->team_lawan ?></td>
     <td><?php echo anchor('profil/edit_history/' .$kom->id_history, '<div href="" class="btn btn-primary" ><i class="fas fa-edit"></i> Edit</div>') ?>&nbsp;
        
       <a onclick="return confirm('Yakin anda akan menghapus data ini ?')"> <?php echo anchor('profil/hapus_history/' .$kom->id_history, '<div href="" class="btn btn-danger " > <i class="fas fa-trash-alt"></i> Hapus</div>' )  ?></a>
      </td>
    </tr>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
<div class="row">
  <div class="col">
    <?php echo $pagination_history ?>    
  </div> 
</div>
  </div>     
      </div>   
    </div>
    <br>
    <br>
    
 </div> 
</div>
<!-- End History Team-->


        <!-- Modal history -->
<div class="modal" id="tambah_history" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah History Pertandingan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php foreach ($user as $kom ): ?>
        <form action="<?php echo base_url(). 'profil/tambah_history'?>" method="post" enctype="multipart/form-data" >

        <div class="form-group">
            <label>Team</label>
            <input type="hidden" name="id_user" class="form-control" value="<?php echo $this->session->userdata('id_user') ?>" required>
            <input type="text" name="team" class="form-control" value="<?php echo $kom->username ?>" placeholder="Team" readonly required> 
          </div>

          <div class="form-group">
            <label>Skor Akhir</label>
            <input type="text" name="skor_akhir" class="form-control" placeholder="Skor Akhir" required></div>

          <div class="form-group">
            <label>Team Lawan</label>
            <input type="text" name="team_lawan" class="form-control" placeholder="Team Lawan" required></div>
        <br>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i> Close</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Tambah History</button>
      </div>
      </form>
    <?php endforeach ; ?>

     </div>
    </div>
  </div>
</div>

 <!-- Modal jadwan team -->
<div class="modal" id="buat_jadwal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Buat Jadwal Pertandingan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php foreach ($user as $kom ): ?>
        <form action="<?php echo base_url(). 'profil/buat_jadwal'?>" method="post" enctype="multipart/form-data" >

        <div class="form-group">
            <label>Kategori</label>
            <input type="hidden" name="id_user" class="form-control" value="<?php echo $this->session->userdata('id_user') ?>" required>
            <input type="hidden" name="username" class="form-control" value="<?php echo $kom->username ?>" placeholder="username" readonly required> 
            <select name="kategori" class="form-control" required>
                  <option value="">--- Pilih Kategori ---</option>
                  <option value="FUTSAL">FUTSAL</option>
                  <option value="FOOTBALL">FOOTBALL</option>
                </select> 
          </div>

          <div class="form-group">
            <label>venue</label>
            <input type="text" name="venue" class="form-control" placeholder="venue" required>
          </div>

          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" required>
          </div>

          <div class="form-group">
            <label>Jam</label>
            <input type="time" name="jam" class="form-control" placeholder="Jam" required>
          </div>

          <div class="form-group">
            <label>Area</label>
            <input type="text" name="area" class="form-control" placeholder="Area" required>
          </div>

          <div class="form-group">
            <label>Lawan</label>
            <input type="text" name="lawan" class="form-control" placeholder="Lawan">
          </div>
        <br>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i> Close</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Tambah History</button>
      </div>
      </form>
 <?php endforeach ; ?>
     </div>
    </div>
  </div>
</div>

<!-- Modal  tambah pemain-->
<div class="modal fade" id="tambah_pemain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Form Tambah Pemain</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'profil/tambah_pemain'?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
            <label>No Punggung</label>
            <input type="hidden" name="id_user" class="form-control" value="<?php echo $this->session->userdata('id_user') ?>" required>
            <input type="number" name="no_punggung" class="form-control" placeholder="No Punggung" required> 
          </div>

          <div class="form-group">
            <label>Nama Pemain</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Pemain" required>  
          </div>

          <div class="form-group">
            <label>Usia Pemain</label>
            <input type="number" name="usia" class="form-control" placeholder="Usia Pemain" required>  
          </div>

          <div class="form-group">
            <label>Foto Pemain</label>
            <input type="file" name="foto" class="form-control" required >
          </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i> Close</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Tambah Pemain</button>
      </div>
      </form>
    </div>
    <!-- End Modal  tambah-->

</div>
</div>
</div>

</div>
</div>
<br>

