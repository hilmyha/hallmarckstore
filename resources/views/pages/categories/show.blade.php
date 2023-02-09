<x-app-layout title="Categories">
  <x-hero>
    <x-slot name="title">
      
    </x-slot>
    <x-slot name="desc">
      
    </x-slot>
  </x-hero>

  <x-section>
    <x-slot name="title">
      
    </x-slot>
    <x-slot name="desc">
      
    </x-slot>
    <div class="w-full grid gap-8 grid-cols-1 xl:grid-cols-3 lg:grid-cols-2">
      @foreach ($products as $product)
        <x-product.card :product="$product" />
      @endforeach

    </div>

  </x-section>
</x-app-layout>