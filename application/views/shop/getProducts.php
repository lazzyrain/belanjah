<div class="tw-grid tw-grid-cols-2 sm:tw-grid-cols-3 lg:tw-grid-cols-4 xl:tw-grid-cols-6 md:tw-w-5/6 tw-m-auto tw-gap-3 tw-p-3 tw-mb-14">
    <?php for ($i = 0; $i < 80; $i++) { ?>
        <div class="tw-bg-white tw-h-72 tw-flex tw-flex-col tw-rounded-lg tw-overflow-hidden tw-shadow tw-cursor-pointer md:hover:tw--translate-y-1">
            <div class="tw-h-1/2 tw-flex tw-justify-center">
                <img src="https://source.unsplash.com/random/600x600?food=<?= $i; ?>" loading="lazy" alt="https://source.unsplash.com/random/600x600?food=<?= $i; ?>" class="tw-object-fill tw-w-full tw-h-full">
            </div>
            <div class="tw-flex tw-flex-col tw-p-2 tw-gap-1 tw-text-sm">
                <span class="tw-line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                <span class="tw-font-bold tw-truncate">Rp<?= number_format('42500', 0, ',', '.'); ?></span>
                <div class="tw-text-[10px] tw-font-light tw-flex tw-items-center tw-gap-1">
                    <i class="fa fa-store tw-text-primary"></i>
                    <span class="tw-line-clamp-1">Toko Marketplace Sejahtera Merana Tertata</span>
                </div>
            </div>
        </div>
    <?php } ?>
</div>