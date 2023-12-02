<!-- General -->
<script>
    var BASE_URL = '<?= base_url(); ?>';
    var ajaxRequest;

    /* URL Function */
    function changeUrl(title, url) {
        let obj = {
            title,
            url
        };
        history.pushState(obj, obj.title, obj.url);
        $('title').html(title + ` <?= titleName(); ?>`);
    }

    const getParamsObject = (data) => {
        const params = new URLSearchParams(data);
        const formObject = {};
        for (const pair of params.entries()) {
            formObject[pair[0]] = pair[1];
        }
        return formObject;
    }

    const getUrlByParam = (param, windowUrl = window.location.href) => {
        const url = new URL(windowUrl);
        const value = url.searchParams.get(param);
        return value;
    }

    const getUrlSegment = (index) => {
        const url = window.location.href;
        const splice = url.split('/').splice(2);
        const segment = [splice[0] + '/' + splice[1], splice[2]];
        return segment[index];
    }

    window.addEventListener('popstate', function(event) {
        location.reload();
    });

    /* Touch Blok Function */
    (function() {
        if (typeof EventTarget !== "undefined") {
            let func = EventTarget.prototype.addEventListener;
            EventTarget.prototype.addEventListener = function(type, fn, capture) {
                this.func = func;
                if (typeof capture !== "boolean") {
                    capture = capture || {};
                    capture.passive = false;
                }
                this.func(type, fn, capture);
            };
        };
    }());

    /* Rupiah Format Function */
    function formatRupiah(bilangan) {
        var reverse = bilangan.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan
    }

    /* Toast Function */
    function showToast({balloon= false, type = 'info', title, message, position = 'topRight', timeout = 2000}) {
        switch (type) {
            case 'info':
                iziToast.info({
                    icon: 'fa fa-circle-info',
                    balloon,
                    timeout,
                    title,
                    message,
                    position,
                    timeout
                });
                break;
            case 'success':
                iziToast.success({
                    icon: 'fa fa-check',
                    balloon,
                    timeout,
                    title,
                    message,
                    position,
                    timeout
                });
                break;
            case 'warning':
                iziToast.warning({
                    icon: 'fa fa-triangle-exclamation',
                    balloon,
                    timeout,
                    title,
                    message,
                    position,
                    timeout
                });
                break;
            case 'error':
                iziToast.error({
                    icon: 'fa fa-xmark',
                    balloon,
                    timeout,
                    title,
                    message,
                    position,
                    timeout
                });
                break;
        }
    };

    /* Select2 Function */
    function initializeSelect2(targetElement = '.select2') {
        $(targetElement).select2();
        initializeSelect2Icon();
    }

    function initializeSelect2Icon() {
        $('.select2-selection__arrow').html('<i class="fa fa-caret-down tw-text-md"></i>');
    }

    $(document).on('select2:close', () => {
        $('.select2-selection__arrow i').attr('class', 'fa fa-caret-down tw-text-md');
    })

    $(document).on('select2:open', () => {
        $('.select2-selection__arrow i').attr('class', 'fa fa-caret-up tw-text-md');
        document.querySelector('.select2-search__field').focus();
    })

    $('.select2-selection__arrow').html('<i class="fa fa-caret-down tw-text-md"></i>');

    /* Number and Time Function */
    const getTotalTime = (startTime, endTime) => {
        let waktuAwal = moment(startTime, 'HH:mm');
        let waktuAkhir = moment(endTime, 'HH:mm');

        let selisih = waktuAkhir.diff(waktuAwal);

        let jam = moment.duration(selisih).hours();
        let menit = moment.duration(selisih).minutes();
        let result = {
            jam,
            menit
        };
        return result;
    }

    const getPercentageTotalTime = (maxHour, totalTime) => {
        let hour = totalTime.jam + (totalTime.menit / 60);
        let result = (hour / maxHour) * 100;
        return result.toFixed(2);
    }

    $(document).on('keyup', '.sef-number-entry', function() {
        var val = $(this).val();
        if (isNaN(val)) {
            val = val.replace(/[^0-9\.]/g, '');
            if (val.split('.').length > 2)
                val = val.replace(/\.+$/, "");
        }
        $(this).val(val);
    });
</script>
<!-- Akhir General -->