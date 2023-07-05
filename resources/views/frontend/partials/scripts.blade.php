<script src="{{ asset('frontend') }}/js/modernizr.min.js"></script>

<script src="{{ asset('frontend') }}/js/jquery.js"></script>
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/js/waypoints.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.appear.js"></script>
<script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.owl-filter.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.easypiechart.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.matchHeight-min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.counterup.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.validate.js"></script>
<script src="{{ asset('frontend') }}/js/parallaxie.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ asset('frontend') }}/js/snazzy-info-window.min.js"></script>
<script src="{{ asset('frontend') }}/js/general.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if (Session::has('success'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
