<!doctype HTML>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMK Negeri 2 Mandrehe</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/styles.css" rel="stylesheet">
  <script src="../bootstrap/plugins/ckeditor/ckeditor.js"></script>

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


</head>
<body>
    
	<!-- Awal script Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-education"></span> SMK NEGERI 2 MANDREHE</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
							<a href="index.php"><span class="glyphicon glyphicon-home"></span> Dashboard <span class="sr-only">(current)</span></a>
						</li>
            <li>
							<a href="tampil-siswa.php"><span class="glyphicon glyphicon-list-alt"></span> Siswa</a>
						</li>
            <li>
              <a href="tampil-guru.php"><span class="glyphicon glyphicon-list-alt"></span> Guru</a>
            </li>
            <li>
              <a href="pendaftaran.php"><span class="glyphicon glyphicon-user"></span> Pendaftaran Siswa Baru</a>
            </li>
            <li>
							<a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Kontak Pesan</a>
						</li>
            <li>
							<a href="tampil-user.php"><span class="glyphicon glyphicon-user"></span> User</a>
						</li>

        
                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
           
          </li>
          </ul>
        </div>
      </div>
    </nav><!-- Akhir script Navbar -->