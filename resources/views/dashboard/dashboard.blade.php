<x-dashboard-layout title="Dashboard">
  <div class="container grid gap-6">
    
    <div class="grid gap-6 lg:grid-flow-col grid-flow-row">
      <div class="bg-white p-6 rounded-xl">
        <h2 class="font-bold text-xl">Products</h2>
        <p>Total product {{ $products->count() }}</p>
      </div>
      <div class="bg-white p-6 rounded-xl">
        <h2 class="font-bold text-xl">Category</h2>
        <p>Total category {{ $categories->count() }}</p>
      </div>
      <div class="bg-white p-6 rounded-xl">
        <h2 class="font-bold text-xl">Chart</h2>
        <p>Total product {{ $products->count() }}</p>
      </div>
    </div>

    
    <div class="relative overflow-x-auto bg-white p-6 rounded-xl">
      <div class="mb-4 flex justify-between items-center">
        <div class="">
          <h2 class="font-bold text-xl">Latest Products</h2>
          <p>This is a list of latest products</p>
        </div>
        <div class="">
          <a href="#">View All</a>
        </div>
      </div>
      <table class="w-full text-sm text-left text-gray-500 border dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      #
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Product Name
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Category
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Price
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($products->take(5) as $product)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                  </th>
                  <td class="px-6 py-4">
                    {{ $product->name }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $product->category->name }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $product->price }}
                  </td>
              </tr>
              
            @endforeach
          </tbody>
      </table>
    </div>
    
    <div class="relative overflow-x-auto bg-white p-6 rounded-xl">
      <div class="mb-4">
        <h2 class="font-bold text-xl">Latest Categories</h2>
        <p>This is a list of latest categories</p>
      </div>
      <table class="w-full text-sm text-left text-gray-500 border dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      #
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Category Name
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($categories->take(5) as $product)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                  </th>
                  <td class="px-6 py-4">
                    {{ $product->name }}
                  </td>
              </tr>
              
            @endforeach
          </tbody>
      </table>
    </div>


    
  </div>
</x-dashboard-layout>