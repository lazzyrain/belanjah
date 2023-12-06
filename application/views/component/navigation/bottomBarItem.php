<button type="button" class="sef-btn-bottom-menu tw-flex tw-flex-col tw-items-center tw-relative tw-h-full" aria-label="<?= $label; ?>" sef-target-url="<?= $url; ?>">
    <div class="tw-h-full tw-absolute tw-w-full tw-justify-center <?= getUrlBySegment(1) == $url ? 'tw-flex' : 'tw-hidden' ?>">
        <div class="tw-h-1 tw-w-full tw-absolute tw-bottom-0 tw-bg-primary"></div>
    </div>
    <div class="tw-flex tw-flex-col tw-my-auto clicked">
        <i class="fa <?= $icon; ?> <?= getUrlBySegment(1) == $url ? 'tw-text-primary tw-text-2xl' : 'tw-text-black tw-opacity-60 tw-text-sm'; ?>"></i>
        <span class="tw-text-[10px] tw-opacity-50 <?= getUrlBySegment(1) == $url ? 'tw-hidden' : 'tw-flex' ?>"><?= $label; ?></span>
    </div>
</button>