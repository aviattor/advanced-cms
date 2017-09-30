<nav class="nav has-shadow">

    <div class="container">

        <div class="nav-left">
            <a class="nav-item" href="{{ route('home') }}">
                <img src="{{ asset('images/Coding-Patterns-Logo-1.png') }}" alt="CodingPatterns Logo">
            </a>


            <a href="" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="" class="nav-item is-tab is-hidden-mobile">Discuss</a>
            <a href="" class="nav-item is-tab is-hidden-mobile">Share</a>
        </div>

        <div class="nav-right" style="overflow: visible">

            @auth

                <button class="dropdown nav-item is-tab is-aligned-right">
                    Hey {{ Auth::user()->name }} <span class="icon"><i class="fa  fa-caret-down"></i></span>

                    <ul class="dropdown-menu">

                        <li>
                            <a href="">
                                <span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-10"></i></span>
                                Profile
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <span class="icon"><i class="fa fa-fw fa-bell m-r-10"></i></span>
                                Notifications
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <span class="icon"><i class="fa fa-fw fa-cog m-r-10"></i></span>
                                Settings
                            </a>
                        </li>

                        <li class="separator"></li>

                        <li>
                            <a href="">
                                <span class="icon"><i class="fa fa-fw fa-sign-out m-r-10"></i></span>
                                Logout
                            </a>
                        </li>


                    </ul>
                </button>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="nav-item is-tab">Login</a>
                <a href="{{ route('register') }}" class="nav-item is-tab">Join Us</a>
            @endguest

        </div>
    </div>

</nav>
