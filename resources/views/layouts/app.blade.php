<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hallmarck™ | {{ $title }}</title>

  {{-- font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  @vite('resources/css/app.css')
</head>
<body class="font-josefin bg-white">
  
  
  <x-navbar title="Hallmarck"/>

  

  <main>
    {{ $slot }}
  </main>
  

  

  <x-footer title="Hallmarck" />


  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://kit.fontawesome.com/8807866152.js" crossorigin="anonymous"></script>
  @vite('node_modules/flowbite/dist/flowbite.js')
  @vite('resources/js/app.js')
</body>
</html>