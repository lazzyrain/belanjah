<div class="tw-bg-white tw-h-14 tw-items-center tw-grid tw-grid-cols-5 md:tw-hidden tw-bottom-0 tw-w-[inherit] tw-px-2 tw-fixed">

    <?php
    $this->load->view(
        'component/navigation/bottomBarItem',
        [
            'label' => 'Belanjah',
            'url' => '',
            'icon' => 'fa-shopping-bag'
        ]
    );
    $this->load->view(
        'component/navigation/bottomBarItem',
        [
            'label' => 'Notifikasi',
            'url' => 'notification',
            'icon' => 'fa-bell'
        ]
    );
    ?>

    <div class="tw-relative tw-flex tw-justify-center tw-h-full">
        <button type="button" class="sef-btn-cart-menu tw-bg-primary tw-border-4 tw-border-white tw-h-20 tw-w-20 tw-rounded-full tw-absolute tw--top-2/3 clicked" aria-label="Cart">
            <i class="fa fa-cart-shopping tw-text-white tw-text-2xl"></i>
        </button>
    </div>

    <?php
    $this->load->view(
        'component/navigation/bottomBarItem',
        [
            'label' => 'Transaksi',
            'url' => 'transaction',
            'icon' => 'fa-money-bill'
        ]
    );
    $this->load->view(
        'component/navigation/bottomBarItem',
        [
            'label' => 'Lainnya',
            'url' => 'other',
            'icon' => 'fa-bars'
        ]
    );
    ?>
</div>