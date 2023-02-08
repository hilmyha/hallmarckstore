<x-dashboard-layout title="Edit">
  <div class="container grid gap-4 md:gap-6">
    <x-dashboard-form>
      <x-slot name="title">Edit Product</x-slot>
      <x-slot name="action">/dashboard/categories/{{ $categories->id }}</x-slot>
      <x-slot name="method">post</x-slot>
      @method('put')
  
      <x-partials.input name="input">
        <x-slot name="label">Name</x-slot>
        <x-slot name="name">name</x-slot>
        <x-slot name="type">text</x-slot>
        <x-slot name="placeholder">Product name</x-slot>
        <x-slot name="old">{{ old('name', $categories->name) }}</x-slot>
      </x-partials.input>
      
      <x-partials.input name="input">
        <x-slot name="label">Slug</x-slot>
        <x-slot name="name">slug</x-slot>
        <x-slot name="type">text</x-slot>
        <x-slot name="placeholder">Product slug</x-slot>
        <x-slot name="old">{{ old('slug', $categories->slug) }}</x-slot>
      </x-partials.input>
  
    </x-dashboard-form>
  </div>
</x-dashboard-layout>