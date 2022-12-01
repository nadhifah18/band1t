<?php

session_start();

if (!isset($_SESSION['username'])) {
	header("Location: index.php");
}

?>
<?php include 'header.php'; ?>
<div class="hero-wrap" style="background-image: url('foto/home.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-8 ftco-animate d-flex align-items-end">
				<div class="text w-100 text-center">
					<h1 class="mb-4"><span>Renewable Energy Today & Tomorrow</span>.</h1>
					<p><a href="https://www.youtube.com/embed/f-BcitVO02o?rel=0&autoplay=1&fs=1" class="btn btn-primary py-2 px-4">Watch video</a></p>
					<p><a href="#tentangkami" class="btn btn-primary py-2 px-4">Tentang Kami</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="ftco-intro">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-4 d-flex">
				<div class="intro d-lg-flex w-100 ftco-animate">
					<div class="icon">
						<img src="foto/icon-home-1.png" width="100px">
					</div>
					<div class="text">
						<h2 class="mt-4">6</h2>
						<h2>POWER PLANTS</h2>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="intro color-1 d-lg-flex w-100 ftco-animate">
					<div class="icon">
						<img src="foto/icon-home-2.png" width="100px">
					</div>
					<div class="text">
						<h2>65</h2>
						<h2>MEGAWATTS</h2>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="intro color-2 d-lg-flex w-100 ftco-animate">
					<div class="icon">
						<img src="foto/icon-home-4.png" width="100px">
					</div>
					<div class="text">
						<h2>3</h2>
						<h2>FUTURE PROJECTS</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pb" id="tentangkami">
	<div class="container">
		<div class="row">
			<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center">
				<img src="foto/home1.jpeg" width="100%" style="border-radius: 10px">
			</div>
			<div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
				<div class="heading-section">
					<h3 class="mt-4">Tentang Kami</h3>
					<p>Indonesia, Zamrud Khatulistiwa, memiliki 17.000 pulau dan 260 juta penduduk serta keanekaragaman hayati tak terhingga. Merupakan salah satu negara dengan ekonomi terbesar di Asia Tenggara.
						<br><br>
						Indonesia, dengan ekonomi serta pertumbuhan penduduk yang masih terus berkembang dan bertumbuh, memiliki tingkat konsumsi energi yang kian bertambah. Indonesia dikaruniai potensi energi baru terbarukan yang berlimpah, seperti tenaga air, minihidro, surya, biomass, dan angin. Peningkatan kebutuhan energi ini mendorong pemerintah Indonesia melakukan upaya untuk mewujudkan beragam potensi energi baru terbarukan dan berkomitmen untuk menambah porsi energi baru terbarukan hingga 23% pada tahun 2028 dan sekurang-kurangnya 31% pada tahun 2050*.
						<br><br>
						Dalam suasana yang sangat menjanjikan bagi investasi energi terbarukan dan kemitraan teknologi, kami hadir sebagai penyedia daya listrik bagi kebutuhan industri dan rumah tangga Indonesia. Tujuan kami adalah meningkatkan taraf hidup masyarakat Indonesia melalui inovasi dan kolaborasi yang ekonomis sekaligus ramah lingkungan.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pb">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wrap-about pl-md-5 ftco-animate py-5">
				<div class="heading-section">
					<h3 class="mt-4">Rencana Ekspansi Agresif yang Didukung Kesepakatan dengan PLN.</h3>
					<p>PT Kencana Energi Lestari, Tbk. merupakan perusahaan penyedia energi baru terbarukan terkemuka di Indonesia. Melalui dua anak perusahaan, PT Bangun Tirta Lestari dan PT Energi Sakti Sentosa, kami menghasilkan energi baru terbarukan bagi kebutuhan industri dan rumah tangga Indonesia.
						<br><br>
						Kami terus aktif mengembangkan bisnis ke seantero negeri. Kencana Energy telah mengoperasikan hydropower plant di Sumatera Utara yaitu PLTA Pakkat melalui PT Energi Sakti Sentosa dan hydropower plant di Bengkulu yaitu PLTA Air Putih melalui PT Bangun Tirta Lestari. Kami juga tengah melakukan proses pengembangan PLTMH Madong di Toraja Utara. PT Kencana Energi Lestari, Tbk. akan mengembangkan usahanya ke berbagai lokasi lain di Sumatera dan Sulawesi.
						<br><br>
						Kami telah menandatangani Power Purchase Agreement (PPA) dengan Perusahaan Listrik Negara (PLN), sebuah kesepakatan yang menjadi incaran dan dasar usaha bagi banyak perusahaan energi atau Independent Power Producer (IPP). Salah satu kekuatan utama kami adalah pengalaman di bidang energi baru terbarukan serta didukung profil keuangan yang kuat, berkat kesepakatan dengan PLN yang menjadi sumber pendapatan yang stabil bagi kami.
						<br><br>
						Saat ini kami memiliki 4 kesepakatan dengan PLN, yang masing-masing dijalankan oleh PT Energi Sakti Sentosa (ESS) sebesar 18 MW, PT Bangun Tirta Lestari (BTL) sebesar 21 MW, PT Nagata Dinamika Hidro Madong sebesar 10MW dan PT Energy Karya Persada sebesar 5MW. ESS mulai beroperasi secara komersial pada tahun 2016, sedangkan BTL direncanakan mulai beroperasi pada kuartal ketiga tahun 2019.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="constructions">
	<div class="container" data-aos="fade-up">
		<div class="gy-4">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="hero-item">
						<div class="row">
							<div class="col-xl-5">
								<div class="hero-wrap height-project " style="background-image: url('foto/gambar1.jpg');"></div>
							</div>
							<div class="col-xl-7 d-flex align-items-center">
								<div class="card-body">
									<h4 class="card-title">01</h4>
									<p>PT ENERGI SAKTI SENTOSA</p>
									<h4 class="card-title">PLTA PAKKAT</h4>
									<p>SUMATERA</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
					<div class="card-item">
						<div class="row">
							<div class="col-xl-7 d-flex align-items-center">
								<div class="card-body">
									<h4 class="card-title">02</h4>
									<p>PT BANGUN TIRTA LESTARI</p>
									<h4 class="card-title">PLTA AIR PUTIH</h4>
									<p>SUMATERA</p>
								</div>
							</div>
							<div class="col-xl-5">
								<div class="hero-wrap height-project" style="background-image: url('foto/gambar2.jpg');"></div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
					<div class="card-item">
						<div class="row">
							<div class="col-xl-5">
								<div class="hero-wrap height-project" style="background-image: url('foto/gambar3.jpg');"></div>
							</div>
							<div class="col-xl-7 d-flex align-items-center">
								<div class="card-body">
									<h4 class="card-title">03</h4>
									<h4 class="card-title">PT NAGATA DINAMIKA HIDRO MADONG</h4>
									<p>SULAWESI SELATAN</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
					<div class="card-item">
						<div class="row">
							<div class="col-xl-7 d-flex align-items-center">
								<div class="card-body">
									<h4 class="card-title">04</h4>
									<h4 class="card-title">PLTBM TEMPILANG 2</h4>
									<p>KEPULAUAN BANGKA BELITUNG</p>
								</div>
							</div>
							<div class="col-xl-5">
								<div class="hero-wrap height-project" style="background-image: url('foto/gambar4.jpg');"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
					<div class="card-item">
						<div class="row">
							<div class="col-xl-5">
								<div class="hero-wrap height-project" style="background-image: url('foto/gambar5.jpg');"></div>
							</div>
							<div class="col-xl-7 d-flex align-items-center">
								<div class="card-body">
									<h4 class="card-title">05</h4>
									<h4 class="card-title">PLTM ORDI HULU</h4>
									<p>PAKBAK BHARAT SUMATERA UTARA</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
					<div class="card-item">
						<div class="row">
							<div class="col-xl-7 d-flex align-items-center">
								<div class="card-body">
									<h4 class="card-title">06</h4>
									<h4 class="card-title">PLTS TEMPILANG</h4>
									<p>BANGKA BARAT, KEPULAUAN BANGKA BELITUNG</p>
								</div>
							</div>
							<div class="col-xl-5">
								<div class="hero-wrap height-project" style="background-image: url('foto/gambar6.jpg');"></div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
					<div class="card-item">
						<div class="row">
							<div class="col-xl-5">
								<div class="hero-wrap height-project" style="background-image: url('foto/gambar7.jpg');"></div>
							</div>
							<div class="col-xl-7 d-flex align-items-center">
								<div class="card-body">
									<h4 class="card-title">07</h4>
									<h4 class="card-title">FUTURE PROJECTS</h4>
									<p>SULAWESI AND SUMATERA</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

<?php
include 'footer.php';
?>