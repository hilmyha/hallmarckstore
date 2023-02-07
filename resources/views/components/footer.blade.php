{{-- footer --}}  
<footer class="container p-4 bg-white md:px-6 md:py-8">
  <div class="flex items-center justify-between flex-col lg:flex-row">
      <a href="#" class="flex items-center mb-4 sm:mb-0">
          <span class="self-center text-2xl font-semibold whitespace-nowrap">
            {{ $title }}
          </span>
      </a>
      <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0">
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
          </li>
          <li>
              <a href="#" class="hover:underline">Contact</a>
          </li>
      </ul>
  </div>
  <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8"/>
  <span class="block text-sm text-gray-500 text-center lg:text-start">{{ date('Y') }}  &copy; <a href="#" class="hover:underline">Hallmarck™</a>. All Rights Reserved.
  </span>
</footer>