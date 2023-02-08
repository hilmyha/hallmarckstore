{{-- navbar --}}
<header class="bg-white px-2 mobile:px-4 py-4 fixed w-full z-20 top-0 left-0 border-b shadow-lg border-gray-200">
  <div class="container flex flex-wrap items-center justify-between">
    <a href="/">
      <span class="self-center text-xl font-semibold whitespace-nowrap">
        {{ $title }}
      </span>
    </a>
  
  
    <div class="flex md:order-2">
      @auth
        <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="font-medium text-sm px-4 py-2.5 text-center md:inline-flex hidden items-center" type="button"> {{ auth()->user()->name }} <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
        
        <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="md:hidden p-2.5 mx-2 text-center inline-flex items-center rounded-full"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg></button>

        <!-- Dropdown menu -->
        <div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border shadow w-44">
          <div class="px-4 py-3 text-sm text-gray-900">
            <div class="font-medium truncate">{{ auth()->user()->email }}</div>
          </div>
          <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownInformationButton">
            <li>
              <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">Charts</a>
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
      @else
        <a href="/login" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-600 font-medium rounded-lg text-sm px-2.5 py-2.5 text-center mr-3 md:mr-0">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 block tablet:hidden">
            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd" />
          </svg>   
          <span class="hidden tablet:block">Login</span>
        </a>
      @endauth
        
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
    </div>

    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-medium md:border-0 md:bg-white">
        
        <li>
          <a href="/" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Home</a>
        </li>
        <li>
          <a href="/products" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Products</a>
        </li>
        <li>
          <a href="/" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">Categories</a>
        </li>
        <li>
          <a href="/" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-600 md:p-0">About</a>
        </li>
      </ul>
    </div>
  </div>
</header>