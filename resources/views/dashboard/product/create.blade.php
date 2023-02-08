<x-dashboard-layout title="Create">
  <div class="container grid gap-4 md:gap-6">
    <x-dashboard-form>
      <x-slot name="title">Add Product</x-slot>
      <x-slot name="action">/dashboard/products</x-slot>
      <x-slot name="method">post</x-slot>
  
      <x-partials.input name="input">
        <x-slot name="label">Name</x-slot>
        <x-slot name="name">name</x-slot>
        <x-slot name="type">text</x-slot>
        <x-slot name="placeholder">Product name</x-slot>
        <x-slot name="old">{{ old('name') }}</x-slot>
      </x-partials.input>
      
      <x-partials.input name="input">
        <x-slot name="label">Slug</x-slot>
        <x-slot name="name">slug</x-slot>
        <x-slot name="type">text</x-slot>
        <x-slot name="placeholder">Product slug</x-slot>
        <x-slot name="old">{{ old('slug') }}</x-slot>
      </x-partials.input>
      
      <x-partials.input name="input">
        <x-slot name="label">Price</x-slot>
        <x-slot name="name">price</x-slot>
        <x-slot name="type">number</x-slot>
        <x-slot name="placeholder">IDR 2999</x-slot>
        <x-slot name="old">{{ old('price') }}</x-slot>
      </x-partials.input>
      
      <x-partials.input-select name="input">
        <x-slot name="label">Category</x-slot>
        <x-slot name="name">category_id</x-slot>
  
        @foreach ($categories as $category)
          @if (old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
          @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endif
        @endforeach
      </x-partials.input-select>
  
      <x-partials.input name="input">
        <x-slot name="label">Description</x-slot>
        <x-slot name="name">description</x-slot>
        <x-slot name="type">text</x-slot>
        <x-slot name="placeholder">Write product description here</x-slot>
        <x-slot name="old">{{ old('description') }}</x-slot>
      </x-partials.input>
  
    </x-dashboard-form>
  </div>
</x-dashboard-layout>