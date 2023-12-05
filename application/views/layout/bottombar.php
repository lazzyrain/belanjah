<div class="tw-bg-white tw-h-14 tw-items-center tw-grid tw-grid-cols-5 md:tw-hidden tw-bottom-0 tw-w-[inherit] tw-px-2 tw-fixed">
    <button type="button" class="tw-flex tw-flex-col tw-items-center tw-relative tw-h-full clicked">
        <div class="tw-h-full tw-absolute tw-w-full tw-justify-center <?= getUrlBySegment(1) == '' ? 'tw-flex' : 'tw-hidden' ?>">
            <div class="tw-h-1 tw-w-full tw-absolute tw-bottom-0 tw-bg-primary"></div>
        </div>
        <div class="tw-flex tw-flex-col tw-my-auto">
            <i class="fa fa-shopping-bag tw-text-sm <?= getUrlBySegment(1) == '' ? 'tw-text-primary' : 'tw-text-black tw-opacity-60'; ?>"></i>
            <span class="tw-text-[10px] tw-opacity-50">Belanja</span>
        </div>
    </button>
    <button type="button" class="tw-flex tw-flex-col tw-items-center tw-relative tw-h-full clicked">
        <div class="tw-h-full tw-absolute tw-w-full tw-justify-center tw-hidden">
            <div class="tw-h-1 tw-w-full tw-absolute tw-bottom-0 tw-bg-primary"></div>
        </div>
        <div class="tw-flex tw-flex-col tw-my-auto">
            <i class="fa fa-bell tw-text-sm <?= getUrlBySegment(1) == '/Notifikasi' ? 'tw-text-primary' : 'tw-text-black tw-opacity-60'; ?>"></i>
            <span class="tw-text-[10px] tw-opacity-50">Notifikasi</span>
        </div>
    </button>
    <div class="tw-relative tw-flex tw-justify-center tw-h-full">
        <button type="button" class="tw-bg-primary tw-border-4 tw-border-white tw-h-20 tw-w-20 tw-rounded-full tw-absolute tw--top-2/3 clicked">
            <i class="fa fa-cart-shopping tw-text-white tw-text-2xl"></i>
        </button>
    </div>
    <button type="button" class="tw-flex tw-flex-col tw-items-center tw-relative tw-h-full clicked">
        <div class="tw-h-full tw-absolute tw-w-full tw-justify-center tw-hidden">
            <div class="tw-h-1 tw-w-full tw-absolute tw-bottom-0 tw-bg-primary"></div>
        </div>
        <div class="tw-flex tw-flex-col tw-my-auto">
            <i class="fa fa-money-bill tw-text-sm <?= getUrlBySegment(1) == '/Transaksi' ? 'tw-text-primary' : 'tw-text-black tw-opacity-60'; ?>"></i>
            <span class="tw-text-[10px] tw-opacity-50">Transaksi</span>
        </div>
    </button>
    <button type="button" class="tw-flex tw-flex-col tw-items-center tw-relative tw-h-full clicked">
        <div class="tw-h-full tw-absolute tw-w-full tw-justify-center tw-hidden">
            <div class="tw-h-1 tw-w-full tw-absolute tw-bottom-0 tw-bg-primary"></div>
        </div>
        <div class="tw-flex tw-flex-col tw-my-auto">
            <i class="fa fa-bars tw-text-sm <?= getUrlBySegment(1) == '/Lainnya' ? 'tw-text-primary' : 'tw-text-black tw-opacity-60'; ?>"></i>
            <span class="tw-text-[10px] tw-opacity-50">Lainnya</span>
        </div>
    </button>
</div>