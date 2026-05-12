<template>
    <div>
        <div class="flex m-4 gap-4">
            <h5 class="text-3xl font-bold tracking-tight text-primary leading-8"
                :style="{ textAlign: center, fontSize: 16 }">
                Incoterms
            </h5>

            <div class="flex justify-between items-center mb-4">
                <!-- Añadir -->
                <button data-modal-target="insert-modal" data-modal-toggle="insert-modal" type="button"
                    class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                    </svg>
                    Añadir
                </button>
            </div>
        </div>

        <tipos-incoterm-component v-if="componenteActivo === 'tipos_incoterm'" />

        <modal-insert-incoterm-component @insert-incoterm="selectIncoterms"></modal-insert-incoterm-component>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import TiposIncotermComponent from './tiposIncoterm/TiposIncotermComponent.vue';

const componenteActivo = ref('tipos_incoterm');
</script>