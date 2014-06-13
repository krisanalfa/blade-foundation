<div class="fixed">
    <nav class="top-bar" data-topbar data-options="is_hover: false">
        <ul class="title-area">
            <li class="name">
                <h1>
                    <a href="{{ URL::site() }}">
                        <span class="logo"></span>
                        <span class="brand-logo">{{ App::getInstance()->config('navbar.title') }}</span>
                    </a>
                </h1>
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#">Menu</a>
            </li>
        </ul>

        <section class="top-bar-section">
            <ul class="left">
                @foreach(App::getInstance()->config('navbar.menus') as $title => $uri)
                    @if(! isset($uri['children']))
                        <li>
                            <a href="{{ URL::site($uri['uri']) }}">{{ @$uri['icon'] }}</i>&nbsp;&nbsp;{{ @$uri['title'] }}</a>
                        </li>
                    @else
                        <li class="has-dropdown">
                            <a href="#">{{ @$uri['icon'] }}&nbsp;&nbsp; {{ @$uri['title'] }} </a>
                            <ul class="dropdown">
                                @foreach (@$uri['children'] as $title => $uri)
                                    <li>
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
        </section>
    </nav>
</div>
