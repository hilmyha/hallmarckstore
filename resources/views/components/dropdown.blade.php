<!-- Dropdown menu -->
<div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border shadow w-44">
  <div class="px-4 py-3 text-sm text-gray-900">
    <div>Bonnie Green</div>
    <div class="font-medium truncate">name@flowbite.com</div>
  </div>
  <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownInformationButton">
    <li>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
    </li>
    <li>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
    </li>
  </ul>
  <div class="py-2">
    <x-form class="text-gray-700 hover:bg-gray-100">
      <x-slot name="action">{{ route('logout') }}</x-slot>
      <x-slot name="method">POST</x-slot>

      <button class="block px-4 py-2 text-sm">Sign out</button>

    </x-form>
  </div>
</div>