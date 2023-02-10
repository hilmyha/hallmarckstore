<div class="bg-white lg:border-none border lg:shadow-none shadow-lg group w-full">
	<div class="relative overflow-hidden h-[450px] bg-gray-200">
		<img class="object-cover" src="{{ asset('storage/' . $product->image) }}" alt="" />
		<div class="absolute inset-0 group-hover:bg-black/30 transition duration-300"></div>
	</div>
	


	<div class="p-5 bg-[#e1e1e1]">
		<p class="text-center text-xl lg:text-2xl font-bold text-primary-700">IDR, {{ $product->price }}</p>
		
	</div>
</div>