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
  <div class="card my-auto" >
  <img src="<?= base_url() . "assets/" ?>images/tiketet.png" alt="" class="mx-auto my-3 d-block d-sm-none" width="230" height="80" >
<h5 class="card-title text-center my-2">Masuk Menggunakan Akun Anda</h5>

  
<form id="loginForm">
    <div id="message" role="alert"></div>
  <ul class="list-group list-group-flush">

    <div class="mb-3 mx-2">
      <label for="exampleInputEmail1" class="form-label mt-2">Email</label>
      <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>

    <div class="mb-3 mx-2">
      <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
      <input type="checkbox" id="togglePassword"> Lihat Kata Sandi</i>
    </div>

    <div class="col">
      <button type="submit" id="login" name="login" class="btn col-4 btn-primary mx-2 mb-2">Masuk</button>
      <i> Belum Punya Akun? <a href="<?= site_url('account/register') ?>" class="">Klik Disini</a></i>
    </div>

  </ul>

</form>
</div>



</div>



    </div>
    </div>
</div>
</main>
<script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#exampleInputPassword1');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
});
</script>