    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl jalan margo</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 2345 6789</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>bsi@ac.id</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/KuliahBSIAja"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://web.facebook.com/profile.php?id=100064831502950"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UCoWyVzpEpSx6G8GY89qULPA"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Jam operasional</h4>
                    <h6 class="text-light">Senin - Jumat:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Sabtu - Minggu:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Tentang kami</h4>
                    <p>BSI Car Rental adalah penyedia layanan sewa mobil terpercaya dan terdepan dengan memberikan pilihan mobil yang lengkap, tarif yang kompetitif, dan pelayanan pelanggan yang prima.</p>
                   
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">BSI Car Rental</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://www.bsi.ac.id">BSI</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Beranda</a>
                            <a href="#"onclick="showFAQ()">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="<?php echo base_url()?>assets/assets_shop/js/main.js"></script>

    <script>
    function showFAQ() {
        // Membuat elemen jendela FAQ
        var faqWindow = document.createElement('div');
        faqWindow.id = 'faq-window';
        faqWindow.style.position = 'fixed';
        faqWindow.style.top = '50%';
        faqWindow.style.left = '50%';
        faqWindow.style.transform = 'translate(-50%, -50%)';
        faqWindow.style.backgroundColor = '#ffffff';
        faqWindow.style.padding = '20px';
        faqWindow.style.width = '400px';
        faqWindow.style.border = '1px solid #000000';

        // Konten FAQ
        var faqContent = document.createElement('div');
        faqContent.innerHTML = `
            <h3>FAQ - Rules Sewa Mobil</h3>
            <ul>
            <li>Persyaratan Pendaftaran:</li>
            <li>a. Pengguna harus mendaftar dan memberikan informasi pribadi yang valid sebelum menggunakan layanan sewa mobil online.</li>
            <li>b. Pengguna harus menyediakan dokumen identitas resmi dan izin mengemudi yang masih berlaku.</li>
            <li>c. Penyedia jasa harus melakukan verifikasi dan validasi data pengguna untuk memastikan keabsahan informasi yang diberikan.</li>

<li>Ketentuan Pemesanan:</li>
<li>a. Pengguna harus memenuhi persyaratan usia minimum yang ditetapkan oleh penyedia jasa.</li>
<li>b. Pengguna harus memberikan informasi yang akurat tentang tanggal, waktu, dan tempat pengambilan serta pengembalian mobil.</li>
<li>c. Penyedia jasa harus mengonfirmasi ketersediaan mobil, harga sewa, dan ketentuan lainnya kepada pengguna sebelum transaksi dilakukan.</li>

<li>Pembayaran dan Pembatalan:</li>
<li>a. Pengguna harus membayar biaya sewa sesuai dengan ketentuan yang telah disepakati sebelumnya.</li>
<li>b. Penyedia jasa harus menyediakan metode pembayaran yang aman dan dapat diverifikasi.</li>
<li>c. Kebijakan pembatalan harus jelas, termasuk batas waktu pembatalan dan denda yang berlaku.</li>

<li>Kondisi dan Perawatan Mobil:</li>
<li>a. Pengguna harus menjaga mobil dalam kondisi baik selama periode penyewaan.</li>
<li>b. Pengguna harus mengembalikan mobil sesuai dengan waktu yang telah disepakati.</li>
<li>c. Penyedia jasa harus melakukan pemeriksaan awal dan akhir terhadap mobil, serta mencatat kerusakan atau kehilangan apa pun.</li>

<li>Tanggung Jawab dan Asuransi:</li>
<li>a. Pengguna harus bertanggung jawab atas kerusakan atau kehilangan yang terjadi pada mobil selama periode penyewaan.</li>
<li>b. Penyedia jasa dapat menawarkan asuransi opsional kepada pengguna untuk melindungi mereka dari kerugian finansial yang mungkin terjadi.</li>

<li>Sengketa dan Penyelesaian:</li>
<li>a. Kebijakan harus mencakup prosedur untuk penyelesaian sengketa antara pengguna dan penyedia jasa.</li>
<li>b. Penyedia jasa harus memberikan layanan pelanggan yang responsif dan membantu dalam menyelesaikan masalah yang mungkin timbul.</li>
            </ul>
            <button onclick="closeFAQ()">Close</button>
        `;

        // Menambahkan konten FAQ ke jendela FAQ
        faqWindow.appendChild(faqContent);

        // Menambahkan jendela FAQ ke body
        document.body.appendChild(faqWindow);
    }

    function closeFAQ() {
        // Menghapus jendela FAQ saat tombol Close diklik
        var faqWindow = document.getElementById('faq-window');
        faqWindow.parentNode.removeChild(faqWindow);
    }
</script>


</body>

</html>