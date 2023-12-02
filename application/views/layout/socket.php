<script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>

<script>
    const socket = io("https://ws.lazzyrain.com/");

    socket.on("connect", () => {
        console.log('Socket connected: ', socket.id);
    });

    function send(message) {
        let data = {
            employee: `<?= employee()['id_karyawan']; ?>`,
            application_id: '1',
            message: message
        }
        socket.emit('portal_message', JSON.stringify(data));
    }

    socket.on("disconnect", () => {
        console.log('Socket disconnected! ', socket.id);
    });

    socket.on('response_portal', (message) => {
        let data = JSON.parse(message);
        showToast('info', data.from, data.text);
    })

    socket.on('error_portal_message', (message) => {
        console.log(message)
    })


</script>