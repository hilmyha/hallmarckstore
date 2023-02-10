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
    <div class="w-full">
      {{-- @auth
        <form action="/cart/{{ $product->id }}" method="post">
          @csrf
          <div class="flex">
            <button class="p-4 bg-primary-500 rounded-lg w-full text-white hover:bg-primary-700 focus:ring-primary-400 transition" type="submit">Add to cart</button>
          </div>
        </form>
      @endauth --}}
      @auth
        <form action="/checkout" method="post" class="grid gap-4">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <x-partials.input name="input">
            <x-slot name="label">Address</x-slot>
            <x-slot name="name">address</x-slot>
            <x-slot name="type">text</x-slot>
            <x-slot name="placeholder">Your Address</x-slot>
            <x-slot name="old">{{ old('address') }}</x-slot>
          </x-partials.input>
          
          <x-partials.input name="input">
            <x-slot name="label">phone</x-slot>
            <x-slot name="name">phone</x-slot>
            <x-slot name="type">text</x-slot>
            <x-slot name="placeholder">Your phone</x-slot>
            <x-slot name="old">{{ old('phone') }}</x-slot>
          </x-partials.input>
          
          <x-partials.input name="input">
            <x-slot name="label">Quantity</x-slot>
            <x-slot name="name">qty</x-slot>
            <x-slot name="type">number</x-slot>
            <x-slot name="placeholder">Quantity</x-slot>
            <x-slot name="old">{{ old('qty') }}</x-slot>
          </x-partials.input>

          <div class="flex">
            <button class="p-4 bg-primary-500 rounded-lg w-full text-white hover:bg-primary-700 focus:ring-primary-400 transition" type="submit">Place Order</button>
          </div>
        </form>
      @endauth
    </div>

  </x-section>
  <section class="container">
    
  </section>
</x-app-layout>