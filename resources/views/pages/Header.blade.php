<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto">Reve<span>al</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#body">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">🌍</a>
                    <ul>
{{--                        <li><a href="#">Drop Down 1</a></li>--}}
{{--                        <li><a href="#">Drop Down 3</a></li>--}}
{{--                        <li><a href="#">Drop Down 4</a></li>--}}
{{--                        <li><a href="#">Drop Down 5</a></li>--}}
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
