<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agentiket.com - Registration</title>
  <link rel="icon" href="<?=base_url('assets/')?>img/logo.png" type="image/png">
  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <!-- mx auton margin kirikanan sumbu x-->
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="namapenumpang" name="namapenumpang" placeholder="Full Name" value="<?= set_value('namapenumpang'); ?>">
                  <?= form_error('namapenumpang', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Address" value="<?= set_value('alamat'); ?>">
                  <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <p style="color: black; padding-left: 3%;">Date of birth</p>
                  <input type="date" class="form-control form-control-user" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir" value="<?= set_value('tanggallahir'); ?>">
                  <?= form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group" style="padding-left: 3%;">
                  <p style="color: black;">Gender</p>
                  <input type="radio" id="jk" name="jk" value="l"> Laki-laki
                  <input type="radio" id="jk" name="jk" value="p"> Perempuan
                  <br>
                  <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <p style="color: black; padding-left: 3%;">Mobile Number</p>
                  <input type="text" class="form-control form-control-user" id="telp" name="telp" placeholder="e.g.: 082357111317" value="<?= set_value('telp'); ?>">
                  <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth/'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

 