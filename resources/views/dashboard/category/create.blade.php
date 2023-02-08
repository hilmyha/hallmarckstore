<x-dashboard-layout title="Create">
  <div class="container grid gap-4 md:gap-6">
    <x-dashboard-form>
      <x-slot name="title">Add Category</x-slot>
      <x-slot name="action">/dashboard/categories</x-slot>
      <x-slot name="method">post</x-slot>
  
      <x-partials.input name="input">
        <x-slot name="label">Name</x-slot>
        <x-slot name="name">name</x-slot>
        <x-slot name="type">text</x-slot>
        <x-slot name="placeholder">Category name</x-slot>
        <x-slot name="old">{{ old('name') }}</x-slot>
      </x-partials.input>
      
      <x-partials.input name="input">
        <x-slot name="label">Slug</x-slot>
        <x-slot name="name">slug</x-slot>
        <x-slot name="type">text</x-slot>
        <x-slot name="placeholder">Category slug</x-slot>
        <x-slot name="old">{{ old('slug') }}</x-slot>
      </x-partials.input>
  
    </x-dashboard-form>
  </div>
</x-dashboard-layout>