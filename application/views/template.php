<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() . "assets/" ?>css/stl.css">

  


    <title>Tiketet</title>
  </head>
  <body class="bg-primary">
    <div class="container-fluid">
      <nav class="navbar navbar-light bg-light d-flex rounded p-4 mb-4"></nav>
      <nav class="navbar border border-dark navbar-light bg-info fixed-top" style="z-index:3;">
      <img src="<?= base_url() . "assets/" ?>images/tiketet.png" alt="" href="<?= site_url() ?>" class="mx-2" width="115" height="40" >
      <ul class="nav justify-content-end ">
        <?php if ($this->session->userdata('auth_user')) {
          $info = $this->m_general->gDataW('costumer', array('id_costumer' => $this->session->userdata('auth_user')))->row();
          ?>
          <a class='light dropdown-button btn blue' href='#' data-activates='dropdown1'>

            
          </a>
          <li class="nav-item ">
                  <a class="xcxc btn btn-primary  mx-1 shadow text-light" href="<?= site_url() ?>">Beranda</a>
                </li>
          <div class="dropdown me-2">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <?= $info->full_name ?>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="<?= site_url('user/profile') ?>">Ubah Profile</a></li>
    <li><a class="dropdown-item" href="<?= site_url('user/order') ?>">Pesanan</a></li>
    <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Keluar</a></li>
  </ul>
</div>

              <?php } else {
                ?>
                <li class="nav-item ">
                  <a class="xcxc btn btn-primary  mx-1 shadow text-light" href="<?= site_url() ?>">Beranda</a>
                </li>
                <div class="btn-group mx-1">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Akun Saya
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= site_url('account/login') ?>">Masuk</a></li>
                    <li><a class="dropdown-item" href="<?= site_url('account/register') ?>">Daftar</a></li>
                  </ul>  
                </div>
                <?php } ?>
              </ul>
            </ul>
          </nav>

          
          <?php $this->load->view($content) ?>


          <div class="card mt-2 col-lg-10 col-md-10 mx-auto" style="margin-bottom: 75px;">
          <div class="card-body">
<!-- Footer -->
<footer class="page-footer font-small bg-primary pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <img class="my-1" src="<?= base_url() . "assets/" ?>images/tiketet.png" alt="" width="230" height="80" >
        <h3>Boking Tiket Online Dimanapun Kapanpun.</h3>
        </div>
        <div class="card d-md-none pb-3 border-0 rounded-0 my-3"></div>
      
      <!-- Grid column -->

      

      <!-- Grid column -->
      <div class="col-md-3 col-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Patner Maskapai</h5>

        <ul class="list-unstyled ">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXHTUdkEB6Ee-mhX7xkK_-rpE3GKAcOrA4Nw&usqp=CAU" width="100px">
        <img src="http://indocargotimes.com/uploads/berita/Lion-Air-Group.jpg" width="100px" class="my-1 bg-light">
          <li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Patner Kereta Api</h5>

        <ul class="list-unstyled">
          <img src="https://4.bp.blogspot.com/-3NNqobuXr3Q/XA-cYupUJpI/AAAAAAAAC4s/DfrbkvYkTls_t4PM7VIf876CYJhgORSCwCLcBGAs/s1600/KERETA%2BAPI.jpg" alt="" class="" width="100px">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiLt_HoHWA0W8G3FUqRLzd-N8QPTh3stZZgg&usqp=CAU" width="100px" class="my-1">
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <!-- Copyright -->

</footer>
  </div>
</div>

</div>
<div class="footer-copyright text-center fw-bold py-3 text-light bg-info fixed-bottom border border-dark">© 2021 Copyright: TIKETET
  </div>








<script src="https://kit.fontawesome.com/a7293e9119.js" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>



  <!-- Compiled and minified JavaScript -->
  <script src="<?= base_url() . "assets/" ?>js/jquery.js"></script>
  <script src="<?= base_url() . "assets/" ?>js/materialize.min.js"></script>
  <script src="<?= base_url() . "assets/" ?>js/chart.min.js"></script>
  <script src="<?= base_url() . "assets/" ?>js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() . "assets/" ?>js/dataTables.material.min.js"></script>
  <script src="<?= base_url() . "assets/" ?>js/jquery-3.3.1.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() . "assets/" ?>js/jquery.steps.js"></script>
	<script src="<?= base_url() . "assets/" ?>js/jquery-ui.min.js"></script>
	<script src="<?= base_url() . "assets/" ?>js/main.js"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->


<script type="text/javascript">
    $(document).ready(function() {
      $('.modal-show').modal();
      $('input.autocomplete').autocomplete({
        data: {
          "Apple": "Apple",
          "Microsoft": null,
          "Google": 'https://placehold.it/250x250'
        },
        limit: , // The max amount of results that can be shown at once. Default: Infinity.
        onAutocomplete: function(val) {

        },
        minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
      });
      $(".button-collapse").sideNav();
      $('.carousel.carousel-slider').carousel({
        fullWidth: true
      });
      // $('.select2').select2();
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

      $('ul.tabs').tabs();
      $("#goPayment").click(function() {
        $('ul.tabs').tabs('select_tab', 'payment');
      });
    });
  </script>
  <script type="text/javascript">
    function cekTP() {
      var asal = $('#p_asal').val();
      var tujuan = $('#p_tujuan').val();
      if (asal == tujuan) {
        $('#p_asal').val('');
        $('#p_tujuan').val('');
        $('#p_asal').material_select();
        $('#p_tujuan').material_select();
      }
    }

    function cekTGLP() {
      var berangkat = $('#p_b').val();
      var pulang = $('#p_p').val();
      if (pulang !== '') {
        if (pulang < berangkat) {
          $('#p_p').val(berangkat);
        }
      }
    }

    function cekTK() {
      var asal = $('#k_asal').val();
      var tujuan = $('#k_tujuan').val();
      if (asal == tujuan) {
        $('#k_asal').val('');
        $('#k_tujuan').val('');
        $('#k_asal').material_select();
        $('#k_tujuan').material_select();
      }
    }

    function cekTGLK() {
      var berangkat = $('#k_b').val();
      var pulang = $('#k_p').val();
      if (pulang !== '') {
        if (pulang < berangkat) {
          $('#k_p').val(berangkat);
        }
      }
    }
    $("#login").click(function() {
      var formData = new FormData($('#loginForm')[0]);
      $.ajax({
        url: "<?= site_url('auth/login') ?>",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          $("input").removeAttr("disabled", "disabled");
          if (data.result) {
            $('#message').html('<div class="alert alert-success">' + data.content + '</div>');
            window.location.replace('<?= base_url() ?>');
          } else {
            $('#message').html('<div class="alert alert-danger">' + data.content + '</div>');

          }

        },
        error: function(jqXHR, textStatus, errorThrown) {
          $("input").removeAttr("disabled", "disabled");
          $('#message').html('<div class="alert alert-danger">Terjadi kesalahan</div>');

        },
        beforeSend: function() {
          $("input").attr("disabled", "disabled");
          $("#message").html('<div class="progress blue lighten-4"><div class="indeterminate blue"></div> </div>');
        }
      });
      return false;
    });
    $("#register").click(function() {
      var formData = new FormData($('#registerForm')[0]);
      $.ajax({
        url: "<?= site_url('auth/register') ?>",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          $("input").removeAttr("disabled", "disabled");
          if (data.result) {
            $('#message').html('<div class="alert alert-success">' + data.content + '</div>');
            window.location.replace('<?= base_url() ?>');
          } else {
            $('#message').html('<div class="alert alert-danger">' + data.content + '</div>');

          }

        },
        error: function(jqXHR, textStatus, errorThrown) {
          $("input").removeAttr("disabled", "disabled");
          $('#message').html('<div class="alert alert-danger">Terjadi kesalahan</div>');

        },
        beforeSend: function() {
          $("input").attr("disabled", "disabled");
          $("#message").html('<div class="progress blue lighten-4"><div class="indeterminate blue"></div> </div>');
        }
      });
      return false;
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

    $('.timepicker').on('mousedown', function(event) {
      event.preventDefault();
    })
  </script>
<script type="text/javascript">
    function addCart(id_rute, jumlah) {
      $.post('<?= base_url('order/cart') ?>', {
        id_rute: id_rute,
        jumlah: jumlah
      }, function(data) {
        $('.pilih').addClass('disabled');
        $('#b' + id_rute).attr('onclick', 'delCart(' + id_rute + ',' + jumlah + ')');
        $('#b' + id_rute).html('BATAL');
        $('#b' + id_rute).removeClass('disabled');
        $('#btnPesan').addClass('slideInDown');
        $('#orderBtn').show();
        $.post('<?= base_url('order/tabelconfirm') ?>', {
          id_rute: id_rute
        }, function(tabel) {
          $('#tblorder').html(tabel);
        });
      });
    }

    function delCart(id_rute, jumlah) {
      $.post('<?= base_url('order/dCart') ?>', {
        id_rute: id_rute,
        jumlah: jumlah
      }, function(data) {
        $('.pilih').removeClass('disabled');
        $('#b' + id_rute).attr('onclick', 'addCart(' + id_rute + ',' + jumlah + ')');
        $('#b' + id_rute).html('PILIH');
        // $('#btnPesan').removeClass('slideInDown');
        // $('#btnPesan').addClass('slideOutDown');
        $('#orderBtn').hide(500);
        $.post('<?= base_url('order/tabelconfirm') ?>', {
          id_rute: id_rute
        }, function(tabel) {
          $('#tblorder').html(tabel);
        });
      });
    }

    function addCartB(id_rute, jumlah) {
      $.post('<?= base_url('order/cart') ?>', {
        id_rute: id_rute,
        jumlah: jumlah
      }, function(data) {
        $('.pilih_b').addClass('disabled');
        $('#b' + id_rute).attr('onclick', 'delCartB(' + id_rute + ',' + jumlah + ')');
        $('#b' + id_rute).html('BATAL');
        $('#b' + id_rute).removeClass('disabled');
        $.post('<?= base_url('order/cekPP') ?>', {
          id_rute: id_rute
        }, function(data) {
          if (data == 1) {
            $.post('<?= base_url('order/tabelconfirm') ?>', {
              id_rute: id_rute
            }, function(tabel) {
              $('#tblorder').html(tabel);
            });
            $('#btnPesan').addClass('slideInDown');
            $('#orderBtn').show();
          } else {
            $('#orderBtn').hide(500);
          }
        });
      });
    }

    function delCartB(id_rute, jumlah) {
      // $('#btnPesan').removeClass('slideInDown');
      // $('#btnPesan').addClass('slideOutDown');
      $.post('<?= base_url('order/dCart') ?>', {
        id_rute: id_rute,
        jumlah: jumlah
      }, function(data) {
        $('.pilih_b').removeClass('disabled');
        $('#b' + id_rute).attr('onclick', 'addCartB(' + id_rute + ',' + jumlah + ')');
        $('#b' + id_rute).html('PILIH');
        $.post('<?= base_url('order/cekPP') ?>', {
          id_rute: id_rute
        }, function(data) {
          if (data == 1) {
            $.post('<?= base_url('order/tabelconfirm') ?>', {
              id_rute: id_rute
            }, function(tabel) {
              $('#tblorder').html(tabel);
            });
            $('#btnPesan').addClass('slideInDown');
            $('#orderBtn').show();
          } else {
            $('#orderBtn').hide(500);
          }
        });
      });
    }

    function addCartP(id_rute, jumlah) {
      $.post('<?= base_url('order/cart') ?>', {
        id_rute: id_rute,
        jumlah: jumlah
      }, function(data) {
        $('.pilih_p').addClass('disabled');
        $('#p' + id_rute).attr('onclick', 'delCartP(' + id_rute + ',' + jumlah + ')');
        $('#p' + id_rute).html('BATAL');
        $('#p' + id_rute).removeClass('disabled');
        $.post('<?= base_url('order/cekPP') ?>', {
          id_rute: id_rute
        }, function(data) {

          if (data == 1) {
            $.post('<?= base_url('order/tabelconfirm') ?>', {
              id_rute: id_rute
            }, function(tabel) {
              $('#tblorder').html(tabel);
            });
            $('#btnPesan').addClass('slideInDown');
            $('#orderBtn').show();
          } else {
            $('#orderBtn').hide(500);
          }
        });
      });
    }

    function delCartP(id_rute, jumlah) {
      // $('#btnPesan').removeClass('slideInDown');
      // $('#btnPesan').addClass('slideOutDown');
      $.post('<?= base_url('order/dCart') ?>', {
        id_rute: id_rute,
        jumlah: jumlah
      }, function(data) {
        $('.pilih_p').removeClass('disabled');
        $('#p' + id_rute).attr('onclick', 'addCartP(' + id_rute + ',' + jumlah + ')');
        $('#p' + id_rute).html('PILIH');
        $.post('<?= base_url('order/cekPP') ?>', {
          id_rute: id_rute
        }, function(data) {

          if (data == 1) {
            $.post('<?= base_url('order/tabelconfirm') ?>', {
              id_rute: id_rute
            }, function(tabel) {
              $('#tblorder').html(tabel);
            });
            $('#btnPesan').addClass('slideInDown');
            $('#orderBtn').show();
          } else {
            $('#orderBtn').hide(500);
          }
        });
      });
    }
    $("#transfer").css('display', 'none');
    $("#kartu").css('display', 'none');
    $("input[name=method]").change(function() {
      if ($("input[name=method]:checked").val() == '1') {
        $("#kartu").css('display', 'none');
        $("#transfer").css('display', 'block');
      } else if ($("input[name=method]:checked").val() == '2') {
        $("#transfer").css('display', 'none');
        $("#kartu").css('display', 'block');
      } else {
        $("#transfer").css('display', 'none');
        $("#kartu").css('display', 'none');
      }
    });

    function cekCode(harga) {
      var code = $('#kode').val();
      var total;
      $.ajax({
        url: "<?= site_url('order/check_code/') ?>/" + code + "/" + harga,
        type: "GET",
        dataType: 'json',
        success: function(data) {
          if (data.result) {
            $('#msg').html('<div class="alert alert-sucess">Selamat! anda mendapatkan diskon</div>');
            $('#kode').attr('readonly', 'readonly');
            $('.total').html(data.total);
            $('#code').html('Kode Promo : ' + data.code);
            $('#min').html('- ' + data.min);
            $('#promo-t').show();

          } else {
            $('#msg').html('<div class="alert alert-danger">Kode Promo Salah</div>');
          }

        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error adding / update data');

        }
      });
    };

    $("#pay").click(function() {
      var formData = new FormData($('#orderForm')[0]);
      $.ajax({
        url: "<?= site_url('order/pay') ?>",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: 'JSON',
        success: function(data) {
          if (data.result) {
            window.location.replace('<?= base_url('order/complete') ?>/' + data.id_order);
          } else {
            alert('HEHEH');
          }

        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('HEHE');

        },
        beforeSend: function() {
          $("#menu").hide();
          $("#progress").show();
        }
      });
      return false;
    });
  </script>
  <script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#exampleInputPassword1');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
});
</script>
<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
</body>

</html>