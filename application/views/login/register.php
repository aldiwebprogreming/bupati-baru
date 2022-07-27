<!doctype html>
  <html lang="en">
  <head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url('assets_login/') ?>css/style.css">

  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
              <div class="text-center">
                <img src="<?= base_url('assets/img/logo.png') ?>" class="rounded" alt="..." style="height: 100px;">
              </div>
              <!--   <h3 class="text-center mb-4" style="font-weight: bold;">Register</h3> -->
              <p class="text-center">REGISTER APP <br> <label class="text-success" style="font-weight: bold;">KELUH KESAH MASYRAKAT LANGKAT</label></p>
              <form method="post" action="">
                <div class="form-group">
                  <input type="text" class="form-control rounded-left" placeholder="Nama" name="nama" >
                  <small class="text-danger"><?= form_error('nama') ?></small>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control rounded-left" placeholder="Email" name="email" >
                  <small class="text-danger"><?= form_error('email') ?></small>
                </div>

                <div class="form-group">
                  <input type="number" class="form-control rounded-left" placeholder="Nik" name="nik" >
                  <small class="text-danger"><?= form_error('nik') ?></small>
                </div>


                <div class="form-group">
                  <input type="text" class="form-control rounded-left" placeholder="Alamat" name="alamat" >
                  <small class="text-danger"><?= form_error('alamat') ?></small>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control rounded-left" placeholder="Password" name="pass" >
                  <small class="text-danger"><?= form_error('pass') ?></small>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control rounded-left" placeholder="Ulangi Password" name="pass1" >
                  <small class="text-danger"><?= form_error('pass1') ?></small>
                </div>

                <div class="form-check mb-2">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cek">
                  <small>Data haruslah sesuai dengan data diri anda.</small>
                  <small class="text-danger"><?= form_error('cek') ?></small>
                </div>


                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Register APP</button>
                </div>
                <div class="form-group d-md-flex">
                <!-- <div class="w-50">
                  <label class="checkbox-wrap checkbox-primary">Remember Me
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                </div> -->
               <!--  <div class="w-50 text-md-right">
                  <a href="#">Forgot Password</a>
                </div> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?= base_url('assets_login/') ?>js/jquery.min.js"></script>
  <script src="<?= base_url('assets_login/') ?>js/popper.js"></script>
  <script src="<?= base_url('assets_login/') ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets_login/') ?>js/main.js"></script>
  <script src="<?= base_url()  ?>assets_admin/alert.js"></script>
  <?php echo "<script>".$this->session->flashdata('message')."</script>"?>

</body>
</html>

