<nav>
     <div class="twelve columns header_nav">
        <!-- <h1>
            <a href="{{ URL::site() }}">
                <span class="logo"></span>
                <span class="brand-logo">{{ App::getInstance()->config('navbar.title') }}</span>
            </a>
        </h1> -->
        <div class="navigation">
            <ul id="menu-header" class="nav-bar horizontal">
                @foreach(App::getInstance()->config('navbar.menus') as $title => $uri)
                    @if(! isset($uri['children']))
                        <li>
                            <a href="{{ URL::site($uri['uri']) }}">{{ @$uri['icon'] }}</i>&nbsp;&nbsp;{{ @$uri['title'] }}</a>
                        </li>
                    @else
                        <a href="#" class="flyout-toggle"></a>
                        <li class="has-flyout">
                            <a href="#">{{ @$uri['icon'] }}&nbsp;&nbsp; {{ @$uri['title'] }} </a>
                            <ul class="flyout">
                                @foreach (@$uri['children'] as $title => $uri)
                                    <li class="has-flyout">
                                        <a href="{{ URL::site($uri['uri']) }}">
                                            {{ @$uri['icon'] }}&nbsp;&nbsp;{{ @$uri['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
          </div>
      </div>
</nav>
