<!-- PWA -->
<script>
    var BASE_URL = '<?= base_url() ?>';
    document.addEventListener('DOMContentLoaded', init, false);

    function init() {
        if ('serviceWorker' in navigator && navigator.onLine) {
            navigator.serviceWorker.register(BASE_URL + 'service-worker-portal-sefong.js')
                .then((reg) => {
                    console.log('Selamat datang di Portal Sefong5 🚀');
                }, (err) => {
                    console.error('Selamat datang di Portal Sefong5 🚀');
                });
        }
    }

    // let deferredPrompt; // Allows to show the install prompt
    // const installButton = document.getElementById("install_button");

    // window.addEventListener("beforeinstallprompt", e => {
    //     // console.log("beforeinstallprompt fired");

    //     if (localStorage.getItem('portal-sefong5') != 1) {
    //         $('#appReady').offcanvas('show')
    //     }
    //     // Prevent Chrome 76 and earlier from automatically showing a prompt
    //     e.preventDefault();
    //     // Stash the event so it can be triggered later.
    //     deferredPrompt = e;
    //     // Show the install button
    //     installButton.hidden = false;
    //     installButton.addEventListener("click", installApp);
    // });

    // function installApp() {
    //     // Show the prompt
    //     deferredPrompt.prompt();
    //     installButton.disabled = true;

    //     // Wait for the user to respond to the prompt
    //     deferredPrompt.userChoice.then(choiceResult => {
    //         if (choiceResult.outcome === "accepted") {
    //             console.log("PWA setup accepted");
    //             installButton.hidden = true;
    //             $('#appReady').offcanvas('hide')
    //         } else {
    //             console.log("PWA setup rejected");
    //         }
    //         installButton.disabled = false;
    //         deferredPrompt = null;
    //     });
    //     window.addEventListener("appinstalled", evt => {
    //         console.log("appinstalled fired", evt);
    //     });
    // }

    // $(document).on('click', '#later_install_button', function() {
    //     localStorage.setItem('portal-sefong5', 1)
    // })

    console.log('%c Portal Sefong5!', 'font-weight: bold; font-size: 50px;color: #E29B59;');

    // if (window.navigator.onLine) {
    //     console.log('%c Online', 'font-weight: bold; font-size: 30px;color: #198754;');
    // } else {
    //     console.log('%c Offline', 'font-weight: bold; font-size: 30px;color: #EE3E58;');
    //     $(document).ready(function() {
    //         $('#offlineModal').modal('show')
    //     })
    // }
</script>