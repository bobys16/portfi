<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Portfi - Signup</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="Create Your Free Online Portfolio with portfi.online!" />
      <meta name="author" content="portfi.online" />
      <link href="assets/css/vendor.min.css" rel="stylesheet" />
      <link href="assets/css/style.min.css" rel="stylesheet" />
      <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
   </head>
   <body class='pace-top'>
      <div id="app" class="app app-full-height app-without-header">
         <div class="register">
            <div class="register-content">
               <form id="signup">
                  <hr>
                  <center>
                     <img src="assets/images/login.png">
                  </center>
                  <hr>
                  <h1 class="text-center">Sign Up / Daftar</h1>
                  <p class="text-white text-opacity-50 text-center">Buat akun untuk mulai membuat portfolio mu!</p>
                  <div class="mb-3">
                     <label class="form-label">Your Name <span class="text-danger">*</span>
                     </label>
                     <input type="text" name="name" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="ex: Lionel Ronaldo" required />
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Email Address <span class="text-danger">*</span>
                     </label>
                     <input type="email" name="email" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="username@address.com" required />
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Password <span class="text-danger">*</span>
                     </label>
                     <input type="password" name="pw1" class="form-control form-control-lg bg-white bg-opacity-5" value="" required placeholder="Mohon Masukkan Password yang kuat!" />
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Confirm Password <span class="text-danger">*</span>
                     </label>
                     <input type="password" name="pw2" class="form-control form-control-lg bg-white bg-opacity-5" value="" required placeholder="Mohon Masukkan ulang Password sama!" />
                  </div>
                  <div class="mb-3">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck1" required />
                        <label class="form-check-label" for="customCheck1">Saya telah menyetujui <a href="#">Terms of Use</a> dan <a href="#">Privacy Policy dari Portfi</a>. </label>
                     </div>
                  </div>
                  <div class="mb-3">
                     <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100">Daftar</button>
                  </div>
                  <div class="text-white text-opacity-50 text-center"> Sudah Punya Akun Portfi? <a href="/dashboard/login">Login</a>
                  </div>
               </form>
            </div>
         </div>
         <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade">
            <i class="fa fa-arrow-up"></i>
         </a>
      </div>
      <script src="assets/js/vendor/jquery.min.js"></script>
      <script src="assets/js/vendor.min.js" type="d0f64290b5c55f95e2777a1e-text/javascript"></script>
      <script src="assets/js/app.min.js" type="d0f64290b5c55f95e2777a1e-text/javascript"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
      <script src="index.js?id=<?= time();?>">
      </script>
      <script>
         $('#signup').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
               url: 'router',
               dataType: 'JSON',
               type: 'POST',
               data: $(this).serialize() + "&method=control&path=signup",
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
                  if (r.success == 'true') {
                     Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: r.msg,
                     })
                     setTimeout(function() {
                        javascript: location.replace('/dashboard')
                     }, 4000);
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
      <script src="https://seantheme.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d0f64290b5c55f95e2777a1e-|49" defer=""></script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"77c3a3edaeea0d48","version":"2022.11.3","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
   </body>
</html>