<?php 
require_once("conn.php");
if (!isset($_SESSION)) {
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>
<body>
    
	<?php include "header.php"; ?>
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Caffe abel</h2>
				<p>Come and enjoy Café Abel's coffee from all over the world and food from local suppliers! Tuesday-Sunday: 10:00-17:00.. </p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/1.jpg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>kopi joy</h2>
				<p>KopiJoy adalah coffeshop yang memiliki beragam menu Kopi dan berbagai macam menu non-kopi/makanan..</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/2.jpg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image03" /></div>
				
			</div>
			<div class="da-slide">
				<h2>caffe suarna</h2>
				<p>Swarna Cafe & Space. Super Partner. Aneka nasi, Jepang, Kopi.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/3.jpg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image02" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    <div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
                reservasi-cafe merupakan tempat untuk menampung pengusaha caffe di seluruh indonesia secara online.
				</p>
        		<p><a class="btn btn-success btn-large" href="profil.php">Tentang Kami &raquo;</a></p>
                                
      		</div>
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
            
      		<div class="row">
	                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY kode DESC limit 9");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="admin/<?php echo $data['gambar']; ?>" style="border: 2px solid grey; border-radius: 5px; width: 250px; height: 200px;"  />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="clear"> <a href="index.html" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              
              
              ?>

      		</div>
			
			<hr>
			
			<!-- start: Row -->
				<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Siap melayani</h3>
								<p>reservasi-cafe siap melayani dan menampung kebutuhan online caffe di seluruh indonesia.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-cup  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Di jamin mudah</h3>
								<p>reservasi-cafe memiliki teknologi paling muthir untuk mengedarkan caffe anda di sosial media.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<a href="#"><img src="img/logo-web.jpeg" alt="logo" /></a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

								<li><a href="#">Cepat Publis</a></li>

							<li><a href="#">Biyaya Murah</a></li>

							<li><a href="#">Dijamin Aman</a></li>

						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->
<?php include "footer.php"; ?>

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script>
	let url = window.location.pathname;
	console.log(url);
</script>
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>