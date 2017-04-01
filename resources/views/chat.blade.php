
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="css/app.css">
    {{-- <link rel="author" href="humans.txt"> --}}
</head>
<body>
 <h1>chatbox</h1>   
 <example></example>
 <script src="{{mix('js/app.js')}}" charse="utf-8"></script>
 <script>
     window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</body>
</html>