<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Follow Taxes | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>Follow</b>Taxes</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="loginForm">
        <div id="loginFeedback"></div>
        <div class="input-group mb-3">
          <input type="email" id="adminEmailAddress" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="adminPassword" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mt-2 mb-3">
        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
      </div>
      </form>
      <p class="mb-1">
        <a href="/forgot-password.php">I forgot my password</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script>
  $(() => {
    $('#loginForm').submit((e) => {
      e.preventDefault();
      
      let adminEmailAddress = $('#adminEmailAddress').val();
      let adminPassword = $('#adminPassword').val();
      $('#loginFeedback').html("");
      
      if(adminEmailAddress == "")
      {
        const message = `<div class="alert alert-danger">
          Email Address is required
        </div>`;
        $('#loginFeedback').html(message)
        return;
      }
      if(adminPassword == "" )
      {
        const message = `<div class="alert alert-danger">
          Password is required
        </div>`;
        $('#loginFeedback').html(message)
        return;
      }
      
    })
  })
</script>
</body>
</html>
