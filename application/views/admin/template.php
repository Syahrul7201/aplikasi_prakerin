<!DOCTYPE html>
<html>

<head>
  <title><?= $title ?></title>


  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Bootstrap CSS v5.0.2 -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="<?= base_url() . "assets/" ?>css/style.css">



<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">


    </head>

<body>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i><?=$title?></div>
        <!-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->
        <div class="btn-group mx-1">
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  Akun Saya
  </button>
  <ul class="dropdown-menu">

    <li><a class="dropdown-item" href="<?= base_url('admin/logout') ?>">Logout</a></li>

  </ul>
</div>
    </header>
    <div class="l-navbar bg-primary" id="nav-bar">
        <nav class="nav">
            <div> <img href="#" class=" mb-3 ms-3" src="<?= base_url() . "assets/" ?>images/tiketet.png" style="width:140px; height:43px">
                <div class="nav_list"> 
                  <a href="<?=site_url('admin/dashboard')?>" class="nav_link "> <i class='fas fa-database nav_iccon' data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard"></i> <span class="nav_name" >Dashboard</span> </a> 
                  <a class=" dropdown-toggle nav_link" href="#"   id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="right" title="Transportasi"><span class="nav_name" ><i class="fas fa-bus me-3 nav_iccon"></i><span class="nav_name">Transportasi</span></a>
                  <ul class="dropdown-menu bg-primary" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item nav_nname text-dark" href="<?=site_url('admin/transportation')?>">Daftar Transportasi</a></li>
    <li><a class="dropdown-item nav_nname text-dark" href="<?=site_url('admin/transportation_class')?>">Kelas Transportasi</a></li>
    <li><a class="dropdown-item nav_nname text-dark" href="<?=site_url('admin/transportation_company')?>">Perusahaan Transportasi</a></li>
  </ul>
                  <a href="<?= site_url('admin/place') ?>" class="nav_link"> <i class='fas fa-map-marked-alt nav_iccon' data-bs-toggle="tooltip" data-bs-placement="right" title="Bandara/Stasiun"></i> <span class="nav_name">Bandara / Stasiun</span> </a> 
                  <a href="<?= site_url('admin/rute') ?>" class="nav_link"> <i class='fas fa-route nav_iccon' data-bs-toggle="tooltip" data-bs-placement="right" title="Rute Perjalanan"></i> <span class="nav_name">Rute Perjalanan</span> </a> 
                  <a href="<?= site_url('admin/promo_code') ?>" class="nav_link"> <i class='fas fa-ticket-alt nav_iccon' data-bs-toggle="tooltip" data-bs-placement="right" title="Kode Promo"></i> <span class="nav_name">Kode Promo</span> </a> 
                  <a href="<?= site_url('admin/costumer') ?>" class="nav_link"> <i class='fas fa-user nav_iccon' data-bs-toggle="tooltip" data-bs-placement="right" title="Pengguna"></i> <span class="nav_name">Pengguna</span> </a> 
                  <a class=" dropdown-toggle nav_link" href="#"   id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="right" title="Pesanan"><span class="nav_name" ><i class="fas fa-shopping-cart me-3 nav_iccon"></i><span class="nav_name">Pesanan</span></a>
                </a>

  <ul class="dropdown-menu bg-primary" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item nav_nnmae text-dark" href="<?= site_url('admin/order') ?>">Daftar Pesanan</a></li>
    <li><a class="dropdown-item nav_nnmae text-dark" href="<?= site_url('admin/order_cancel') ?>">Permintaan</a></li>
    
  </ul>
</div>
                </div>
        </nav>
    </div>
    <!--Container Main start-->
    <div class=" bg-light" style="height:100%">
  <?php $this->load->view($content) ?>


  <div class="row">
  <div class="col">
<div class="card bg-primary my-1 mt-3">
    <div class="text-center fw-bold text-light py-2 ">©2021 Copyright: TIKETET
  </div>
</div>


<div>

</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/a7293e9119.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="<?= base_url() . "assets/" ?>js/jquery.js"></script>
  <script src="<?= base_url() . "assets/" ?>js/materialize.min.js"></script>
  <script src="<?= base_url() . "assets/" ?>js/chart.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>



  
  <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        cutoutPercentage: 0,
        <?php
        $cek = $this->m_general->gDataA('order')->result();
        $bulan = array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
        ?>
        labels: [<?php foreach ($bulan as $b) {
                    $total = 0;
                    foreach ($cek as $c) {
                      if (date("M", strtotime($c->order_date)) == $b) {
                        $total = $total + $c->final_price;
                      }
                    }
                    echo '"' . $b . '",';
                  } ?>],
        datasets: [{
          label: "Pendapatan",
          borderColor: '#2196f3',
          backgroundColor: '#82b1ff',
          data: [<?php foreach ($bulan as $b) {
                    $total = 0;
                    foreach ($cek as $c) {
                      if (date("M", strtotime($c->order_date)) == $b) {
                        $total = $total + $c->final_price;
                      }
                    }
                    echo '' . $total . ',';
                  } ?>],
        }]
      },
      options: {}
    });
    var ctx = document.getElementById('myChartt').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Pesawat", "Kereta Api"],
        datasets: [{
          label: "My First dataset",
          backgroundColor: ['#283593', '#64b5f6'],
          <?php
          $get_p = $this->m_general->gReservationW(array('id_transportation_type' => 1))->num_rows();
          $get_k = $this->m_general->gReservationW(array('id_transportation_type' => 2))->num_rows();
          ?>
          data: [<?= $get_p ?>, <?= $get_k ?>],
        }]
      },
      options: {}
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.datatables').DataTable({
        "order": [
          [0, "asc"]
        ]
      });

      $('select').material_select();

      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false, // Close upon selecting a date,
        format: 'yyyy-mm-dd'
      });
      $('.datepicker').on('mousedown', function(event) {
        event.preventDefault();
      })
    });
  </script>

  <script type="text/javascript">
    $('.timepicker').pickatime({
      default: 'now',
      twelvehour: false, // change to 12 hour AM/PM clock from 24 hour
      donetext: 'OK',
      autoclose: false,
      vibrate: true // vibrate the device when dragging clock hand
    });
    // Materialize.toast('Selamat datang, Administrator!', 4000);
    
    $('.timepicker').on('mousedown', function(event) {
      event.preventDefault();
    })
  </script>
  <script type="text/javascript">
    function pTrans() {
      var id_type = $('#id_transportation_type').val();
      $.post('<?= base_url('admin/transportation/gClass') ?>', {
        id_type: id_type
      }, function(data) {
        $('#id_transportation_class').html(data);
        $('#id_transportation_class').material_select();
      });
      $.post('<?= base_url('admin/transportation/gCompany') ?>', {
        id_type: id_type
      }, function(data) {
        $('#id_transportation_company').html(data);
        $('#id_transportation_company').material_select();
      });
    };

    function pRute() {
      var id_type = $('#id_transportation_type').val();
      $.post('<?= base_url('admin/rute/gPlace') ?>', {
        id_type: id_type
      }, function(data) {
        $('#id_place_from').html(data);
        $('#id_place_from').material_select();
        $('#id_place_to').html(data);
        $('#id_place_to').material_select();
      });
      $.post('<?= base_url('admin/rute/gTrans') ?>', {
        id_type: id_type
      }, function(data) {
        $('#id_transportation').html(data);
        $('#id_transportation').material_select();
      });
    };
  </script>
  <script>
document.addEventListener("DOMContentLoaded", function(event) {

const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

// Your code to run since DOM is loaded and ready
});

  </script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>

</html>