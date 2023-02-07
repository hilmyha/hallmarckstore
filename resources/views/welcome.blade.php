<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  {{-- font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  @vite('resources/css/app.css')
</head>
<body class="font-josefin">
  
  
  {{-- navbar --}}
  <header class="bg-white px-2 mobile:px-4 py-4 fixed w-full z-20 top-0 left-0 border-b shadow-lg border-gray-200">
    <div class="container flex flex-wrap items-center justify-between border">
    <a href="#" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap">Hallmarck</span>
    </a>
    <div class="flex md:order-2">
        <button type="button" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-600 font-medium rounded-lg text-sm px-2.5 py-2.5 text-center mr-3 md:mr-0">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 block tablet:hidden">
            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd" />
          </svg>   
          <span class="hidden tablet:block">Login</span>
        </button>
        
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-medium md:border-0 md:bg-white">
        
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Contact</a>
        </li>
      </ul>
    </div>
    </div>
  </header>

  {{-- hero --}}
  <section class="bg-gray-100 mt-20 md:mt-24 overflow-hidden">
    <div class="h-[400px] xl:h-[600px] container flex items-center gap-2 xl:px-14">

      <div class=" p-4 w-full">
        <h1 class="mb-4 text-4xl lg:text-5xl font-bold tracking-tight text-gray-900">Select your new <span class="text-primary-600 auto-type"></span> style.</h1>
        <p class="text-lg lg:text-xl mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima praesentium nulla qui deserunt veritatis asperiores accusantium odit sed rerum maiores.</p>

        <button type="button" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-600 rounded-lg text-md px-5 py-2.5 mr-2 mb-2 focus:outline-none">Shop Now</button>
      </div>

      <div class="relative p-4 w-full h-full hidden lg:block">
        
        <img src="{{ asset('assets/img/001.png') }}" class="z-10 absolute -right-20 -bottom-32 object-contain hover:-translate-y-5 transition">

      </div>
    </div>
  </section>

  {{-- new arrivals --}}
  <section class="my-20 md:my-24">
    <div class="container flex flex-col items-center gap-8 xl:px-14">

      <div class="w-full">
        <div class="">
          <h2 class="mb-2 text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h2>
          <p class="text-lg lg:text-xl">Stok terbaru dari kami.</p>
        </div>
      </div>

      <div class="w-full grid gap-8 grid-cols-1 xl:grid-cols-3 lg:grid-cols-2">
        
        
        <div class="bg-white lg:border-none border lg:shadow-none shadow-lg group">
          <div class="overflow-hidden h-[450px] border bg-gray-200">
              <img class="object-cover group-hover:blur-sm group-hover:scale-105 duration-300 transition ease-in-out" src="https://source.unsplash.com/1920x1080?adidas" alt="" />
          </div>
          <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-lg lg:text-2xl font-bold tracking-tight text-gray-900">Scary Gary</h5>
            </a>
            <p class="mb-2 text-base lg:text-lg font-normal text-primary-700">IDR, 150.000</p>
            
          </div>
        </div>
        <div class="bg-white lg:border-none border lg:shadow-none shadow-lg group">
          <div class="overflow-hidden h-[450px] border bg-gray-200">
              <img class="object-cover group-hover:blur-sm group-hover:scale-105 duration-300 transition ease-in-out" src="https://source.unsplash.com/1920x1080?nike" alt="" />
          </div>
          <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-lg lg:text-2xl font-bold tracking-tight text-gray-900">Scary Gary</h5>
            </a>
            <p class="mb-2 text-base lg:text-lg font-normal text-primary-700">IDR, 150.000</p>
            
          </div>
        </div>
        <div class="bg-white lg:border-none border lg:shadow-none shadow-lg group">
          <div class="overflow-hidden h-[450px] border bg-gray-200">
              <img class="object-cover group-hover:blur-sm group-hover:scale-105 duration-300 transition ease-in-out" src="https://source.unsplash.com/1920x1080?new-balance" alt="" />
          </div>
          <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-lg lg:text-2xl font-bold tracking-tight text-gray-900">Scary Gary</h5>
            </a>
            <p class="mb-2 text-base lg:text-lg font-normal text-primary-700">IDR, 150.000</p>
            
          </div>
        </div>


      </div>
      
    </div>
  </section>
  
  {{-- masonry layout --}}
  <section class="grid md:grid-cols-4 lg:grid-cols-6 gap-2 lg:h-[600px] h-[1200px]">
    <div class=" lg:row-span-6 lg:col-span-2 row-span-6 col-span-6 bg-primary-600 group overflow-hidden relative border">
      <img class="object-cover group-hover:scale-105 transition duration-300" src="https://source.unsplash.com/random/1" alt="">
      <div class="absolute inset-0 group-hover:bg-black/30 transition duration-300"></div>
    </div>
    <div class=" lg:row-span-6 lg:col-span-2 row-span-6 col-span-6 bg-primary-600 group overflow-hidden relative border">
      <img class="object-cover group-hover:scale-105 transition duration-300" src="https://source.unsplash.com/random/2" alt="">
      <div class="absolute inset-0 group-hover:bg-black/30 transition duration-300"></div>
    </div>
    <div class=" lg:row-span-3 lg:col-span-2 row-span-6 col-span-6 bg-primary-600 group overflow-hidden relative border">
      <img class="object-cover group-hover:scale-105 transition duration-300" src="https://source.unsplash.com/random/3" alt="">
      <div class="absolute inset-0 group-hover:bg-black/30 transition duration-300"></div>
    </div>
    <div class=" lg:row-span-3 lg:col-span-2 row-span-6 col-span-6 bg-primary-600 group overflow-hidden relative border">
      <img class="object-cover group-hover:scale-105 transition duration-300" src="https://source.unsplash.com/random/4" alt="">
      <div class="absolute inset-0 group-hover:bg-black/30 transition duration-300"></div>
    </div>
  </section>
  
  {{-- popular items --}}
  <section class="my-20 md:my-24">
    <div class="container flex flex-col items-center gap-8 xl:px-14 text-gray-900">
      
      <div class="w-full">
        <div class="">
          <h2 class="mb-2 text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">Popular Items</h2>
          <p class="text-lg lg:text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, repudiandae.</p>
        </div>
      </div>

      <div class="w-full grid gap-8 grid-cols-1 xl:grid-cols-3 lg:grid-cols-2">

        <div class="bg-white lg:border-none border lg:shadow-none shadow-lg group">
          <div class="relative overflow-hidden h-[450px] bg-gray-200">
              <img class="object-cover" src="{{ asset('assets/img/test2.png') }}" alt="" />
              <div class="absolute inset-0 group-hover:bg-black/30 transition duration-300"></div>
              <a href="#" class="absolute bg-black z-10 w-full text-center p-4 left-0 -bottom-12 group-hover:-translate-y-12 transition duration-300 text-white">Add to Chart</a>
          </div>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-lg lg:text-2xl font-bold tracking-tight text-gray-900">Scary Gary</h5>
              </a>
              <p class="mb-2 text-base lg:text-lg font-normal text-primary-700">IDR, 150.000</p>
              
          </div>
        </div>
        <div class="bg-white lg:border-none border lg:shadow-none shadow-lg group">
          <div class="relative overflow-hidden h-[450px] bg-gray-200">
              <img class="object-cover" src="{{ asset('assets/img/test1.png') }}" alt="" />
              <div class="absolute inset-0 group-hover:bg-black/30 transition duration-300"></div>
              <a href="#" class="absolute bg-black z-10 w-full text-center p-4 left-0 -bottom-12 group-hover:-translate-y-12 transition duration-300 text-white">Add to Chart</a>
          </div>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-lg lg:text-2xl font-bold tracking-tight text-gray-900">Push Your Limit</h5>
              </a>
              <p class="mb-2 text-base lg:text-lg font-normal text-primary-700">IDR, 150.000</p>
              
          </div>
        </div>

      </div>

      <div class="w-full flex justify-center">
        <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-600 rounded-lg text-md px-5 py-2.5 mr-2 mb-2 focus:outline-none cursor-pointer">View more Product</a>
      </div>
    </div>
  </section>

  {{-- shipping --}}
  <section class="container border my-20 md:my-24">
    <div class="p-6 bg-primary-600 rounded-md grid grid-flow-row xl:grid-flow-col gap-8 text-white">
      <div class="p-5">
        {{-- svg --}}
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mb-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
        </svg>

        <h3 class="mb-2 text-xl lg:text-2xl font-bold">Free shipping method</h3>
        <p class="mb-2 text-base lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, harum?</p>
      </div>
      <div class="p-5">
        {{-- svg --}}
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mb-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
        </svg>
        
        <h3 class="mb-2 text-xl lg:text-2xl font-bold">Secure Payment</h3>
        <p class="mb-2 text-base lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, harum?</p>
      </div>
      <div class="p-5">
        {{-- svg --}}
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mb-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
        </svg>

        <h3 class="mb-2 text-xl lg:text-2xl font-bold">Contact Support</h3>
        <p class="mb-2 text-base lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, harum?</p>
      </div>
    </div>
  </section>

  {{-- footer --}}  
  <footer class="container p-4 bg-white md:px-6 md:py-8">
    <div class="flex items-center justify-between flex-col lg:flex-row">
        <a href="#" class="flex items-center mb-4 sm:mb-0">
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Hallmarck</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8"/>
    <span class="block text-sm text-gray-500 text-center lg:text-start"> &copy; <a href="#" class="hover:underline">Hallmarck™</a>. All Rights Reserved.
    </span>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://kit.fontawesome.com/8807866152.js" crossorigin="anonymous"></script>
  @vite('node_modules/flowbite/dist/flowbite.js')
  @vite('resources/js/app.js')
</body>
</html>