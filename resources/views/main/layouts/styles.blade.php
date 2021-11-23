<!-- CSS ================================================== -->
<link rel="stylesheet" media="screen" href="{{ asset('assets/fonts/material-icons/material-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/embaixada/css/layout.css') }}">
<link rel="stylesheet" href="{{ asset('assets/embaixada/css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('assets/embaixada/css/internas.css') }}">
<link rel="stylesheet" href="{{ asset('assets/embaixada/css/lightbox.css') }}">
<link rel="stylesheet" href="{{ asset('assets/embaixada/css/sss.css') }}">
<link rel="stylesheet" href="{{ asset('assets/embaixada/css/css3.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/tacticweb/styles/footer.css') }}" type="text/css">

<!-- Favicons ================================================== -->
<link rel="shortcut icon" href="favicon.png">
{{-- <link rel="stylesheet" href="{{ asset('assets/styles/teste.less') }}" type="text/css"> --}}
{{-- <link rel="stylesheet/less" type="text/css" href="styles.less" /> --}}
{{-- <script src="//cdn.jsdelivr.net/npm/less@4.1.1" ></script> --}}
<style>
    .clearfix {
        clear: both;
    }

    .geral {
        overflow: unset;
    }

    .menu_categs {
        overflow: unset;
        margin-top: 0;
        padding-top: 50px;
    }

    .menu_categs ul {
        width: 200px;
        overflow: unset;
    }

    .menu_categs ul li {
        position: relative;
        margin-bottom: 2px;
    }

    .menu_categs ul li a {
        padding: 10px;
        display: block;
        background: #454545;
        transition: all 200ms ease-in-out;
        font-size: 12px;
        text-transform: uppercase;
    }

    .menu_categs ul a:hover {
        background: #656565
    }

    .menu_categs ul li:hover>a {
        background: #545454;
        padding-left: 15px;
    }

    .menu_categs ul li a i {
        position: absolute;
        right: 10px;
        padding: 0;
        top: 0;
        bottom: 0;
        line-height: 2.5;
        font-size: 15px;
    }

    .menu_categs ul li ul {
        position: absolute;
        top: 0;
        left: calc(100% - 0px);
        display: none;
    }

    .menu_categs ul li:hover>ul {
        display: block;
    }

</style>
