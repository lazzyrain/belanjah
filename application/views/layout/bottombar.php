<div class="tw-bg-white tw-h-14 tw-items-center tw-grid tw-grid-cols-5 md:tw-hidden tw-bottom-0 tw-w-[inherit] tw-px-2 tw-fixed">
    <button type="button" class="sef-btn-bottom-menu tw-flex tw-flex-col tw-items-center tw-relative tw-h-full" sef-target-url="">
        <div class="tw-h-full tw-absolute tw-w-full tw-justify-center <?= getUrlBySegment(1) == '' ? 'tw-flex' : 'tw-hidden' ?>">
            <div class="tw-h-1 tw-w-full tw-absolute tw-bottom-0 tw-bg-primary"></div>
        </div>
        <div class="tw-flex tw-flex-col tw-my-auto clicked">
            <i class="fa fa-shopping-bag <?= getUrlBySegment(1) == '' ? 'tw-text-primary tw-text-2xl' : 'tw-text-black tw-opacity-60 tw-text-sm'; ?>"></i>
            <span class="tw-text-[10px] tw-opacity-50 <?= getUrlBySegment(1) == '' ? 'tw-hidden' : 'tw-flex' ?>">Belanja</span>
        </div>
    </button>
    <button type="button" class="sef-btn-bottom-menu tw-flex tw-flex-col tw-items-center tw-relative tw-h-full" sef-target-url="notification">
        <div class="tw-h-full tw-absolute tw-w-full tw-justify-center <?= getUrlBySegment(1) == 'notification' ? 'tw-flex' : 'tw-hidden' ?>">
            <div class="tw-h-1 tw-w-full tw-absolute tw-bottom-0 tw-bg-primary"></div>
        </div>
        <div class="tw-flex tw-flex-col tw-my-auto clicked">
            <i class="fa fa-bell <?= getUrlBySegment(1) == 'notification' ? 'tw-text-primary tw-text-2xl' : 'tw-text-black tw-opacity-60 tw-text-sm'; ?>"></i>
            <span class="tw-text-[10px] tw-opacity-50 <?= getUrlBySegment(1) == 'notification' ? 'tw-hidden' : 'tw-flex' ?>">Notifikasi</span>
        </div>
    </button>
    <div class="tw-relative tw-flex tw-justify-center tw-h-full">
        <button type="button" class="sef-btn-cart-menu tw-bg-primary tw-border-4 tw-border-white tw-h-20 tw-w-20 tw-rounded-full tw-absolute tw--top-2/3">
            <i class="fa fa-cart-shopping tw-text-white tw-text-2xl"></i>
        </button>
    </div>
    <button type="button" class="sef-btn-bottom-menu tw-flex tw-flex-col tw-items-center tw-relative tw-h-full" sef-target-url="transaction">
        <div class="tw-h-full tw-absolute tw-w-full tw-justify-center <?= getUrlBySegment(1) == 'transaction' ? 'tw-flex' : 'tw-hidden' ?>">
            <div class="tw-h-1 tw-w-full tw-absolute tw-bottom-0 tw-bg-primary"></div>
        </div>
        <div class="tw-flex tw-flex-col tw-my-auto clicked">
            <i class="fa fa-money-bill <?= getUrlBySegment(1) == 'transaction' ? 'tw-text-primary tw-text-2xl' : 'tw-text-black tw-opacity-60 tw-text-sm'; ?>"></i>
            <span class="tw-text-[10px] tw-opacity-50 <?= getUrlBySegment(1) == 'transaction' ? 'tw-hidden' : 'tw-flex' ?>">Transaksi</span>
        </div>
    </button>
    <button type="button" class="sef-btn-bottom-menu tw-flex tw-flex-col tw-items-center tw-relative tw-h-full" sef-target-url="other">
        <div class="tw-h-full tw-absolute tw-w-full tw-justify-center <?= getUrlBySegment(1) == 'other' ? 'tw-flex' : 'tw-hidden' ?>">
            <div class="tw-h-1 tw-w-full tw-absolute tw-bottom-0 tw-bg-primary"></div>
        </div>
        <div class="tw-flex tw-flex-col tw-my-auto clicked">
            <i class="fa fa-bars <?= getUrlBySegment(1) == 'other' ? 'tw-text-primary tw-text-2xl' : 'tw-text-black tw-opacity-60 tw-text-sm'; ?>"></i>
            <span class="tw-text-[10px] tw-opacity-50 <?= getUrlBySegment(1) == 'other' ? 'tw-hidden' : 'tw-flex' ?>">Lainnya</span>
        </div>
    </button>
</div>