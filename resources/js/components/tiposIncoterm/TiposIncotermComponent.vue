<template>
    <div>
        <div class="flex flex-wrap gap-2">
            <!-- Mostrar todos los incoterms -->
            <div v-if="componenteActivo === 'tipo_incoterm'" v-for="tipoIncoterm in incoterms" :key="tipoIncoterm.id">
                <tipo-incoterm-component :incoterm="tipoIncoterm" @select-incoterm="selectIncoterms"
                    @update-incoterm="openModalUpdate" />
            </div>
        </div>

        <modal-update-incoterm-component v-if="showModalUpdate" :incoterm="incotermEdit"
            @close="showModalUpdate = false" @update-incoterm="selectIncoterms"></modal-update-incoterm-component>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import TipoIncotermComponent from './TipoIncotermComponent.vue';
import ModalUpdateIncotermComponent from './ModalUpdateIncotermComponent.vue';

const incoterms = ref([]);
const componenteActivo = ref('tipo_incoterm');

const emit = defineEmits(['selectIncoterm']);
const showModalUpdate = ref(false);
const incotermEdit = ref();

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

const openModalUpdate = (incoterm) => {
    incotermEdit.value = incoterm;
    showModalUpdate.value = true;
}

onMounted(() => {
    selectIncoterms();
});
</script>