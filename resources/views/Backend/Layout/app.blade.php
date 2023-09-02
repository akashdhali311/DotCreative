<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<title>@yield('title')</title>
<!-- Mirrored from html.modernwebtemplates.com/dotcreative/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 17:27:14 GMT -->
<head>
    @include('Backend.Layout.common-head')
</head> 
<body> 
    @include('Backend.Layout.header') 

    @yield('content')
    @include('Backend.Layout.footer')
    
</body> 
<!-- Mirrored from html.modernwebtemplates.com/dotcreative/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 17:31:46 GMT -->
</html>