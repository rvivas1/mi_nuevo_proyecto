<template>
    <!-- <button :type="type" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
        <slot></slot>
    </button> -->
    <div class="flex justify-end">
        <button type="button d-grid gap-2 d-md-flex " class='py-2 px-2 bg-gradient-to-r from-indigo-500 via-green-700 to-blue-600 hover:from-indigo-600 hover:via-gray-600 hover:to-waith-600 focus:outline-none text-white uppercase font-bold  rounded-lg mx-auto p-4'>
            <div class="flex sm:flex-cols-6 gap-2">
                <div class="col-span-2 ">Iniciar sesión</div>
            </div>
       </button>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    })
</script>
