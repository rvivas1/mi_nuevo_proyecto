<template>
    <app-layout title="Clientes">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Cliente
            </h2>
        </template>
                      <!-- <h1 v-for="(objeto, index) in cliente" :key="index">
                        {{objeto.nombres}}
                    </h1> -->

      <div class="overflow-x-auto" v-if="tipoAccion==0">
        <div class="bg-gray-100 flex items-center justify-center d-grid gap-2 d-md-flex  bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-3/4 d-grid gap-2 d-md-flex ">
                <div class="bg-white shadow-md rounded my-8">
                    <div class="bg-gray-100 d-grid gap-2 d-md-flex ">
                       <button type="button d-grid gap-2 d-md-flex" @click="abrirCliente" class='py-1 px-6 bg-gradient-to-r from-indigo-500 via-green-700 to-blue-600 hover:from-indigo-600 hover:via-gray-600 hover:to-waith-600 focus:outline-none text-white uppercase font-bold  rounded-lg mx-auto p-4'>
                           <div class="flex sm:flex-cols-6 gap-2">
                              <div class="col-span-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                               </div>
                            <div class="col-span-2 ">Nuevo</div>
                           </div>
                       </button>
                    </div>
    
                    <table class="min-w-max w-full table-fixed ">
                        <thead>
                            <tr class="bg-gray-600 text-white uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Documento</th>
                                <th class="py-3 px-6 text-left">Nombre</th>
                                <th class="py-3 px-6 text-left">Apellido</th>
                                <th class="py-3 px-6 text-left">Teléfono</th>
                                <th class="py-3 px-6 text-left">Dirección</th>
                                <th class="py-3 px-6 text-left">Correo</th>
                                <th class="py-3 px-6 text-left">Estado</th>
                                <th class="py-3 px-6 ">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr v-for="(objeto, index) in cliente" :key="index" class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">                                       
                                        <span class="font-medium">{{objeto.num_doc}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">                                       
                                        <span class="font-medium">{{objeto.nombres}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">                                       
                                        <span class="font-medium">{{objeto.apellidos}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">                                       
                                        <span class="font-medium">{{objeto.tel}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">                                       
                                        <span class="font-medium">{{objeto.dir}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">                                       
                                        <span class="font-medium">{{objeto.email}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6">
                                    <span v-if='objeto.estado==1' class="bg-purple-100 text-green-500 py-1 px-3 rounded-full text-xs">Activo</span>
                                    <span v-else class="bg-purple-100 text-red-500 py-1 px-3 rounded-full text-xs">Inactivo</span>
                                </td>
                                <td class="py-3 px-4 ">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110" title="Ver" @click="verCliente">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-green-500 hover:scale-110" title="Actualizar" @click="editarCliente">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110" title="Eliminar" @click="eliminarCliente">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       </div>
      <div class="overflow-x-auto mb-12" v-if="tipoAccion==1">
  <div class="flex justify-center items-center bg-gray-200 antialiased">
      <div class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl">
        <div
          class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg"
        >
          <p class="font-semibold text-gray-800 text-3xl" v-text="tittle"></p>
          <svg
            @click="cerrarCliente"
            class="w-6 h-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            ></path>
          </svg>
        </div>
        
        
        <div class="flex flex-col px-6 py-5 bg-gray-50">
             <div class="flex flex-col sm:flex-row items-center mb-5 sm:space-x-5">
            <div class="w-full">
               <p class="mb-2 font-semibold text-gray-700">Seleccione el tipo de documento</p>

               <select class="w-full text-gray-700 border-gray-600 rounded" name="estado" v-model="estado1" >
                   <option value="1">Cédula de ciudadanía</option>
                   <option value="2">Tarjeta de identidad</option>
                   <option value="3">Cédula de extrangeria</option>
                   <option value="4">Pasaporte</option>
               </select>
            </div>
          </div>
                <p class="mb-2 font-semibold text-gray-700">Ingrese el número de documento</p>
          <input
            v-model="numero"
            type="number"
            name=""
            placeholder="Número de documento"
            class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-12"
          >
          <p class="mb-2 font-semibold text-gray-700">Nombres</p>
          <input
            v-model="nombre"
            type="text"
            name=""
            placeholder="Ingrese el nombre"
            class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-12"
          >
          <p class="mb-2 font-semibold text-gray-700">Apellidos</p>
          <input
            v-model="apellido"
            type="text"
            name=""
            placeholder="ingrese el apellido"
            class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-12"
          >
          <p class="mb-2 font-semibold text-gray-700">Teléfono</p>
          <input
            v-model="telefono"
            type="number"
            name=""
            placeholder="Ingrese el número de teléfono "
            class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-12"
          >
          <p class="mb-2 font-semibold text-gray-700">Dirección</p>
          <input
            v-model="direccion"
            type="text"
            name=""
            placeholder="Ingrese la dirección"
            class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-12"
          >
          <p class="mb-2 font-semibold text-gray-700">Correo electrónico</p>
          <input
            v-model="correo"
            type="text"
            name=""
            placeholder="Ingrese el correo"
            class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-12"
          >
          <div class="w-full">
               <p class="mb-2 font-semibold text-gray-700">Seleccione un estado</p>

               <select class="w-full text-gray-700 border-gray-600 rounded" name="estado" v-model="estado2" >
                   <option value="1">Activo</option>
                   <option value="0">Inactivo</option>
               </select>
            </div>
         
          <hr />
        </div>
        <div
          class="flex flex-row items-center justify-end p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg"
        >
          <button @click="cerrarCliente" class="px-4 py-2 mr-5 text-white font-semibold bg-gray-500 rounded">
            Cerrar
          </button>
          <button @click="regCliente" class="px-4 py-2 text-white font-semibold bg-blue-500 rounded">
            Guardar
          </button>
        </div>
      </div>
    </div>   
       </div>





    </app-layout>
</template>
<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
        },
        data(){
            return{
                tipoAccion: 0,
                tittle:"",
                estado1:"",
                nombre:"",
                apellido:"",
                telefono:"",
                direccion:"",
                correo:"",
                estado2:0,

            }
        },
        props:['cliente'],

        methods:{
            abrirCliente(){
                this.tipoAccion=1
                this.tittle="Registrar cliente"
            },
            regCliente(){
                let me=this;
                var url="/api/cliente/registrar";
                axios.post(url,
                {
                   tip_doc: this.estado1,
                   num_doc: this.numero,
                   nombres: this.nombre,
                   apellidos: this.apellido,
                   tel: this.telefono,
                   dir: this.direccion,
                   email: this.correo,
                   edo: this.estado2,
                })
                 .then(function(response)
                {
                    alert('Registro guardado exitosamente!');
                })
                .catch(function(error){
                    console.log(error.message);
                })
            },
            verCliente(){
                alert('boton ver ok');
            },
            editarCliente(){
                this.tipoAccion=1
                this.tittle="Actualizar cliente"
            },

            eliminarCliente(){
                alert('boton eliminar ok');
            },
            cerrarCliente(){
                this.tipoAccion=0
            }
        }
    })
</script>
