@include('layouts.parcials.head')
    <header>
        @include('layouts.parcials.header')
    </header>
    <main class="container mt-5 pt-3">
        <article class="row">
            <section class="col-sm-10">
                @yield('content')
            </section>
            <section class="col-sm-2">
                @yield('helper')
            </section>
        </article>
    </main>
    <footer>
        
    </footer>
@include('layouts.parcials.scripts')
