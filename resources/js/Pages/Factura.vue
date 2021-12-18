<template>
    <app-layout title="facturas">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Facturas
            </h2>
        </template>



<div class="overflow-x-auto mb-4">
    <div class="flex justify-center mt-2 items-center bg-gray-200 antialiased">
      <div class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl">
        <div
          class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg"
        >
          <p class="font-semibold text-gray-800 text-3xl">Facturación</p>
           <div class=" flex justify-end text-center">
                <p class="mb-1 font-semibold text-xl mr-2 text-gray-700">Fecha</p>
                <input type="date" class="flex justify-end p-5 mb-5 bg-white border border-gray-200 outline-none rounded shadow-sm h-12"/>
           </div>
          
          
        </div>
        <div class="flex flex-col px-4 py-5 bg-gray-50">
          <p class="mb-2 h-5 font-semibold text-xl ml-1 text-gray-700">Cliente</p>
         <select  type="text" class="bg-grey-100 mb-3 w-13 text-left rounded-md pl-2 outline-none py-2 border-2" >
             <option value="0">Luis Alberto Pedraza</option>
             <option value="1">Pedro Jose Marín</option>
         </select>
        
          <div class="flex flex-col sm:flex-row items-center mb-5 sm:space-x-5">
            <div class="w-full sm:w-1/2">
               <label class="font-semibold text-xl ml-1 text-gray-700">Producto</label>
               <select type="text" class="w-full p-2 bg-white ml-0 border border-gray-200 mb-3 outline-none rounded shadow-sm " >
                    <option value="0">Televisor</option>
                    <option value="1">Nevera</option>
                    <option value="2">Equipo de sonido</option>
               </select>
            </div>
            <div class="mb-4 mt-6 flex space-x-4 m-10  ">
				  <div class="w-full sm:w-1/2">
                    <label class="font-semibold text-xl  text-gray-700">Precio</label>
                    <input type="number" placeholder="$0.00" class="w-full p-2 bg-white ml-0 border border-gray-200 mb-3 outline-none rounded shadow-sm">
                 </div>
				 <div class="w-full sm:w-1/2">
                   <label class="font-semibold text-xl text-gray-700">Cantidad</label>
                    <input type="number" placeholder="0" class="w-full p-2 bg-white ml-0 border border-gray-200 mb-3 outline-none rounded shadow-sm" >
                </div>
                    <button
                type="button d-grid gap-1 d-md-flex"
                class="
                  py-2
                  px-3
                  bg-gradient-to-r
                  from-indigo-500
                  to-blue-500
                  rounded-lg
                "
              >
                <div class="flex sm:flex-cols- gap-2">
                  <div class="col-span-1">
                    <svg
                      class="h-6 w-7 text-white"
                      fill="none"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                      />
                    </svg>
                  </div>
                </div>
              </button>
             </div>
          </div>
          <hr />
        <table class="content-start table-automin-w-min w-full table-fixed rounded-t-lg mb-3  bg-gray-200 text-gray-800">
                <tr class="text-left border-b-2 border-gray-300">
                    <th class="px-4 py-3">Cod Producto</th>
                    <th class="px-4 py-3">Producto</th>
                    <th class="px-4 py-3">Precio</th>
                    <th class="px-4 py-3">Cantidad</th>
                   <th class="px-4 py-3">Subtotal</th>
                </tr>
  
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-3">123</td>
                <td class="px-4 py-3">Televisor</td>
               <td class="px-4 py-3">999000</td>
                <td class="px-4 py-3">1</td>
                <td class="px-4 py-3">999000</td>
            </tr>
            <tr>
                 <td class="text-xl text-bold px-4 py-3" colspan="4" align="center">TOTAL</td>
            </tr>

        </table>
         
        </div>
         <div class=" flex justify-end text-center">
	        <button type="button" class=" bg-gradient-to-r from-indigo-500 to-blue-500
                  rounded-lg bg-blue-500 text-white ml mb-3 mr-3 
                   py-2 px-4 border-2 outline-none">Guardar</button>
		</div>
      </div>
    </div>
</div>

    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        components: {
            AppLayout
        },
    })
</script>
