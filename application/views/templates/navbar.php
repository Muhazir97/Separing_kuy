 <nav class="navbar navbar-expand-lg navbar-light fixed-top  " style="background-color: #32CD32; color:#FFFFFF;">
<div class="container">

  <a class="navbar-brand" href="<?php echo base_url('home/index') ?>" style="color:#FFFFFF;">
  <img src=" <?php echo base_url('assets/img/skuyy.png') ?>" width="170" height="40">
   </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('home/index') ?>" style="color:#FFFFFF; font-size: 18px;"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown active" >
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#FFFFFF; font-size: 18px;">
          <i class="fas fa-search"></i> Cari Lawan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url('kategori_lawan/futsal') ?>">Futsal</a>
          <a class="dropdown-item" href="<?php echo base_url('kategori_lawan/football') ?>">Football</a>
        </div>
      </li>

     <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('home/index') ?>" style="color:#FFFFFF; font-size: 18px;"><i class="far fa-calendar-alt"></i> Info Turnamen <span class="sr-only">(current)</span></a>
      </li>

      <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1 "  >
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->

                <span class="badge badge-danger badge-counter"><?php echo $jumlah_alert; ?></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown" ">
                <h6 class="dropdown-header ">
                  Alerts Center
                </h6>
                 <?php foreach ($alert as $kom ): ?>
                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('detail_alert/index/' .$kom->id_alert)?>">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo date('d F Y H:i:s', strtotime($kom->tgl));  ?>
                    </div>
                    <span class="font-weight-bold"><?php echo $kom->username ?></span><br>
                    <?php echo $kom->isi_notif ?>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <?php endforeach; ?>
               
              </div>
            </li>
    </ul>
  </div>
<ul>
  <!-- Nav Item - User Information -->
  <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php foreach ($user as $kom ): ?>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="color:#FFFFFF; font-size: 15px;"><?php echo $kom->username ?></span>
                <img class="img-profile rounded-circle mb-0" src="<?php echo base_url(). '/upload/'.$kom->foto ?>" width="50" height="50">
                <?php endforeach; ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url('profil/index') ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="<?php echo base_url('auth/logout')?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
</ul>
          </ul>

  </div>
</nav>
<br><br><br><br>