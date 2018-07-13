@include('services.templates.partials.header')
    <main class="container py-4">
        <article class="row">
            <section class="col-sm-10">
                @yield('content')
            </section>
            <section class="col-sm-2">
                @yield('helper')
            </section>
        </article>
    </main>
@include('services.templates.partials.footer')