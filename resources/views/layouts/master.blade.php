<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        @include ('includes.styles')
        @include ('includes.scripts')
    </head>
    <body>    	
        <header>
            @include ('includes.navbar')
        </header>
    	<!-- Content -->
    	<div class="container">
    	<div class="spacing"></div>
            @yield ('content')
    	</div>
    <!-- Footer -->
    <footer>
        @include ('includes.footer')
    </footer>   	
    </body>
</html>