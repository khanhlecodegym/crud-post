<!--------------------------------------
JAVASCRIPTS
--------------------------------------->
<script src="{{ asset('anchor/assets/js/vendor/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('anchor/assets/js/vendor/popper.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('anchor/assets/js/vendor/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('anchor/assets/js/functions.js')}}" type="text/javascript"></script>

{{-- Toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha256-yNbKY1y6h2rbVcQtf0b8lq4a+xpktyFc3pSYoGAY1qQ=" crossorigin="anonymous"></script>

<!-- Animation -->
<script src="{{ asset('anchor/assets/js/vendor/aos.js')}}" type="text/javascript"></script>
<noscript>
    <style>
        *[data-aos] {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
    </style>
</noscript>
<script>
    AOS.init({
        duration: 700
    });
</script>

<!-- Disable animation on less than 1200px, change value if you like -->
<script>
AOS.init({
  disable: function () {
    var maxWidth = 1200;
    return window.innerWidth < maxWidth;
  }
});
</script>

@stack('index-toastr')
