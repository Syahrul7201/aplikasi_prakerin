<main>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="#">Admin</a> / </li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
  </ol>
</nav>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3 my-1">
      <div class="card bg-primary text-light fw-bold">
      <div class="card-header text-center">
    <i class="fas fa-user-plus me-2"></i>Pengguna baru
  </div>
  <div class="card-body bg-info">
    <h3 class="card-title my-2"><?=$b_user?></h3>
    <p class="card-text my-2">Total <?=$a_user?> Pengguna</p>
  </div>
  <div class="card-footer text-center">
  <a href="<?=site_url('admin/costumer')?>" class="btn btn-success col-10 fw-bold border-dark shadow-3">Selengkapnya</a>
  </div>
      </div>
</div>

<div class="col-sm-12 col-md-6 col-lg-3 my-1">
      <div class="card bg-primary text-light fw-bold">
      <div class="card-header text-center">
      <i class="fas fa-cart-plus me-2"></i>Pesanan Baru
  </div>
  <div class="card-body bg-info">
    <h3 class="card-title my-2"><?=$b_order?></h3>
    <p class="card-text my-2">Total <?=$a_order?> Pesanan</p>
  </div>
  <div class="card-footer text-center">
  <a href="<?=site_url('admin/order')?>" class="btn btn-success col-10 fw-bold border-dark shadow-3">Selengkapnya</a>
  </div>
      </div>
</div>

        <div class="col my-1">
        <div class="card bg-primary text-light fw-bold">
      <div class="card-header text-center">
      <i class="fas fa-dollar-sign me-2"></i>Penghasilan Hari Ini
  </div>
  <div class="card-body bg-info">
    <h3 class="card-title my-2"><?=rupiah($b_in)?></h3>
    <p class="card-text my-2">Total Penghasilan <?=rupiah($a_in)?></p>
  </div>
  <div class="card-footer text-center">
  <a href="<?=site_url('admin/order')?>" class="btn btn-success col-10 fw-bold border-dark shadow-3">Selengkapnya</a>
  </div>
      </div>
</div>
</div>

<div class="row">
      <div class="col-md-8 col-sm-12 my-1">
      <div class="card text-center">
  <div class="card-header bg-primary fw-bold text-light">
    Statistik  Penghasilan Tahun Ini
  </div>
  <div class="card-body">
  <canvas id="myChart"></canvas>
  </div>
      </div>
</div>

      <div class="col-md-4 col-sm-12 my-1">
      <div class="card text-center">
  <div class="card-header bg-primary fw-bold text-light">
    Statistik Penjualan Tiket
  </div>
  <div class="card-body">
  <canvas id="myChartt"></canvas>
  </div>
      </div>
</div>
</div> 
                </main>  