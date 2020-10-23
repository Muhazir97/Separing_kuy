<br><br>	
<div class="container">
<align><center><H3><u>LAWAN FOOTBALL</u></H3></center></align>
<BR>

<div align="right">
 <form action="<?php echo site_url('kategori_lawan/search_football');?>" method = "post" class=" d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light shadow" aria-label="Search" aria-describedby="basic-addon2" name="cari" placeholder="Cari Area, Venue" >
              <div class="input-group-append">
                <button class="btn btn-primary shadow" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

</div>
            <br>

  <?php foreach ($football as $kom ): ?>
<div class="card mb-3 shadow">
  <h5 class="card-header"><a href="<?php echo base_url('profil_lawan/index/' .$kom->id_user)?>"><?php echo $kom->username ?></a></h5>
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
          
             
<form action="<?php echo base_url(). 'detail_alert/input_alert'?>" method="post" enctype="multipart/form-data" >

          <div class="form-group"> 

        <input type="hidden" name="id_user" class="form-control" value="<?php echo $kom->id_user?>">
        <input type="hidden" name="id_jadwal" class="form-control" value="<?php echo $kom->id_jadwal?>">
        <input type="hidden" name="id_pengirim" class="form-control" value="<?php echo $this->session->userdata('id_user') ?>"> 
        <input type="hidden" name="username" class="form-control" value="<?php echo $this->session->userdata('username') ?>">
        <input type="hidden" name="isi_notif" class="form-control" value=" MENGAJUKAN separing pada jadwal yang ini..."> 
          
        <input type="hidden" name="kategori" class="form-control" value="<?php echo $kom->kategori?>">
        <input type="hidden" name="venue" class="form-control" value="<?php echo $kom->venue?>">
        <input type="hidden" name="tanggal" class="form-control" value="<?php echo $kom->tanggal?>">
        <input type="hidden" name="jam" class="form-control" value="<?php echo $kom->jam?>">
        <input type="hidden" name="area" class="form-control" value="<?php echo $kom->area?>">
        <input type="hidden" name="lawan" class="form-control" value="<?php echo $kom->lawan?>">

          </div>

        <div align="center">
        <button type="submit" class="btn btn-success mt-3" ><i class="fas fa-paper-plane"></i>  Kuy Lah </button>
        </div>
      </form>

  </div>
</div>
<?php endforeach; ?>
<div class="row">
  <div class="col">
    <?php echo $pagination ?>    
  </div> 
</div>
</div>
<br><br><br>	