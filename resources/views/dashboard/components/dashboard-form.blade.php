<section class="bg-white dark:bg-gray-900">
   <div class="bg-white p-6 rounded-xl">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{ $title }}</h2>
      <form action="{{ $action }}" method="{{ $method }}" enctype="multipart/form-data">
         @csrf
         <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
               {{ $slot }}
         </div>
         <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
               {{ $title }}
         </button>
      </form>
   </div>
</section>