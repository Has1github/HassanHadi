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
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />
  @livewireStyles
</head>
<body>
    {{$slot}}
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
  @include('includes/footer')
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <script src="../path/to/flowbite/dist/flowbite.js"></script>
  @livewireScripts
</body>
</html>