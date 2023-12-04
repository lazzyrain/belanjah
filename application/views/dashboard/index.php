<div class="tw-grid tw-grid-cols-2 md:tw-grid-cols-6 md:tw-w-5/6 tw-m-auto tw-gap-3 tw-p-3 tw-mb-14">
    <?php for ($i = 0; $i < 50; $i++) { ?>
        <div class="tw-bg-white tw-h-72 tw-flex tw-flex-col tw-rounded-lg tw-overflow-hidden tw-shadow">
            <div class="tw-h-1/2 tw-flex tw-justify-center">
                <img src="<?= base_url('assets/webp/shopping-basket.webp'); ?>" alt="shopping" class="tw-object-contain tw-scale-90">
            </div>
            <div class="tw-flex tw-flex-col tw-p-2 tw-gap-1 tw-text-sm">
                <span class="tw-line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                <span class="tw-font-bold">Rp12.000</span>
            </div>
        </div>
    <?php } ?>
</div>