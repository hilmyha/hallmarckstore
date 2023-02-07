<x-app-layout title="Home">
  {{-- hero --}}
  <section class="bg-gray-100 mt-20 md:mt-24 overflow-hidden">
    <div class="h-[400px] xl:h-[600px] container flex items-center gap-2 xl:px-14">
      
      <div class=" p-4 w-full">
        <h1 class="mb-4 text-4xl lg:text-5xl font-bold tracking-tight text-gray-900">Select your new <span class="text-primary-600 auto-type"></span> style.</h1>
        <p class="text-lg lg:text-xl mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima praesentium nulla qui deserunt veritatis asperiores accusantium odit sed rerum maiores.</p>

        @auth
          
        @else
          <a href="{{ route('login') }}" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-600 rounded-lg text-md px-5 py-2.5 mr-2 mb-2 focus:outline-none">Shop Now</a>
        @endauth
      </div>

      <div class="relative p-4 w-full h-full hidden lg:block">
        
        <img src="{{ asset('assets/img/001.png') }}" class="z-10 absolute -right-20 -bottom-32 object-contain hover:-translate-y-5 transition">

      </div>
    </div>
  </section>
  
  {{-- new arrivals --}}
  <x-section>
    <x-slot name="title">
      New Arrivals
    </x-slot>
    <x-slot name="desc">
      Lorem, ipsum dolor.
    </x-slot>
    
    <div class="w-full grid gap-8 grid-cols-1 xl:grid-cols-3 lg:grid-cols-2">
      @if ($products->count())
        @foreach ($products->take(3) as $product)
          <x-product.arrival-card :product="$product" />
        @endforeach
      @else
        <div class="text-center">
          <h1 class="text-3xl font-bold">No Product Found</h1>
        </div>
      @endif
    </div>
  </x-section>

  {{-- masonry --}}
  <x-masonry />

  {{-- popular items --}}
  <x-section>
    <x-slot name="title">
      Popular Product
    </x-slot>
    <x-slot name="desc">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum alias quibusdam, rerum aspernatur necessitatibus ex modi velit hic sed eveniet?
    </x-slot>
    
    <div class="w-full grid gap-8 grid-cols-1 xl:grid-cols-3 lg:grid-cols-2">
      @if ($products->count())
        @foreach ($products->skip(3)->take(6) as $product)
          <x-product.card :product="$product" />
        @endforeach
      @else
        <div class="text-center">
          <h1 class="text-3xl font-bold">No Product Found</h1>
        </div>
      @endif
    </div>

    <x-partials.link link="/products">
      View all Product
    </x-partials.link>
  </x-section>

  {{-- shipping --}}
  <section class="container my-20 md:my-24">
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
</x-app-layout>