<?php include 'header.php'; ?>        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
                    <?php foreach ($data as $d) : ?>
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-100">
                        <div class="about-img">
                        </div>
                    </div>
                    <div class="col-lg-100">
                        <div class="section-header text-left">
                            <h2><?=$d['judul'];?></h2>
                            <br>
                        <?=$d['tanggal'];?>
                        </div>
                        <div class="about-content">
                            <p>
                            <?=$d['isi'];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <?php endforeach; ?>
        <!-- About End -->

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Hubungi</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Desa Pageraji RT 01 RW 01, Kec. Cilongok Kab. Banyumas</p>
                            <p><i class="fa fa-phone-alt"></i>081 380 209 567</p>
                            <p><i class="fa fa-envelope"></i>lilykhayati@gmail.com</p>
                            <p><i class="fab fa-instagram"></i>KP KOPERASI KSU MANGGAR TUWUH</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">2022 Koperasi KSU Manggar Tuwuh</a> | All Right Reserved</p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/easing/easing.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/waypoints/waypoints.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="<?php echo base_url() ?>assets/mail/jqBootstrapValidation.min.js"></script>
        <script src="<?php echo base_url() ?>assets/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    </body>
</html>