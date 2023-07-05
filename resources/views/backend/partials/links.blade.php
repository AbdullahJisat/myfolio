<!-- Site favicon -->
{{--
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend') }}/vendors/images/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend') }}/vendors/images/favicon-32x32.png" /> --}}
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('settings') }}/icon.ico" />

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/vendors/styles/core.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/vendors/styles/icon-font.min.css" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend') }}/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend') }}/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend') }}/src/plugins/datatables/css/responsive.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/vendors/styles/style.css" />

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@stack('css')