<x-app-layout title="Categories">
  <x-hero>
    <x-slot name="title">
      Categories
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
      @if ($categories->count())
        @foreach ($categories as $category)
          <x-categories.card :category="$category" />
        @endforeach
      @else
        <div class="text-center">
          <h1 class="text-3xl font-bold">No category Found</h1>
        </div>
      @endif
    </div>
  </x-section>
</x-app-layout>