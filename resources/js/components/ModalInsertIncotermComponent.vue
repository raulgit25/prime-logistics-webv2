<template>
    <div>
        <!-- Main modal -->
        <div id="insert-modal" data-modal-backdrop="static" data-modal-placement="top-center" tabindex="-1"
            aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white border border-gray-200 rounded-lg shadow-sm p-4 md:p-6">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between border-b border-gray-200 pb-4 md:pb-5">
                        <h3 class="text-lg font-medium text-gray-900">
                            Añadir incoterm
                        </h3>
                        <button type="button"
                            class="text-gray-500 bg-transparent hover:bg-gray-100 hover:text-gray-900 rounded-lg text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="insert-modal">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                            </svg>
                            <span class="sr-only">Cerrar modal</span>
                        </button>
                    </div>

                    <span v-if="esError" class="bg-red-100 text-red-800 text-sm font-medium px-2 py-0.5 rounded-full">
                        {{ mensajeError }}
                    </span>

                    <form action="#" class="mt-4">
                        <div class="relative">
                            <input type="text" name="codi"
                                class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50
                        border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " autofocus v-model="incoterm.codi" />
                            <label class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-4 z-10
                        origin-left start-2.5 peer-focus:text-blue-600 peer-placeholder-shown:scale-100
                        peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
                                Código
                            </label>
                        </div>

                        <div class="relative mt-4">
                            <textarea name="nom"
                                class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50
                        border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " v-model="incoterm.nom"></textarea>
                            <label class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-4 z-10
                        origin-left start-2.5 peer-focus:text-blue-600 peer-placeholder-shown:scale-100
                        peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
                                Nombre
                            </label>
                        </div>
                    </form>

                    <div class="flex items-start">
                        <div class="inline-flex rounded-lg shadow-sm -space-x-px justify-end mt-4 w-full" role="group">
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white font-medium leading-5 rounded-s-lg
                        text-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                @click="insertIncoterms()">
                                <svg class="w-4 h-4 inline mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                                </svg>
                                Aceptar
                            </button>
                            <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white font-medium leading-5 rounded-e-lg
                        text-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-400"
                                data-modal-hide="insert-modal">
                                <svg class="w-4 h-4 inline mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                </svg>
                                Cancelar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const incoterm = ref({});
const estaCargando = ref(false);
const emit = defineEmits(['insertIncoterm']);

//control de errores (en este caso que no super la longitud permitida de los carácteres)
const esError = ref(false)
const mensajeError = ref();

const insertIncoterms = () => {
    const targetEl = document.getElementById("#insert-modal");
    const modal = new Modal(targetEl);

    estaCargando.value = true;
    axios.post('tipus_incoterm', incoterm.value)
        .then((response) => {
            estaCargando.value = true;
            incoterm.value = response.data
            emit('insertIncoterm');
            modal.hide();
        })
        .catch((error) => {
            estaCargando.value = false;
            esError.value = true;
            mensajeError.value = error.response.data.error;
        });
};
</script>

<style lang="scss" scoped></style>