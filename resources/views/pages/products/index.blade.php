<x-app-layout title="Products">
  <x-hero>
    <x-slot name="title">
      Products
    </x-slot>
    <x-slot name="desc">
      Products
    </x-slot>
  </x-hero>
  <x-section>
    <x-slot name="title">
      
    </x-slot>
    <x-slot name="desc">
      
    </x-slot>
    
    <div class="w-full grid gap-8 grid-cols-1 xl:grid-cols-3 lg:grid-cols-2">
      @if ($products->count())
        @foreach ($products as $product)
          <x-product.card :product="$product" />
        @endforeach
      @else
        <div class="text-center">
          <h1 class="text-3xl font-bold">No Product Found</h1>
        </div>
      @endif
    </div>
  </x-section>
</x-app-layout>