<!DOCTYPE html>
<html>
<head>
    <title>PuskoNet | Network Monitoring Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
          <div class="header-box head">
            <div class="head-body">
              <h3 class="headtext head-12">Network Service Monitoring</h3>
              </br>
              <p class="headtext">Welcome to PuskoNet Customer Network Service Monitoring</p>
            </div>
          </div>
          <div class="login-box card">
            <div class="card-body">
              <center><img src="<?php echo base_url(); ?>assets/img/logo.png" style="padding :15px;" height="auto" width="200px"></center>

                <form action="login/aksi_login" method="post">
                  <div class="form-group m-t-40">
                      <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Username" name="username" required>
                      </div>
                       </div>
                  <div class="form-group">
                        <div class="col-xs-12">
                          <input class="form-control" type="password" required="" placeholder="Password" name="password" required>
                        </div>
                       </div>
                       <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block waves-effect waves-light" type="submit" value="Login">Masuk</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
</body>
</html>
