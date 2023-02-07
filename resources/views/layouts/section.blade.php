<section class="my-20 md:my-24">
  <div class="container flex flex-col items-center gap-8 xl:px-14 text-gray-900">
      
    <div class="w-full">
      <h2 class="mb-2 text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">{{ $title }}</h2>
      <p class="text-lg lg:text-xl">{{ $desc }}</p>
    </div>

    {{ $slot }}


  </div>

</section>