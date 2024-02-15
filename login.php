<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admin</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="text-align: center;">
                            <img src="images/logo.png" alt="Logo" style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 20px;">
                        </div>
                        <h2 class="card-title" style="text-align: center; font-weight: bold;">Selamat Datang! Silakan Login</h2><br>
                        
                        <form action="proses-login.php" method="POST">
                            <input type="text" name="username" placeholder="Masukkan Username" class="form-control" required> <br>
                            <input type="password" name="password" placeholder="Masukkan Password" class="form-control" required><br>
                            
                            <button type="submit" name="kirim" class="btn btn-primary btn-block">
                                <span class="glyphicon glyphicon-log-in"></span> Login
                            </button>
                            <button type="reset" name="kosongkan" class="btn btn-secondary btn-block">
                                <span class="glyphicon glyphicon-refresh"></span> Reset
                            </button>
                        </form><br>
                        <a href="index.php"><span class="glyphicon glyphicon-home pull-right"> Beranda</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>