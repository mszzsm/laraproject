<!-- resources/views/layouts/master.blade.php -->
<html>
    <head>
        <title>My Site | @yield('title', 'Home Page')</title>
    </head>
<body>
    <div class="container">
    @yield('content')
    </div>
    @section('footerScripts')
    <script src="app.js">
    @show
    </body>
</html>