<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
    crossorigin="anonymous"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-GBZ3SGGX85");
</script>
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
</script>
<!-- End Google Tag Manager -->


<!-- js -->
<script src="{{ asset('backend') }}/vendors/scripts/core.js"></script>
<script src="{{ asset('backend') }}/vendors/scripts/script.min.js"></script>
<script src="{{ asset('backend') }}/vendors/scripts/process.js"></script>
<script src="{{ asset('backend') }}/vendors/scripts/layout-settings.js"></script>

<script src="{{ asset('backend') }}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<!-- buttons for Export datatable -->
<script src="{{ asset('backend') }}/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
{{-- <script src="{{ asset('backend') }}/src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="{{ asset('backend') }}/src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/src/plugins/datatables/js/vfs_fonts.js"></script> --}}
<!-- Datatable Setting js -->
<script src="{{ asset('backend') }}/vendors/scripts/datatable-setting.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
</script>

<script>
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has($msg))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session({$msg}) }}");
        @endif
    @endforeach
</script>

<script src="{{ asset('') }}/custom_js/read.js"></script>
@stack('script')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
        style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->