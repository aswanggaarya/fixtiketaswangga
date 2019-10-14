<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Entry Data</title>
  <link rel="icon" href="<?=base_url('assets/')?>img/logo.png" type="image/png">

  <!-- Custom fonts for this template-->
  <link href="<?=base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this form-->  
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>css/style.css">

  <!-- Custom styles for this template-->
  <link href="<?=base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom scripts for form-->
  <script src="https://code.jquery.com/jquery-2.1.0.js" integrity="sha256-D6d1KSapXjq2tfZ6Ie9AYozkRHyB3fT2ys9mO2+4Wvc=" crossorigin="anonymous"></script>
  <script src="<?=base_url('assets/')?>js/jquery-3.3.1.js"></script>
  <script src="<?=base_url('assets/')?>js/jquery-3.3.1.min.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('admin/')?>">
              <img src="<?=base_url('assets/')?>img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Agentiket.com
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">
          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Menu
          </div>

          <!-- Nav Item - Charts -->
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url('admin/entri')?>">
              <i class="fas fa-save"></i>
              <span>Entry Data</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/validation')?>">
              <i class="fas fa-check"></i>
              <span>Validation</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/report')?>">
              <i class="fas fa-file-word"></i>
              <span>Report</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/logout');?>" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
            </a>
          </li>
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

        </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php foreach ($petugas as $p) {?>
                   <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $p->namapetugas ?></span>
                <?php }?>
               
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  MyProfile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=base_url('admin/logout');?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <div class="col-xl-12 col-lg-8">

              <!-- Area Chart -->
                <div class="card-body">
                  <div class="chart-area">
                    
                    <h3>List of Officers</h3>
                    <button type="button" class="btn btn-primary" style="margin-bottom: 2%;" data-toggle="modal" data-target="#adddatapetugas">Add Data</button>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Username</th>
                          <th scope="col">Name of Officer</th>
                          <th scope="col">Level</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <?php 
                        $no = 1;
                        foreach($datapetugas as $p){ 
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $p->username ?></td>
                          <td><?php echo $p->namapetugas ?></td>
                          <td><?php echo $p->idlevel ?></td>
                          <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updatedatapetugas">Update</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletedatapetugas">Delete</button>
                          </td>
                        </tr>
                      <?php } ?>
                    </table>

                  </div>
                </div>

                <!-- Modal Add Petugas -->
                <div class="modal fade" id="adddatapetugas" tabindex="-1" role="dialog" aria-labelledby="adddatapetugasLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="adddatapetugasLabel" style="color: black;">Add Data Of Officers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                      <form action="<?php echo base_url(). 'admin/tambahpetugas'; ?>" method="post" id="form-barang">
                        <div class="modal-body">
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Username</b></p>
                            <input type="text" class="form-control" id="username" name="username">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Password</b></p>
                            <input type="password" class="form-control" id="password" name="password">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Name of Officer</b></p>
                            <input type="text" class="form-control" id="namapetugas" name="namapetugas">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Level</b></p>
                            <input type="radio" name="level" id="level" value="1"> Administrator
                            <input type="radio" name="level" id="level" value="2"> Officers
                            <br>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                          <input class="btn btn-success" type="submit" value="Add">
                        </div>
                        </td>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>

                <!-- Modal Hapus Petugas -->
                <div class="modal fade" id="deletedatapetugas" tabindex="-1" role="dialog" aria-labelledby="adddatapetugasLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="adddatapetugasLabel" style="color: black;">Delete Data Of Officers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                        <form action="<?php echo base_url().'admin/hapuspetugas'?>" method="post">
                          <div class="modal-body">
                              <p>Anda yakin mau menghapus <b><?php echo $p->namapetugas;?></b></p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                              <?php echo anchor('admin/hapuspetugas/'.$p->idpetugas,'<button type="button" class="btn btn-danger">Delete</button>'); ?>
                          </div>
                        </form>
                      
                    </div>
                  </div>
                </div>

                <!-- Modal Update Petugas -->
                <div class="modal fade" id="updatedatapetugas" tabindex="-1" role="dialog" aria-labelledby="updatedatapetugasLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="updatedatapetugasLabel" style="color: black;">Update Data Of Officer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                        <?php foreach($petugas as $k){ ?>
                        <form action="<?php echo base_url(). 'admin/updatepetugas'; ?>" method="post">
                          <div class="modal-body">
                            <div class="form-group">
                              <p style="color: black; margin-bottom: -0.3%;"><b>Username</b></p>
                              <input type="hidden" class="form-control" id="idpetugas" name="idpetugas" value="<?php echo $k->idpetugas ?>">
                              <input type="text" class="form-control" id="username" name="username" value="<?php echo $k->username ?>">
                            </div>
                            <div class="form-group">
                              <p style="color: black; margin-bottom: -0.3%;"><b>Name of Officer</b></p>
                              <input type="text" class="form-control" id="namapetugas" name="namapetugas" value="<?php echo $k->namapetugas ?>">
                            </div>
                            <div class="form-group">
                              <p style="color: black; margin-bottom: -0.3%;"><b>Level</b></p>
                              <input type="radio" name="level" id="level" value="1"> Administrator
                              <input type="radio" name="level" id="level" value="2"> Officers
                              <br>
                            </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                              <input class="btn btn-success" type="submit" value="Update">
                          </div>
                        </form>
                        <?php } ?>

                    </div>
                  </div>
                </div>

                <div class="card-body">
                  <div class="chart-area">
                    
                    <h3>list of Train Routes</h3>
                    <button type="button" class="btn btn-primary" style="margin-bottom: 2%;" data-toggle="modal" data-target="#adddatakereta">Add Data</button>
                    <table class="table col-lg-12">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Rute Awal</th>
                          <th scope="col">Rute Akhir</th>
                          <th scope="col">Jam Berangkat</th>
                          <th scope="col">Jam Tiba</th>
                          <th scope="col">Harga</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <?php 
                        $no = 1;
                        foreach($datarutekereta as $k){ 
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $k->ruteawal ?></td>
                          <td><?php echo $k->ruteakhir ?></td>
                          <td><?php echo $k->jamberangkat ?></td>
                          <td><?php echo $k->jamtiba ?></td>
                          <td><?php echo $k->harga ?></td>
                          <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updatedatakereta<?php echo $k->idrutekereta ?>">Update</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletedatakereta">Delete</button>
                          </td>
                        </tr>
                      <?php } ?>
                    </table>

                  </div>
                </div>

                <!-- Modal Tambah Kereta -->
                <div class="modal fade" id="adddatakereta" tabindex="-1" role="dialog" aria-labelledby="adddatakeretaLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="adddatakeretaLabel" style="color: black;">Add Data Of Officers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                      <form action="<?php echo base_url(). 'admin/tambahkereta'; ?>" method="post" id="form-barang">
                        <div class="modal-body">
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Rute Awal</b></p>
                            <input type="text" class="form-control" id="ruteawal" name="ruteawal">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Rute Akhir</b></p>
                            <input type="text" class="form-control" id="ruteakhir" name="ruteakhir">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Jam Berangkat</b></p>
                            <input type="time" class="form-control" id="jamberangkat" name="jamberangkat">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Jam Tiba</b></p>
                            <input type="time" class="form-control" id="jamtiba" name="jamtiba">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Harga</b></p>
                            <input type="number" class="form-control" id="harga" name="harga">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                          <input class="btn btn-success" type="submit" value="Add">
                        </div>
                        </td>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>

                <!-- Modal Hapus Kereta -->
                <div class="modal fade" id="deletedatakereta" tabindex="-1" role="dialog" aria-labelledby="adddatakeretaLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="adddatakeretaLabel" style="color: black;">Delete Data Of Train Routes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                        <form action="<?php echo base_url().'admin/hapuspetugas'?>" method="post">
                          <div class="modal-body">
                              <p>Anda yakin mau menghapus <b><?php echo $k->ruteawal;?></b> menuju <b><?php echo $k->ruteakhir;?></b></p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                              <?php echo anchor('admin/hapuskereta/'.$k->idrutekereta,'<button type="button" class="btn btn-danger">Delete</button>'); ?>
                          </div>
                        </form>
                      
                    </div>
                  </div>
                </div>

                <!-- Modal Update Kereta -->
                <?php foreach($datarutekereta as $k){ ?>
                  <div class="modal fade" id="updatedatakereta<?php echo $k->idrutekereta ?>"  tabindex="-1" role="dialog" aria-labelledby="updatedatakeretaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="updatedatakeretaLabel" style="color: black;">Update Data Of Train Routes</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                          <form action="<?php echo base_url(). 'admin/updatekereta'; ?>" method="post">
                            <div class="modal-body">
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Rute Awal</b></p>
                                <input type="hidden" class="form-control" id="idrutekereta" name="idrutekereta" value="<?php echo $k->idrutekereta ?>">
                                <input type="text" class="form-control" id="ruteawal" name="ruteawal" value="<?php echo $k->ruteawal ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Rute Akhir</b></p>
                                <input type="text" class="form-control" id="ruteakhir" name="ruteakhir" value="<?php echo $k->ruteakhir ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Jam Berangkat</b></p>
                                <input type="time" class="form-control" id="jamberangkat" name="jamberangkat" value="<?php echo $k->jamberangkat ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Jam Tiba</b></p>
                                <input type="time" class="form-control" id="jamtiba" name="jamtiba" value="<?php echo $k->jamtiba ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Harga</b></p>
                                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $k->harga ?>">
                              </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                <input class="btn btn-success" type="submit" value="Update">
                            </div>
                          </form>

                      </div>
                    </div>
                  </div>
                <?php } ?>

                <div class="card-body">
                  <div class="chart-area">
                    
                    <h3>list of Plane Routes</h3>
                    <button type="button" class="btn btn-primary" style="margin-bottom: 2%;" data-toggle="modal" data-target="#adddatapesawat">Add Data</button>
                    <table class="table col-lg-12">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Rute Awal</th>
                          <th scope="col">Rute Akhir</th>
                          <th scope="col">Jam Berangkat</th>
                          <th scope="col">Jam Tiba</th>
                          <th scope="col">Harga</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <?php 
                        $no = 1;
                        foreach($datarutepesawat as $k){ 
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $k->ruteawal ?></td>
                          <td><?php echo $k->ruteakhir ?></td>
                          <td><?php echo $k->jamberangkat ?></td>
                          <td><?php echo $k->jamtiba ?></td>
                          <td><?php echo $k->harga ?></td>
                          <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updatedatapesawat<?php echo $k->idrutepesawat ?>">Update</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletedatapesawat">Delete</button>
                          </td>
                        </tr>
                      <?php } ?>
                    </table>

                  </div>
                </div>

                <!-- Modal Tambah Pesawat -->
                <div class="modal fade" id="adddatapesawat" tabindex="-1" role="dialog" aria-labelledby="adddatapesawatLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="adddatapesawatLabel" style="color: black;">Add Data Of Officers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                      <form action="<?php echo base_url(). 'admin/tambahpesawat'; ?>" method="post" id="form-barang">
                        <div class="modal-body">
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Rute Awal</b></p>
                            <input type="text" class="form-control" id="ruteawal" name="ruteawal">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Rute Akhir</b></p>
                            <input type="text" class="form-control" id="ruteakhir" name="ruteakhir">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Jam Berangkat</b></p>
                            <input type="time" class="form-control" id="jamberangkat" name="jamberangkat">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Jam Tiba</b></p>
                            <input type="time" class="form-control" id="jamtiba" name="jamtiba">
                          </div>
                          <div class="form-group">
                            <p style="color: black; margin-bottom: -0.3%;"><b>Harga</b></p>
                            <input type="number" class="form-control" id="harga" name="harga">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                          <input class="btn btn-success" type="submit" value="Add">
                        </div>
                        </td>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>

                <!-- Modal Hapus Pesawat -->
                <div class="modal fade" id="deletedatapesawat" tabindex="-1" role="dialog" aria-labelledby="adddatapesawatLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="adddatapesawatLabel" style="color: black;">Delete Data Of Plane Routes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                        <form action="<?php echo base_url().'admin/hapuspetugas'?>" method="post">
                          <div class="modal-body">
                              <p>Anda yakin mau menghapus <b><?php echo $k->ruteawal;?></b> menuju <b><?php echo $k->ruteakhir;?></b></p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                              <?php echo anchor('admin/hapuspesawat/'.$k->idrutepesawat,'<button type="button" class="btn btn-danger">Delete</button>'); ?>
                          </div>
                        </form>
                      
                    </div>
                  </div>
                </div>

                <!-- Modal Update Pesawat -->
                <?php foreach($datarutepesawat as $k){ ?>
                  <div class="modal fade" id="updatedatapesawat<?php echo $k->idrutepesawat ?>" tabindex="-1" role="dialog" aria-labelledby="updatedatapesawatLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="updatedatapesawatLabel" style="color: black;">Update Data Of Plane Routes</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                          
                          <form action="<?php echo base_url(). 'admin/updatepesawat'; ?>" method="post">
                            <div class="modal-body">
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Rute Awal</b></p>
                                <input type="hidden" class="form-control" id="idrutepesawat" name="idrutepesawat" value="<?php echo $k->idrutepesawat ?>">
                                <input type="text" class="form-control" id="ruteawal" name="ruteawal" value="<?php echo $k->ruteawal ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Rute Akhir</b></p>
                                <input type="text" class="form-control" id="ruteakhir" name="ruteakhir" value="<?php echo $k->ruteakhir ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Jam Berangkat</b></p>
                                <input type="time" class="form-control" id="jamberangkat" name="jamberangkat" value="<?php echo $k->jamberangkat ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Jam Tiba</b></p>
                                <input type="time" class="form-control" id="jamtiba" name="jamtiba" value="<?php echo $k->jamtiba ?>">
                              </div>
                              <div class="form-group">
                                <p style="color: black; margin-bottom: -0.3%;"><b>Harga</b></p>
                                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $k->harga ?>">
                              </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                <input class="btn btn-success" type="submit" value="Update">
                            </div>
                          </form>

                      </div>
                    </div>
                  </div>
                <?php } ?>

            </div>
          </div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer> -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?=base_url('admin/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('assets/')?>js/sb-admin-2.min.js"></script>

</body>

</html>
