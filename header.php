<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 2 Mandrehe</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <style>
        .navbar-inverse {
            background-color: #333;
            border-color: #080808;
        }

        .navbar-inverse .navbar-brand,
        .navbar-inverse .navbar-nav > li > a {
            color: #fff;
            transition: color 0.3s; /* Animasi perubahan warna */
            position: relative; /* Menambahkan posisi relatif untuk garis bawah */
            padding-bottom: 6px; /* Jarak antara teks dan garis bawah */
        }

        .navbar-inverse .navbar-brand:hover,
        .navbar-inverse .navbar-nav > li > a:hover {
            color: #ffd700;
            text-decoration: none; /* Menghapus garis bawah default */
        }

        .navbar-inverse .navbar-nav > li > a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 2px;
            width: 0;
            background-color: #ffd700;
            transition: width 0.3s; /* Animasi lebar garis bawah */
        }

        .navbar-inverse .navbar-nav > li > a:hover::after {
            width: 100%;
        }
    </style>

<body>
    
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-education"></span> SMK NEGERI 2 MANDREHE</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> Beranda<span class="sr-only">(current)</span></a>
                    </li>

                    <li>
                        <a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> Tentang</a>
                    </li>
                    
                    <li>
                        <a href="fasilitas.php"><span class="glyphicon glyphicon-th-large"></span> Fasilitas</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-book"></span> Jurusan<span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu">
                                <li><a href="otkp.php">OTKP</a></li>
                                <li><a href="dpib.php">DPIB</a></li>
                                <li><a href="tkro.php">TKRO</a></li>
                                <li><a href="atph.php">ATPH</a></li>
                                <li><a href="rpl.php">RPL</a></li>
                            </ul>
                    </li>

                    <li>
                        <a href="siswa.php"><span class="glyphicon glyphicon-list-alt"></span> Siswa</a>
                    </li>

                    <li>
                        <a href="guru.php"><span class="glyphicon glyphicon-list-alt"></span> Guru</a>
                    </li>

                    <li>
                        <a href="pendaftaran.php"><span class="glyphicon glyphicon-user"></span> Pendaftaran</a>
                    </li>

                    <li>
                        <a href="galeri.php"><span class="glyphicon glyphicon-picture"></span> Galeri</a>
                    </li>

                    <li>
                        <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Kontak</a>
                    </li>

                    <li>
                        <a href="login.php"><span class="glyphicon glyphicon-lock"></span> Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>