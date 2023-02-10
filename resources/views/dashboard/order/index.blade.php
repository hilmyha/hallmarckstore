<x-dashboard-layout title="Dashboard">
  <div class="container w-full">
    
    <div class="bg-white p-6 grid gap-4 md:gap-6 rounded-xl">
      
      <div>
        <h2 class="font-bold text-xl">Latest Products</h2>
        <p>This is a list of latest products</p>
      </div>
      <div class="overflow-x-scroll">
        <table class="table-auto w-full text-sm text-left text-gray-500 border">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
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
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{-- {{ $loop->iteration }} --}}
                    </th>
                    <td class="px-6 py-4">
                      {{ $order->address }}
                    </td>
                    <td class="px-6 py-4">
                      IDR {{ $order->total_price }}
                    </td>
                    <td class="px-6 py-4">
                      {{-- <a href="/dashboard/cart/{{ $cart->id }}" class="text-green-500 hover:underline">Checkout</a> --}}
                      
                      <button id="pay-button" class="font-medium mr-2 text-red-700 hover:underline">Checkout</button>
  
                    </td>
                </tr>
                
            </tbody>
        </table>
      </div>
      <div>
        {{-- {{ $carts->links() }} --}}
      </div>
    </div>


  </div>

  <script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{ $snapToken }}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
          alert("payment success!"); console.log(result);
        },
        onPending: function(result){
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
          alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
  </script>
  <script>
    const slug = document.querySelector('#slug')
    title.addEventListener('change', function() {
      fetch('/dashboard/wisata/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })
  </script>
</x-dashboard-layout>