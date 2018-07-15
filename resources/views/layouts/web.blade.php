@include('layouts.parcials.head')

    <header>
        @include('layouts.parcials.header')
    </header>

    <main role="main">
    
        @yield('showcase')

        @yield('content')

    </main>
    <footer class="container py-5">   
        @include('layouts.parcials.footer')
    </footer>

@include('layouts.parcials.scripts')