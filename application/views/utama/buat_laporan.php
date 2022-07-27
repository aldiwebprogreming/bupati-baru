
<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/slide12.jpg') ?>" class="d-block w-100" alt="..." style="border-radius: 10px;">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/slide2.jpg') ?>" class="d-block w-100" alt="..." style="border-radius: 10px;">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/slide.jpg') ?>" class="d-block w-100" alt="..." style="border-radius: 10px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div> -->


<div class="card mt-3">
  <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
   <label style="font-weight: bold; color: #8ab53f;">Buat Laporan Aduan Anda  </label><br>
   <label>Hello, Selamat datang di Aplikasi Rumah Keluh Kesah Masyarakat Langkat. Laporkan keluh kesah anda dengan cepat dan tepat.</label>
 </div>
</div>




<div class="card mt-2">
  <div class="card-body" style="font-family: 'Montserrat', sans-serif;">

    <form method="post" action="" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama anda">
          <small class="text-danger"><?php echo form_error('nama'); ?></small>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="Email anda">
          <small class="text-danger"><?php echo form_error('email'); ?></small>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">No Hp/WA</label>
        <div class="col-sm-10">
          <input type="number" name="nohp" class="form-control"  placeholder="Nomor telp">
          <small class="text-danger"><?php echo form_error('nohp'); ?></small>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="alamat"  placeholder="Alamat pengaduan">
          <small class="text-danger"><?php echo form_error('alamat'); ?></small>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Judul Aduan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="judul_aduan"  placeholder="Judul aduan">
          <small class="text-danger"><?php echo form_error('judul_aduan'); ?></small>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Aduan</label>
        <div class="col-sm-10">
         <textarea class="form-control" name="aduan" placeholder="Aduan anda"></textarea>
         <small class="text-danger"><?php echo form_error('aduan'); ?></small>
       </div>
     </div>

     <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
      <div class="col-sm-10">
        <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">

      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <button class="btn btn-success btn-block">Kirim Aduan <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
      </div>
    </div>




  </form>

</div>
</div>
</div>





