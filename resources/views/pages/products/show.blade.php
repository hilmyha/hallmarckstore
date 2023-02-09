<x-app-layout title="{{ $product->name }}">
  <x-hero>
    <x-slot name="title">
      {{ $product->name }}
    </x-slot>
    <x-slot name="desc">
      {{ $product->description }}
    </x-slot>
  </x-hero>
  <x-section>
    <x-slot name="title">
      
    </x-slot>
    <x-slot name="desc">
      
    </x-slot>
    
    <x-product.detail-card :product="$product" />
    <div class="">
      @auth
        <form action="/cart/{{ $product->id }}" method="post">
        @csrf
          <div class="flex">
            <input type="number" id="amount" name="amount" value="1">
            <button class="p-4 bg-primary-500 rounded-lg w-full text-white hover:bg-primary-700 focus:ring-primary-400 transition" type="submit">Add to cart</button>
          </div>
        </form>
      @endauth
    </div>

  </x-section>
  <section class="container">
    
  </section>
</x-app-layout>