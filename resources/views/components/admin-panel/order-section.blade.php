   <div class="mt-20">
       <h1 class="text-4xl font-semibold text-center text-gray-800 mb-10">Objednávky</h1>
       <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
           <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
               <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                   <table class="min-w-full divide-y divide-gray-200">
                       <thead class="bg-gray-50">
                           <tr>
                               <th scope="col"
                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Číslo objednávky
                               </th>
                               <th scope="col"
                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Názov náramku
                               </th>
                               <th scope="col"
                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Spôsob platby
                               </th>
                               <th scope="col"
                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Cena
                               </th>
                               <th scope="col"
                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Vytvorené
                               </th>
                               <th scope="col"
                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Detail
                               </th>
                           </tr>
                       </thead>
                       <tbody class="bg-white divide-y divide-gray-200">
                           @foreach ($orders as $order)
                               <tr>
                                   <td class="px-6 py-4 whitespace-nowrap">
                                       {{ $order->id }}
                                   </td>
                                   <td class="px-6 py-4 whitespace-nowrap">
                                       {{ $order->payment }}
                                   </td>
                                   <td class="px-6 py-4 whitespace-nowrap">
                                       {{ $order->shipping }}
                                   </td>
                                   <td class="px-6 py-4 whitespace-nowrap">
                                       {{ $order->total_price }} €
                                   </td>
                                   <td class="px-6 py-4 whitespace-nowrap">
                                       {{ $order->created_at->diffForHumans() }}
                                   </td>
                                   <td class="px-6 py-4 whitespace-nowrap">
                                       <a href="#"
                                           class="text-blue-500 hover:text-blue-700 hover:underline transition ease-in duration-150">
                                           Zobraziť Detail
                                       </a>
                                   </td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>
