<div class="tw-bg-white tw-h-14 tw-items-center tw-grid tw-grid-cols-3 md:tw-hidden tw-bottom-0 tw-w-[inherit] tw-fixed">
    <button type="button" class="tw-flex tw-flex-col tw-items-center clicked">
        <i class="fa fa-shopping-bag tw-text-lg tw-my-auto"></i>
        <span class="tw-text-[10px] tw-opacity-50">Belanja</span>
    </button>
    <div class="tw-relative tw-flex tw-justify-center tw-h-full">
        <button type="button" class="tw-bg-primary tw-border-4 tw-border-white tw-h-20 tw-w-20 tw-rounded-full tw-absolute tw--top-2/3 clicked">
            <i class="fa fa-cart-shopping tw-text-white tw-text-2xl"></i>
        </button>
    </div>
    <button type="button" class="tw-flex tw-flex-col tw-items-center clicked">
        <i class="fa fa-bars tw-text-lg tw-my-auto"></i>
        <span class="tw-text-[10px] tw-opacity-50">Lainnya</span>
    </button>
</div>


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