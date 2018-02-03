<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Form Login CWA Portal">
    <meta name="author" content="">

    <title>Login Form - CWA Portal</title>

    <!-- Bootstrap core CSS -->
     <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/signin.css') ?>" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="<?= base_url('backend/index') ?>" method="post">
      <img class="mb-4" src="<?= base_url('assets/img/logo.png') ?>" alt="" width="90" height="90">
      <?php 
          if($this->session->flashdata('error')) { 
              echo '<div class="alert alert-danger">';
              echo $this->session->flashdata('error');
              echo '</div>';
          } 
      ?>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="username" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; Refo Junior - 2018</p>
    </form>
  </body>
</html>
