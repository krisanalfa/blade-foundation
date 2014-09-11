<nav>
     <div class="twelve columns header-nav">
        <div class="navigation">
            <ul id="menu-header" class="nav-bar horizontal">
                <li>
                    <a href="{{ URL::site() }}" class="nav-title">
                        <span class="logo"></span>
                        <span class="brand-logo">{{ App::getInstance()->config('navbar.title') }}</span>
                    </a>
                </li>
                @foreach(App::getInstance()->config('navbar.menus') as $uri)
                    @if(! isset($uri['children']))
                        <li>
                            <a href="{{ URL::site($uri['uri']) }}">{{ @$uri['icon'] }}</i>&nbsp;&nbsp;{{ @$uri['title'] }}</a>
                        </li>
                    @else
                        <a href="#" class="flyout-toggle"></a>
                        <li class="has-flyout">
                            <a href="#">{{ @$uri['icon'] }}&nbsp;&nbsp; {{ @$uri['title'] }} </a>
                            <ul class="flyout">
                                @foreach (@$uri['children'] as $uri)
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
