<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <title>Login Form</title>
  </head>
  <body class="bg-primary">
    <div class="auth-page">
  <div class="hhero card position-absolute top-50 start-50 translate-middle px-2 bg-light p-2 text-dark d-inline p-2" style="width: 25rem;">
  <img src="<?=base_url()?>assets/images/tiketet.png" class="card-img-top" alt="...">
  <div class="card-body ">
    <h5 class="card-title text-center font-monospace">Halaman Admin</h5>
  </div>
  <ul class="list-group list-group-flush">
  <form id="admin_login">
  <div id="message"></div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Kata Sandi">
    <input type="checkbox" id="togglePassword"> Lihat Kata Sandi</i>
  </div>

  <button type="submit" name="login" id="goLogin" class="btn btn-primary">Submit</button>
</form>
</ul>
</div>
</div>
</div>
  



<script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#exampleInputPassword1');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="<?=base_url()."assets/"?>js/jquery.js"></script>
<script src="<?=base_url()."assets/"?>js/materialize.min.js"></script>
<script type="text/javascript">
  $( "#goLogin").click(function() {
    var formData = new FormData($('#admin_login')[0]);
    $.ajax({
      url : "<?=site_url('admin/login/auth')?>",
      type: "POST",
      data: formData,
      contentType: false,          
      processData:false,
      success: function(data)
      {
        $("input").removeAttr("disabled","disabled");
        if(data.result) 
        {
          $('#message').html('<div class="alert alert-success" >'+data.content+'</div>');
          window.location.replace('<?=base_url('admin/dashboard')?>');
        }else{
          $('#message').html('<div class="alert alert-danger" >'+data.content+'</div>');

        }
        
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        $("input").removeAttr("disabled","disabled");
        $('#message').html('<div class="alert alert-danger">Terjadi kesalahan</div>');
        
      }
      ,beforeSend:function()
      {
        $("input").attr("disabled","disabled");
        $("#message").html('<div class="progress blue lighten-4"><div class="indeterminate blue"></div> </div>');
      }
    });
    return false;
  });
</script>
</body>
</html>