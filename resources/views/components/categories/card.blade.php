<div class="bg-white lg:border-none border lg:shadow-none shadow-lg group">
  <div class="relative overflow-hidden h-[450px] bg-gray-200">
    <img class="object-cover" src="https://source.unsplash.com/1920x1080?{{ $category->name }}" alt="" />
    
    <div class="absolute inset-0 group-hover:bg-black/30 transition duration-300"></div>
    <a href="/categories/{{ $category->slug }}" class="absolute bg-black z-10 w-full text-center p-4 left-0 -bottom-12 group-hover:-translate-y-12 transition duration-300 text-white">View Category</a>
  </div>
  <div class="p-5">
    <h5 class="mb-2 text-lg lg:text-2xl font-bold tracking-tight text-gray-900">{{ $category->name }}</h5>
  </div>
</div>