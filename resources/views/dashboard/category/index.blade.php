<x-dashboard-layout title="Category">
  <div class="container w-full">

    <div class="bg-white p-6 grid gap-4 md:gap-6 rounded-xl">
      <div class="flex flex-col lg:flex-row justify-start lg:justify-between lg:items-center">
        <div>
          <h2 class="font-bold text-xl">Latest Categories</h2>
          <p>This is a list of latest categories</p>
        </div>
        <a href="/dashboard/categories/create" class="mt-2 text-primary-500 lg:hover:underline">Add Category</a>
      </div>
      <div class="overflow-x-scroll">
        <table class="table-auto w-full text-sm text-left text-gray-500 border">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      #
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Category Name
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
              <tr class="bg-white border-b">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $loop->iteration }}
                  </th>
                  <td class="px-6 py-4">
                    {{ $category->name }}
                  </td>
                  <td class="px-6 py-4">
                    <a href="/dashboard/categories/{{ $category->id }}" class="text-green-500 hover:underline">Show</a>
                    <a href="/dashboard/categories/{{ $category->id }}/edit" class="text-yellow-400 hover:underline">Edit</a>
                    <form class="inline" action="/dashboard/categories/{{ $category->id }}" method="post">
                      @method('delete')
                      @csrf
                      <button type="submit" class="font-medium mr-2 text-red-700 hover:underline">Delete</button>
                    </form>

                  </td>
              </tr>
              
            @endforeach
          </tbody>
      </table>
      </div>
    </div>

  </div>
</x-dashboard-layout>