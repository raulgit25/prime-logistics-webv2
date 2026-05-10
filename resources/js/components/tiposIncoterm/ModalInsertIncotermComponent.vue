<template>
    <div>
        <!-- Main modal -->
        <div id="insert-modal" data-modal-backdrop="static" data-modal-placement="top-center" tabindex="-1"
            aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                        <h3 class="text-lg font-medium text-primary">
                            Añadir incoterm
                        </h3>
                        <button type="button"
                            class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="insert-modal">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                            </svg>
                            <span class="sr-only">Cerrar modal</span>
                        </button>
                    </div>

                    <span v-if="esError"
                        class="bg-danger-soft text-fg-danger-strong text-sm font-medium px-1.5 py-0.5 rounded-full">
                        {{ mensajeError }}
                    </span>

                    <form action="#" class="mt-4">
                        <div class="relative">
                            <input type="text" name="codi"
                                class="block rounded-t-base px-2.5 pb-2.5 pt-5 w-full text-sm text-heading bg-neutral-secondary-medium
                    border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-primary peer"
                                placeholder=" " autofocus />
                            <label for="floating_filled" class="absolute text-sm text-body duration-300 transform -translate-y-4 scale-75 top-4 z-10
                    origin-left start-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100
                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4
                    rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Código
                            </label>
                        </div>

                        <div class="relative mt-4">
                            <textarea name="nom"
                                class="block rounded-t-base px-2.5 pb-2.5 pt-5 w-full text-sm text-heading bg-neutral-secondary-medium
                    border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-primary peer"
                                placeholder=" ">
                        </textarea>
                            <label for="floating_filled" class="absolute text-sm text-body duration-300 transform -translate-y-4 scale-75 top-4 z-10
                    origin-left start-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100
                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4
                    rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Nombre
                            </label>
                        </div>
                    </form>

                    <div class="flex items-start">

                        <div class="inline-flex rounded-base shadow-xs -space-x-px justify-end mt-4 w-full"
                            role="group">
                            <button type="button" class="text-white bg-primary hover:bg-primary-hover
                            hover:text-white focus:ring-3 focus:ring-primary-focus font-medium leading-5 rounded-s-base
                            text-sm px-3 py-2 focus:outline-none" @click="insertIncoterm()">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white inline" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                                </svg>
                                Aceptar
                            </button>
                            <button class="text-white bg-secondary hover:bg-secondary-hover
                            hover:text-white focus:ring-3 focus:ring-secondary-focus
                            font-medium leading-5 rounded-e-base text-sm px-3 py-2 focus:outline-none"
                                data-modal-hide="insert-modal">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white inline" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
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

const incoterm = ref({});
const estaCargando = ref();
const esError = ref(false);
const mensajeError = ref();

const emit = defineEmits(['insertIncoterm']);

const insertIncoterm = () => {
    const targetEl = document.getElementById("#insert-modal");
    const modal = new Modal(targetEl);

    estaCargando.value = true;
    axios.post('tipus_incoterms', incoterm.value)
        .then((response) => {
            estaCargando.value = false;
            emit('insertIncoterm');
            modal.hide();
        })
        .catch((error) => {
            esError.value = true;
            mensajeError.value = error.response.data.error;
        });
};
</script>

<style lang="scss" scoped></style>