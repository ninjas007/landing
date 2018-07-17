<!-- Content Penjualan -->
<div class="gtco-section border-bottom">
	<div class="gtco-container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
				<h2>Pesan Dan Kami Antar</h2>
				<p>Sistem penjualan yang kami tawarkan adalah dimana pembeli memesan ikan yang ingin dibelinya dan kami mengantarkannya langsung ke tempatnya. Lebih jelasnya silahkan <a href="http://localhost/penjualan/contact.php">Kontak Kami</a> atau pesan melalui<a href="http://localhost/penjualan/form_beli.php"> Form Disini</a></p>				
			</div>
		</div>
		<div class="row">
			<?php foreach ($rows as $value) : ?>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<a href="images/jualan/<?= $value['gambar']; ?>" class="fh5co-project-item image-popup">
					<figure>
						<div class="overlay"><i class="ti-plus"></i></div>
						<img src="images/jualan/<?= $value['gambar']; ?>" alt="Image" class="img-responsive">
					</figure>
					<div class="fh5co-text">
						<h2><?= $value['nama_ikan']; ?></h2>
						<p>
							Harga Perkilo Rp. <?= $value['harga_ikan']; ?><br>
						</p>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
		<hr>
		<div class="container" style="text-align: center; margin-left: -45px;">
			<div class="row">
				<h3>ATAU HUBUNGI KAMI MELALUI HANDPHONE</h3>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-tablet"></i>
						</span>
						<h5>NAMA PENJUALNYA 1</h5>
						<p>08123456789</p>
						<p>Jln. Lurus Terus</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-tablet"></i>
						</span>
						<h4>NAMA PENJUALNYA 2</h4>
						<p>08123456789</p>
						<p>Jln. Saja Jangan Tanya</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-tablet"></i>
						</span>
						<h4>NAMA PENJUALNYA 3</h4>
						<p>08123456789</p>
						<p>Jln. Saja Jangan Tanya</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
