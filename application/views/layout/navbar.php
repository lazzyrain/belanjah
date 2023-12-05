<nav class="tw-w-full tw-p-3 tw-flex tw-gap-3 tw-border-b tw-bg-white tw-sticky top-0 tw-text-sm tw-z-10 dropdown-center">
    <?php $this->load->view('component/searchProduct') ?>
    <div class="tw-items-center tw-ms-auto tw-gap-6 tw-px-3 tw-w-fit tw-hidden md:tw-flex">
        <button type="button" class="tw-outline-none tw-text-lg clicked">
            <i class="fa fa-bell"></i>
        </button>
        <button type="button" class="tw-outline-none tw-text-lg clicked">
            <i class="fa fa-envelope"></i>
        </button>
    </div>
    <div class="tw-hidden md:tw-flex tw-gap-6">
        <div class="tw-flex">
            <span class="vr tw-h-3/5 tw-m-auto tw-bg-black tw-opacity-10"></span>
        </div>
        <div class="tw-flex tw-items-center">
            <div class="tw-flex tw-items-center tw-gap-3 ">
                <span>Andhika</span>
                <div class="tw-h-8 tw-w-8 tw-rounded-full tw-bg-primary"></div>
            </div>
        </div>
    </div>
</nav>