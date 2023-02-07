<div class="bg-white lg:border-none border lg:shadow-none shadow-lg group">
  <div class="relative overflow-hidden h-[450px] bg-gray-200">
      <img class="object-cover" src="{{ asset('assets/img/test1.png') }}" alt="" />
      <div class="absolute inset-0 group-hover:bg-black/30 transition duration-300"></div>
      <a href="{{ $product->slug }}" class="absolute bg-black z-10 w-full text-center p-4 left-0 -bottom-12 group-hover:-translate-y-12 transition duration-300 text-white">View Product</a>
  </div>
  <div class="p-5">
      <h5 class="mb-2 text-lg lg:text-2xl font-bold tracking-tight text-gray-900">{{ $product->name }}</h5>
      <p class="mb-2 text-base lg:text-lg font-normal text-primary-700">IDR, {{ $product->price }}</p>
      
  </div>
</div>