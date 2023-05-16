@include('includes.navbar')
<div id="app">
    <main class="py-4 container">
        @include('includes.messages')
        @yield('content')
    </main>
</div>
