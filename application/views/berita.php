<?php include 'header.php'; ?>        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Berita</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo base_url() ?>index.php">Beranda</a>
                        <a href="">Halaman</a>
                        <a href="">Berita</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div id="fh5co-blog" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				</div>
			</div>
		</div>
                    <?php foreach ($data as $d) : ?>
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="<?php echo base_url() . '/gambar/' . $d['gambar'] ?>" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>Berita</p>
                            <h2><?=$d['judul'];?></h2>
                            <br>
                        <?=$d['tanggal'];?>
                        </div>
                        <div class="about-content" style="overflow: hidden; height:120px;"height="60px"; >
                            <p>
                            <?=$d['isi'];?>
                                <!-- BANYUMAS - Koperasi Utama Sejahtera Mandiri di Desa Cerdas Mandiri Lestari DCML Cilongok di Banyumas, terus berkembang. Dalam jangka waktu 18 bulan, keanggotaan koperasi ini sudah mencapai 800 KK, dan tahun depan ditargetkan mencapai 1.500 kepala keluarga (KK). 
                                Target tersebut dipasang, karena perkembangan koperasi tidak hanya pada jumlah keanggotaan. Melainkan juga kualitas pelaku usaha kecil mikro dan menengah, sebagai anggota koperasi yang juga terus meningkat.
                                Manajer Umum Koperasi Utama Sejahtera Mandiri Cilongok, Lasworo Suyono, mengatakan meningkatnya kualitas pelaku UMKM setidaknya dapat dilihat dari besarnya pinjaman modal usaha yang diajukan.
                                "Banyak anggota koperasi kita melakukan top up pinjaman karena usahanya mulai berkembang, dan kita layani mereka sebisa mungkin. Ada yang melakukan top up pinjaman dari Rp.2 juta menjadi Rp.4 juta, ada yang menjadi Rp.5 juta. Rata-rata top up pinjaman dalam kisaran Rp. 3-5 juta," kata Lasworo, Selasa (29/12/2020)." -->
                            </p>
                        </div>
                        <div class="col-md-12 text-center">
					<p><a href="<?php echo base_url().'home/artikel'?>" class="btn btn-primary btn-outline with-arrow">Selengkapnya <i class="icon-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <?php endforeach; ?>
        <!-- About End -->

        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">27</h3>
                                <p>Daerah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">250</h3>
                                <p>Anggota</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1500</h3>
                                <p>Partisipan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">125</h3>
                                <p>Proyek Terselesaikan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Facts End -->
        
<?php include 'footer.php'; ?>