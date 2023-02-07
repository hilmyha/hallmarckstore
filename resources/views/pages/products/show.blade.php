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
  </x-section>
</x-app-layout>