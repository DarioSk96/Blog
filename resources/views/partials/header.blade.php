<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
<a class='navbar-brand' href="{{ route('welcome')}} "><strong><em><big><i>BlogeraŠ</i></big></em></strong></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="collapse" data-target="#navbarsExample09" aria-expanded="false" aria-label="Toggle Navigation">

<span class="navbar-tpggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle"  id="dropdown09" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">User Account</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    @guest
                    <a class="dropdown-item" href="{{ route('register') }}">Sign up</a>
                    <a class="dropdown-item" href="{{ route('login') }}">Sign in</a>
                    @else
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
            </li>
        </ul>
    </div>
</nav>