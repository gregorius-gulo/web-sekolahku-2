<?php include "header.php"; ?>

		<!-- Awal script Slider/ Carousel -->
<div id="contoh-carousel" class="carousel slide" data-ride="carousel">
	      <ol class="carousel-indicators">
	        <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
	        <li data-target="#contoh-carousel" data-slide-to="1"></li>
	        <li data-target="#contoh-carousel" data-slide-to="2"></li>
	      </ol>

     <div class="carousel-inner" role="listbox">
		<div class="item active">
          <img src="images/carousel-1.jpg" alt="Berisi keterangan gambar">
	         <div class="carousel-caption">
				<h2><b>Penerimaan Siswa Baru SMK Negeri 2 Mandrehe TA. 2023/2024 Telah Dibuka!</b></h2><p>
				<a href="pendaftaran.php" class="btn btn-primary btn-utama" role="button">Daftar</a>
				<a href="about.php" class="btn btn-primary btn-danger" role="button">Baca lebih lanjut</a>
			</div>
        </div>

		<div class="item">
          <img src="images/carousel-2.jpg" alt="Berisi keterangan gambar">
        </div>

		<div class="item">
          <img src="images/carousel-3.jpg" alt="Berisi keterangan gambar">
        </div>
	</div>
	
			<!-- Awal script Button Geser Kiri dan Kanan -->
		    <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		    </a>
				
		    <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		    </a><!-- Akhir script Button Geser Kiri dan Kanan -->

</div><!-- Akhir script Slider/Carousel --> <br><br><br><br>
		

<?php include "footer.php"; ?>