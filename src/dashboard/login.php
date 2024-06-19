<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
   
   <head>
      <meta charset="utf-8" />
      <title>Portfi - Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="Create Your Free Online Portfolio with portfi.online!" />
      <meta name="author" content="portfi.online" />
      <link href="assets/css/vendor.min.css" rel="stylesheet" />
      <link href="assets/css/style.min.css" rel="stylesheet" />
      <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
   </head>
   <body class='pace-top'>
      <div id="app" class="app app-full-height app-without-header">
         <div class="login">
            <div class="login-content">
               <form id="signin">
                   <hr>
                  <center><img src="<?= $base_url; ?>/dashboard/assets/images/login.png" ></center>
                  <hr>
                  
                  <h2 class="text-center">Sign In / Login</h2>
                  <div class="mb-3">
                     <label class="form-label">Email <span class="text-danger">*</span>
                     </label>
                     <input type="email" class="form-control form-control-lg bg-white bg-opacity-5 " name="email" placeholder="Email" required <?= $db_status == false ? "disabled" : "" ?>/>
                  </div>
                  <div class="mb-3">
                     <div class="d-flex">
                        <label class="form-label">Password <span class="text-danger">*</span>
                        </label>
                        <a onclick="alert('function will be implement later!');" class="ms-auto text-white text-decoration-none text-opacity-50">Forgot password?</a>
                     </div>
                     <input type="password" class="form-control form-control-lg bg-white bg-opacity-5" name="password" placeholder="Passsword" required <?= $db_status == false ? "disabled" : "" ?>/>
                  </div>
                  <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3" <?= $db_status == false ? "disabled" : "" ?> >Masuk</button>
               </form>
               <div class="text-center text-white text-opacity-50"> Belum punya akun? <a href="register">Daftar</a>. </div>
            </div>
         </div>
         <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade">
            <i class="fa fa-arrow-up"></i>
         </a>
      </div>
        <script src="assets/js/vendor/jquery.min.js"></script>
      <script src="assets/js/vendor.min.js" type="bca4a246f31e67d8a0cfbfed-text/javascript"></script>
      <script src="assets/js/app.min.js" type="bca4a246f31e67d8a0cfbfed-text/javascript"></script>
      <script src="index.js?id=<?= time();?>"></script>
      <script src="https://seantheme.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="bca4a246f31e67d8a0cfbfed-|49" defer=""></script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"77c3a300af4f0d48","version":"2022.11.3","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css"/>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
    $('#signin').on('submit',function(e) {
        e.preventDefault();
        $.ajax({
            url: 'router.php',
            dataType: 'JSON',
            type: 'POST',
            data: $(this).serialize()+"&method=control&path=signin",
            headers: {
                    'EXECUTE': 'DONE'
            },
            beforeSend: function() {
                $('.btn').attr('disabled');
            },
            complete: function() {
                $('.btn').removeAttr('disabled');
            },
            success: function(r) {
                
                if(r.success == 'true') {
                    Swal.fire({
                              icon: 'success',
                              title: 'Success!',
                              text: 'You have succesfully logged in, redirecting...',
                              timer: 5000,
                              showCancelButton: false,
                              showConfirmButton: false,
                              allowOutsideClick: false
                            })
                    if(r.action == "move")
                    {
                        javascript:location.replace(r.next_view);
                    }
                } else {
                     Swal.fire({
                              icon: 'error',
                              title: 'Error!',
                              text: r.msg,
                             
                            })
                }
            }
        });
    });
   </script>
   </body>
</html>