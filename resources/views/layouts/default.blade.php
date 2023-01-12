<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/cdn-cgi/apps/head/DqVMH-M0pr135Hmm3fyPy9qF_Ys.js"></script>
    <script src="/cdn-cgi/apps/body/KSl4Cj8-mTMDMBf5mgIkZFjPJUI.js"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}?_v={{ env('ASSETS_VER') }}">
    <link rel="stylesheet" href="{{ url('assets/css/header.css') }}?_v={{ env('ASSETS_VER') }}">
    <link rel="stylesheet" href="{{ url('assets/css/footer.css') }}?_v={{ env('ASSETS_VER') }}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}?_v={{ env('ASSETS_VER') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css?_v={{ env('ASSETS_VER') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    @yield('head', '')
</head>
<body>
<x-common.header/>
<x-common.mega-menu/>
<div id="app-basic">
    @yield('content', '')
</div>
<x-common.footer :page="'home'"/>
@yield('js', '')
</body>
</html>
