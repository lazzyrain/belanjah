<div class="tw-w-full tw-overflow-hidden tw-flex tw-items-center tw-h-10 tw-gap-3">
    <div class="tw-flex tw-items-center tw-w-fit md:tw-w-full">
        <span class="tw-text-primary tw-font-bold tw-text-xl md:tw-text-2xl">Belanjah</span>
    </div>
    <div class="tw-flex tw-pl-3 tw-gap-3 tw-items-center tw-h-full tw-w-full tw-rounded-lg tw-border tw-overflow-hidden" data-bs-toggle="dropdown" onclick="$(this).find('input').focus()" id="dropdownSearch">
        <i class="fa fa-magnifying-glass tw-opacity-25"></i>
        <input type="text" class="tw-outline-none tw-w-full tw-h-full focus:tw-w-full" placeholder="Cari produk...">
    </div>
    <ul class="dropdown-menu tw-w-full md:tw-w-1/4 tw-border-0 tw-text-sm tw-shadow tw-p-3">
        <div class="tw-flex tw-flex-col tw-gap-3">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="tw-flex tw-gap-3 tw-items-center">
                    <i class="fa fa-magnifying-glass tw-opacity-25"></i>
                    <span>Kopi hitam</span>
                </div>
            <?php } ?>
            <span class="tw-font-bold tw-text-xs">Toko</span>
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="tw-flex tw-gap-3 tw-items-center">
                    <i class="fa fa-store tw-opacity-25"></i>
                    <span>Marketplace</span>
                </div>
            <?php } ?>
        </div>
    </ul>
</div>