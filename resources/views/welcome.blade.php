<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />


  <!-- Styles -->

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @livewireStyles

</head>

<body class="antialiased">

  <x-nav />

  <div class="max-w-7xl mx-auto p-6 lg:p-8 z-0">

    <x-content />

      <br>

    <x-card />

      <br>

    <div  class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">
      
      <x-login />

      <x-card />

      <x-card-link />

      <x-card-link />

    </div>

    <x-footer />

  </div>

  @livewireScripts

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>