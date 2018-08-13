   
       
            <nav class="fixed-top site-header py-1">
                
                    <!--<a class="py-2 d-none d-md-inline-block" href="https://getbootstrap.com/docs/4.0/examples/product/#">Tour</a>-->

                    <!-- Right Side Of Navbar -->
                    <div class="row">
                        <!-- Authentication Links -->
                        @guest      
                            <div class="col-4 col-md-4 offset-md-1">
                                <a class="my-2 ml-4" href="{{ url('/') }}">
                                    <svg width=120 height=42>
                                        <text y=25>RegistroMisPagos</text>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-4 offset-4 col-md-4 offset-md-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="py-2 d-none d-md-inline-block" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        <a class="px-2 d-md-none" href="{{ route('login') }}"><i class="py-2 fas fa-sign-in-alt fa-2x"></i></a>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div class="col-1 col-md-4 offset-md-1">
                                <a class="my-2 mx-3" href="{{ url('/index') }}">
                                    <svg width=120 height=42>
                                        <text y=25>RegistroMisPagos</text>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-6 offset-4 col-md-4 offset-md-3">
                                <ul class="navbar-nav d-flex flex-row">
                                    <li class="nav-item">
                                        <a href="{{ route('app::nuevo') }}" class="nav-link mr-5 d-none d-md-inline-block">Nuevo</a>
                                        <a href="{{ route('app::nuevo') }}" class="nav-link mr-5 d-md-none"><i class="fas fa-plus mr-1 fa-lg"></i></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endguest
                    </div>
            </nav>        
        
    