<?php $this->load->view('layout/bottombar'); ?>


</main>

<!-- General JS Scripts -->
<script src="<?= base_url(); ?>assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
<script async src="<?= base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script defer src="<?= base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
<script defer src="<?= base_url(); ?>assets/modules/moment.min.js"></script>

<?php
$this->load->view('layout/customJs/layoutJs');
$this->load->view('layout/customJs/generalJs');

// $this->load->view('layout/pwa');
?>

</body>

</html>