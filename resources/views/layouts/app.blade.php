<html>
<head>
    <title>@yield('title')</title>
    
    @section('stylesheets')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">
    @show

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>
@show


    @yield('script')
</head>
<body>
    @section('sidebar')
    This is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>