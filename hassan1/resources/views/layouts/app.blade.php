{{-- <html>
<head>

    @livewireStyles
</head>
<body>
    {{$slot}}
 

 
    @livewireScripts
</body>
</html> --}}
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{$slot}}
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
</body>
</html>