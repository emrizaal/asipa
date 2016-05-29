<!DOCTYPE html>
<html>

<head>
    <title>Flat Admin V.2 - Free Bootstrap Admin Templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/css/font-awesome.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/flat-blue.css">
    <style type="text/css">
        body.login-page .login-form input {
    border: 1px solid #CCF;
}
    </style>
</head>

<body class="flat-blue login-page">
    <div class="container">
        <div class="login-box">
            <div>
                <div class="login-form row">
                    <div class="col-sm-12 text-center login-header">
                        <!-- <i class="login-logo fa fa-connectdevelop fa-5x"></i> -->
                       
                    </div>
                    <div class="col-sm-12">
                        <div class="login-body text-center">
                        

                             <h4 class="login-title" style="margin-top: -5px;">Sistem Informasi Pengadaan Alat</h4>
                           <img src="<?=base_url()?>assets/img/opl.png"  class="login-logo" width="25%">
                             <h4 class="login-title" style="margin-bottom: -5px;">(POLBAN)</h4>

                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="login-body">
                            <div class="progress hidden" id="login-progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    Log In...
                                </div>
                            </div>
                            <form method="POST" action="<?=site_url()?>Site/login">
                                <div class="control">
                                    <input type="text" class="form-control" value="admin@gmail.com" />
                                </div>
                                <div class="control">
                                    <input type="password" class="form-control" value="123456" />
                                </div>
                                <div class="login-button text-center">
                                    <input type="submit" class="btn btn-primary" value="Login">
                                </div>
                            </form>
                        </div>
                        <div class="login-footer">
                            <span class="text-right"><a href="<?=site_url()?>" class="color-white">Lupa password?</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript Libs -->
</body>

</html>
