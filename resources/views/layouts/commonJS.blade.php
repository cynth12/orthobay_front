<!-- jQuery debe estar primero -->
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- ScrollToFixed (inmediatamente después de jQuery) -->
<script src="{{ asset('assets/js/jquery-scrolltofixed-min.js') }}"></script>

<!-- Luego los demás plugins -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nivo.slider.pack.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/js/jquery.knob.js') }}"></script>
<script src="{{ asset('assets/js/BeerSlider.js') }}"></script>
<script src="{{ asset('assets/js/theme-pluginjs.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/ajax-mail.js') }}"></script>

<!-- Venobox (debe ir después de jQuery también) -->
<script src="{{ asset('assets/js/venobox.min.js') }}"></script>

<!-- Tu JS personalizado -->
<script src="{{ asset('assets/js/theme.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        new VenoBox({
            selector: '.venobox',
            autoplay: true
        });
    });
</script>









