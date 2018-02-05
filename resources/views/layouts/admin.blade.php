<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="{{ App::getLocale() }}"> <!--<![endif]-->
<head>

    @component('components.header-bootstrap')
    @endcomponent

</head>

<body id="top">
    @yield('content')

    @component('components.footer-bootstrap')
    @endcomponent
</body>

</html>
