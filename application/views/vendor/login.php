<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?=base_url();?>vendor/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>vendor/favicon.ico" />
    <title>Login - Smart Venue | Vendor Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?=base_url();?>assets/vendor/assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="<?=base_url();?>assets/vendor/assets/css/dashboard.css" rel="stylesheet" />
    <script src="<?=base_url();?>assets/vendor/assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?=base_url();?>assets/vendor/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="<?=base_url();?>assets/vendor/assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="<?=base_url();?>assets/vendor/assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="<?=base_url();?>assets/vendor/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="<?=base_url();?>assets/vendor/assets/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
               <img src="<?=base_url();?>assets/vendor/assets/images/logo/vendor-logo.png" />
              </div>
              <form class="card" action="<?=base_url();?>vendor/login/checklogin" method="post">
                <div class="card-body p-6">
                  <div class="card-title">Login to your account</div>
                  <span><strong style="color: red"> <?=validation_errors();?></span></strong>
                  <div class="form-group">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" aria-describedby="emailHelp" placeholder="Enter Mobile" required="">
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      Password
                      <a href="<?=base_url();?>vendor/forgot_password" class="float-right small">I forgot password</a>
                    </label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                  </div>
                  <!-- <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Remember me</span>
                    </label>
                  </div> -->
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Don't have account yet? <a href="<?=base_url();?>vendor/register">Sign up</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>