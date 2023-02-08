<x-dashboard-layout title="Dashboard">
  <div class="container w-full">
    
    <div class="bg-white p-6 grid gap-4 md:gap-6 rounded-xl">
      <div class="flex flex-col lg:flex-row justify-start lg:justify-between lg:items-center">
        <div>
          <h2 class="font-bold text-xl">Latest Products</h2>
          <p>This is a list of latest products</p>
        </div>
        <a href="/dashboard/products/create" class="mt-2 text-primary-500 lg:hover:underline">Add Product</a>
        
      </div>
      <div class=" overflow-x-scroll">
        <table class="table-auto w-full text-sm text-left text-gray-500 border">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
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
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
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
                    <td class="px-6 py-4">
                      <a href="/dashboard/products/{{ $product->id }}" class="text-green-500 hover:underline">Show</a>
                      <a href="/dashboard/products/{{ $product->id }}/edit" class="text-yellow-400 hover:underline">Edit</a>
                      <form class="inline" action="/dashboard/products/{{ $product->id }}" method="post">
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
      <div>
        {{ $products->links() }}
      </div>
    </div>


  </div>

  <script>
    const slug = document.querySelector('#slug')
    title.addEventListener('change', function() {
      fetch('/dashboard/wisata/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })
  </script>
</x-dashboard-layout>