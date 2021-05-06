<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>App - @yield('title')</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
<!-- Place favicon.ico in the root directory -->

<!-- ========================= CSS here ========================= -->
<link rel="stylesheet" href="{{asset('assets/login/css/base.css')}}" />
<link rel="stylesheet" href="{{asset('assets/login/css/main.css')}}" />

</head>

<body class="vh-100" style="background-image: linear-gradient(0deg, #eeb4b3ff, #c179b9ff, #a42cd6ff);">
@yield('content')
<!-- ========================= JS here ========================= -->
<script src="{{asset('asset/login/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    
</body>

</html>