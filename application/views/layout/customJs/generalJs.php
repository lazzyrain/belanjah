<script>
    /* Master component */
    $(document).on('click', '.sef-btn-bottom-menu', function() {
        const i = $(this);
        const targetUrl = $(i).attr('sef-target-url');

        console.log(targetUrl)
    });
</script>