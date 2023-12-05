<script>
    class ShopJS {
        index()
        {
            $.ajax({
                url: '<?= base_url('shop/getProducts'); ?>',
                success: response => {
                    $('#product-content').html(response);
                },
                error: xhr => {
                    showToast({
                        type: 'error',
                        title: `${xhr.status}`,
                        message: `${xhr.statusText}`
                    });
                }
            });
        }
    }

    const shopJs = new ShopJS();
</script>