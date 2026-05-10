<template>
    <div>
        <div class="flex flex-wrap gap-2">
            <!-- Mostrar todos los incoterms -->
            <div v-if="componenteActivo === 'tipo_incoterm'" v-for="tipoIncoterm in incoterms" :key="tipoIncoterm.id">
                <tipo-incoterm-component :incoterm="tipoIncoterm" @select-incoterm="selectIncoterms" />
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import TipoIncotermComponent from './TipoIncotermComponent.vue';

const incoterms = ref([]);
const componenteActivo = ref('tipo_incoterm');

const emit = defineEmits(['selectIncoterm']);

const selectIncoterms = () => {

    axios.get('tipus_incoterm')
        .then((response) => {
            incoterms.value = response.data;
            emit('selectIncoterm');
        })
        .catch((error) => {
            console.error(error);
            alert("Error al cargar los datos de los incoterms");
        });
};

onMounted(() => {
    selectIncoterms();
});
</script>