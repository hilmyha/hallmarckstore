<div class="bg-white lg:border-none border lg:shadow-none shadow-lg group">
  <div class="overflow-hidden h-[450px] border bg-gray-200">
      <img class="object-cover group-hover:blur-sm group-hover:scale-105 duration-300 transition ease-in-out" src="https://source.unsplash.com/1920x1080?{{ $product->category->name }}" alt="" />
  </div>
  <div class="p-5">
    <a href="{{ $product->slug }}">
        <h5 class="mb-2 text-lg lg:text-2xl font-bold tracking-tight text-gray-900">{{ $product->name }}</h5>
    </a>
    <p class="mb-2 text-base lg:text-lg font-normal text-primary-700">IDR, {{ $product->price }}</p>
    
  </div>
</div>