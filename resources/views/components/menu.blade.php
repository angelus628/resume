<!-- header
================================================== -->
<header>
    <div class="row">
        <div class="top-bar">
            <a class="menu-toggle" href="#"><span>Menu</span></a>

            <div class="logo">
                <a href="{{ URL::current() }}">@lang('menu.menu')</a>
            </div>

            <nav id="main-nav-wrap">
                <ul class="main-navigation">
                    <li class="current"><a class="smoothscroll"  href="#intro" title="">@lang('menu.home')</a></li>
                    <li><a class="smoothscroll"  href="#about" title="">@lang('menu.about')</a></li>
                    <li><a class="smoothscroll"  href="#resume" title="">@lang('menu.resume')</a></li>
                    <!-- <li><a class="smoothscroll"  href="#portfolio" title="">@lang('menu.portfolio')</a></li> -->
                    <li><a class="smoothscroll"  href="#services" title="">@lang('menu.services')</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="">@lang('menu.contact')</a></li>
                    <li><hr /></li>
                    <li><a href="{{ URL::to('/es') }}" title="">Español</a></li>
                    <li><a href="{{ URL::to('/en') }}" title="">English</a></li>
                </ul>
            </nav>
        </div> <!-- /top-bar -->
    </div> <!-- /row -->
</header> <!-- /header -->
