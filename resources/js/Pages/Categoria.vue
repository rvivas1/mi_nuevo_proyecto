<template>
  <app-layout title="Categoria">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Categoria
      </h2>
    </template>
    <div class="overflow-x-auto mb-4" v-if="tipoAccion == 0">
      <div
        class="
          min-w-screen
          bg-gray-100
          flex
          items-center
          justify-center
          d-grid
          gap-2
          d-md-flex
          bg-gray-100
          font-sans
          overflow-hidden
        "
      >
        <div class="w-full lg:w-3/6 d-grid gap-2 d-md-flex">
          <div class="bg-white shadow-md rounded my-6">
            <div class="bg-gray-100 min-w-max w-full">
              <button
                type="button d-grid gap-1 d-md-flex"
                @click="abrirCategoria"
                class="
                  py-1
                  px-2
                  bg-gradient-to-r
                  from-indigo-500
                  via-green-700
                  to-blue-600
                  hover:from-indigo-600 hover:via-gray-600 hover:to-waith-600
                  focus:outline-none
                  text-white
                  uppercase
                  font-bold
                  rounded-lg
                  mx-auto
                  p-4
                "
              >
                <div class="flex sm:flex-cols- gap-2">
                  <div class="col-span-1">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6 text-white"
                      fill="none"
                      viewBox="0 0 24 24"
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
                  <div class="col-span-2">Nuevo</div>
                </div>
              </button>
            </div>

            <table class="min-w-max w-full table-fixed">
              <thead>
                <tr
                  class="
                    bg-gray-600
                    text-white
                    uppercase
                    text-sm
                    leading-normal
                  "
                >
                  <th class="py-3 px-6 text-left">Nombre</th>
                  <th class="py-3 px-6 text-left">Estado</th>
                  <th class="py-3 px-6">Acciones</th>
                </tr>
              </thead>
              <tbody class="text-gray-600 text-sm font-light">
                <tr
                  v-for="(objeto, index) in arrayData"
                  :key="index"
                  class="border-b border-gray-200 hover:bg-gray-100"
                >
                  <td class="py-3 px-6 text-left whitespace-nowrap">
                    <div class="flex items-center">
                      <span class="font-medium"> {{ objeto.nombre }}</span>
                    </div>
                  </td>
                  <td class="py-3 px-6">
                    <span
                      v-if="objeto.estado == 1"
                      class="
                        bg-purple-100
                        text-green-600
                        py-1
                        px-3
                        rounded-full
                        text-xs
                      "
                      >Activo</span
                    >
                    <span
                      v-else
                      class="
                        bg-purple-100
                        text-red-600
                        py-1
                        px-3
                        rounded-full
                        text-xs
                      "
                      >Inactivo</span
                    >
                  </td>
                  <td class="py-3 px-6">
                    <div class="flex item-center justify-center">
                      <div
                        class="
                          w-4
                          mr-2
                          transform
                          hover:text-blue-500 hover:scale-110
                        "
                        title="Ver"
                        @click="verCategoria"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                          />
                        </svg>
                      </div>
                      <div
                        class="
                          w-4
                          mr-2
                          transform
                          hover:text-green-500 hover:scale-110
                        "
                        title="Actualizar"
                        @click="editarCategoria(objeto)"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                          />
                        </svg>
                      </div>
                      <div
                        class="
                          w-4
                          mr-2
                          transform
                          hover:text-red-500 hover:scale-110
                        "
                        title="Eliminar"
                        @click="eliminarCategoria(objeto)"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                          />
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
    <div class="overflow-x-auto mb-4" v-if="tipoAccion == 1">
      <div class="flex justify-center items-center bg-gray-200 antialiased">
        <div
          class="
            flex flex-col
            w-11/12
            sm:w-5/6
            lg:w-1/2
            max-w-2xl
            mx-auto
            rounded-lg
            border border-gray-300
            shadow-xl
          "
        >
          <div
            class="
              flex flex-row
              justify-between
              p-6
              bg-white
              border-b border-gray-200
              rounded-tl-lg rounded-tr-lg
            "
          >
            <p class="font-semibold text-gray-800 text-3xl" v-text="tittle"></p>
            <svg
              @click="cerrarCat"
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
            <p class="mb-2 font-semibold text-gray-700">
              Agregue un nombre a la categoría
            </p>
            <input
              v-model="nombre"
              type="text"
              name=""
              placeholder="Ingresa un nombre"
              class="
                p-5
                mb-5
                bg-white
                border border-gray-200
                rounded
                shadow-sm
                h-12
              "
            />
            <!-- <div class="flex flex-col sm:flex-row items-center mb-5 sm:space-x-5">
            <div class="w-full">
               <p class="mb-2 font-semibold text-gray-700">Selecciona un estado</p>

               <select class="w-full text-gray-700 border-gray-600 rounded" name="estado" v-model="estado" >
                   <option value="1">Activo</option>
                   <option value="0">Inactivo</option>
               </select>
            </div>
          </div> -->
            <div class="grid gap-4 grid-cols-6 mt-2">
              <div>
                <label class="inline-flex items-center">
                  <input
                    v-model="estado"
                    type="radio"
                    class="inline-flex form-radio bg-green-500 select-none"
                    name="radio"
                    value="1"
                    checked
                  />
                  <span class="ml-2">Activo</span>
                </label>
              </div>
              <div>
                <label class="inline-flex items-center">
                  <input
                    v-model="estado"
                    type="radio"
                    class="form-radio bg-gray-400"
                    name="radio"
                    value="0"
                  />
                  <span class="ml-2">Inactivo</span>
                </label>
              </div>
            </div>
            <hr />
          </div>
          <div
            class="
              flex flex-row
              items-center
              justify-end
              p-5
              bg-white
              border-t border-gray-200
              rounded-bl-lg rounded-br-lg
            "
          >
            <button
              @click="cerrarCat"
              class="
                px-4
                py-2
                mr-5
                text-white
                font-semibold
                bg-gray-500
                rounded
              "
            >
              Cerrar
            </button>
            <button
              v-if="boton == false"
              @click="regCategoria"
              class="px-4 py-2 text-white font-semibold bg-blue-500 rounded"
            >
              Guardar
            </button>
            <button
              v-else
              @click="actCategoria"
              class="px-4 py-2 text-white font-semibold bg-blue-500 rounded"
            >
              Actualizar
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="overflow-x-auto mb-12" v-if="tipoAccion == 2">
      <div
        class="
          flex flex-col
          space-y-4
          min-w-screen
          bg-opacity-25
          h-screen
          animated
          fadeIn
          faster
          fixed
          left-0
          top-0
          flex
          justify-center
          items-center
          inset-0
          z-50
          outline-none
          focus:outline-none
          bg-gray-900
        "
      >
        <div
          class="
            flex flex-col
            p-8
            bg-gray-800
            shadow-md
            hover:shodow-lg
            rounded-2xl
          "
        >
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="
                  w-16
                  h-16
                  rounded-2xl
                  p-3
                  border border-gray-800
                  text-blue-400
                  bg-gray-900
                "
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
              </svg>
              <div class="flex flex-col ml-3">
                <div class="font-medium leading-none text-gray-100">
                  Eliminar esta categoria {{ nombreCat }}?
                </div>
                <p class="text-sm text-white leading-none mt-1">
                  Este proceso es irreversible!
                </p>
              </div>
            </div>
            <button
              @click="cerrarCat"
              class="
                flex-no-shrink
                bg-gray-500
                px-5
                ml-4
                py-2
                text-sm
                shadow-sm
                hover:shadow-lg
                font-medium
                tracking-wider
                border-2 border-gray-500
                text-white
                rounded-full
              "
            >
              NO
            </button>
            <button
              @click="destroyCategoria"
              class="
                flex-no-shrink
                bg-red-500
                px-5
                ml-4
                py-2
                text-sm
                shadow-sm
                hover:shadow-lg
                font-medium
                tracking-wider
                border-2 border-red-500
                text-white
                rounded-full
              "
            >
              SI
            </button>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>
<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import axios from "axios";

export default defineComponent({
  components: {
    AppLayout,
    Welcome,
  },
  data() {
    return {
      tipoAccion: 0,
      idCat: 0,
      tittle: "",
      nombre: "",
      nombreCat: "",
      estado: "1",
      arrayData: [],
      boton: true,
    };
  },
  // props:['categoria'],
  methods: {
    listarDatos() {
      let me = this;
      var url = "/api/categoria/data";

      axios
        .get(url)
        .then(function (response) {
          var respuesta = response.data;
          me.arrayData = respuesta.categoria;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    regCategoria() {
        let me = this;
      var url = "/api/categoria/registrar";
      axios
        .post(url, {
            nombre: this.nombre,
          edo: this.estado,
        })
        .then(function (response) {
            me.listarDatos();
          alert("Registro guardado exitosamente!");
          me.cerrarCat();
        })
        .catch(function (error) {
            console.log(error.message);
        });
    },
    actCategoria() {
        let me = this;
      var url = "/api/categoria/actualizar";
      axios
        .put(url, {
            id: this.idCat,
          nombre: this.nombre,
          edo: this.estado,
        })
        .then(function (response) {
            me.listarDatos();
          alert("Registro actualizado exitosamente!");
          me.cerrarCat();
        })
        .catch(function (error) {
            console.log(error.message);
        });
    },
    editarCategoria(data = []) {
      this.tittle = "Actualizar categoría";
      this.tipoAccion = 1;
      this.idCat = data["id"];
      this.nombre = data["nombre"];
      this.estado = data["estado"];
    },
    destroyCategoria() {
      let me = this;
      var url = "/api/categoria/eliminar";

      axios
        .post(url, {
          id: this.idCat,
        })
        .then(function (response) {
          me.listarDatos();
          alert("Regitro eliminado!");
          me.cerrarCat();
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    abrirCategoria() {
          this.tittle = "Registrar categoría";
          this.tipoAccion = 1;
          this.boton = false;
    },
    verCategoria() {
        alert("boton ver ok");
    },
    eliminarCategoria(data = []) {
      this.tittle = "Actualizar categoría";
      this.tipoAccion = 2;
      this.idCat = data["id"];
      this.nombreCat = data["nombre"];
    },
    
    limpiar() {
      this.nombre = "";
      this.estado = "1";
    },
    cerrarCat() {
      this.tipoAccion = 0;
    },
  },
  mounted() {
    this.listarDatos();
  },
});
</script>
