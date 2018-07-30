   
       
            <nav class="fixed-top site-header py-1">
                <div class="container d-flex flex-md-row">
                    <!--<a class="py-2 d-none d-md-inline-block" href="https://getbootstrap.com/docs/4.0/examples/product/#">Tour</a>
                    <a class="py-2 d-none d-md-inline-block" href="https://getbootstrap.com/docs/4.0/examples/product/#">Product</a>
                    <a class="py-2 d-none d-md-inline-block" href="https://getbootstrap.com/docs/4.0/examples/product/#">Features</a>
                    <a class="py-2 d-none d-md-inline-block" href="https://getbootstrap.com/docs/4.0/examples/product/#">Enterprise</a>
                    <a class="py-2 d-none d-md-inline-block" href="https://getbootstrap.com/docs/4.0/examples/product/#">Support</a>-->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto d-flex flex-row">
                        <!-- Authentication Links -->
                        @guest
                            <!--<a class="py-2" href="{{-- url('/') --}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="6" cy="12" r="7"></circle><circle cx="6" cy="12" r="10"></svg>
                            </a>-->
                            <div class="text-right">
                                <a class="py-2" href="{{ url('/') }}">
                                    <svg width=100 height=42>
                                        <text y=25>Registro</text>
                                    </svg>
                                    <svg width=100 height=42>
                                        <text y=25>Mis</text>
                                    </svg>
                                    <svg width=100 height=42>
                                        <text y=25>Pagos</text>
                                    </svg>
                                </a>
                            </div>
                            <li class="nav-item">
                                <a class="py-2 d-none d-md-block" href="{{ route('login') }}">{{ __('Login') }}</a>
                                <a class="px-2 d-md-none" href="{{ route('login') }}"><i class="py-2 fas fa-sign-in-alt fa-2x"></i></a>
                            </li>
                        @else
                            <div class="text-right">
                                <a class="py-2" href="{{ url('/index') }}">
                                    <svg width=300 height=42>
                                        <text y=25>RegistroMisPagos</text>
                                    </svg>
                                </a>
                            </div>
                            <li class="nav-item">
                                <a href="{{ route('app::nuevo') }}" class="nav-link mr-3"><i class="fas fa-plus mr-1"></i>Nuevo</a>
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
                        @endguest
                    </ul>
                </div>
            </nav>        
        
    