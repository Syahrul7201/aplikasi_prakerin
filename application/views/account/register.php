<main>
<div class="card col-lg-10 col-md-10 col-sm-12 mt-4 mx-auto">
    <div class="card-body">
<div class="row">
<div class="col col-md d-none d-sm-block col-sm col-lg">
    <div class="card bg-primary" style="height:100%">
    <img src="<?= base_url() . "assets/" ?>images/tiketet.png" alt="" class="mx-auto my-3" width="230" height="80" >
<div class="ms-2">
    <h4 class="fw-bold text-light">Tentang Tiketet</h4>
    <p> <h6 class="text-light">Tiketet Adalah Website Pemesanan Tiket Pesawat Dan Kereta Api Secara Online Yang Didirikan Semenjak XX-XX-2021 Dengan Pemesanan Tanpa Batasan Ruang Dan Waktu.</h6> </p>
    <div class="vr"></div>    
</div>
</div>
</div>

<div class="vr d-none d-sm-block" style="width:1px"></div>
<div class="col-md col-sm col-lg">
<div class="card my-auto border-dark" >
<img src="<?= base_url() . "assets/" ?>images/tiketet.png" alt="" class="mx-auto my-3 d-block d-sm-none" width="230" height="80" >
<h5 class="card-title text-center">Daftar Akun Baru</h5>

  <ul class="list-group list-group-flush mx-2 my-2">
  <form id="registerForm">
       
                  <div id="message"></div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
    <input name="full_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    <input type="checkbox" id="togglePassword"> Lihat Kata Sandi</i>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> Ulangi Kata Sandi</label>
    <input name="confirm_password" type="password" class="form-control" id="exampleInputPassword1">
    <input type="checkbox" id="togglePassword"> Lihat Kata Sandi</i>
  </div>
  <p>Dengan Mengklik Daftar Berarti and mensetujui <a href="#"> Syarat </a>Dan <a href="#"> Ketentuan </a>Yang Berlaku.</p>


  <div class="col">
  <button type="submit" id="register" name="register" class="btn btn-primary">Daftar</button>
  <i> Sudah Punya Akun? <a href="<?= site_url('account/login') ?>" class="">Klik Disini</a></i>
</div>
</form>
    
  </ul>
</div>





</div>



    </div>
    </div>
</div>
</main>
