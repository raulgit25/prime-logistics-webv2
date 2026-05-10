<template>
    <div>
        <div class="flex flex-wrap gap-2">
            <!-- Contenedor que muestran todos los tipos de incoterm que hay -->
            <div v-for="tipoIncoterm in incoterms" :key="tipoIncoterm.id">
                <tipo-incoterm-component :incoterm="tipoIncoterm"
                    @select-incoterm="selectIncoterms"></tipo-incoterm-component>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const incoterms = ref();

const emit = defineEmits(['selectIncoterm']);

const selectIncoterms = () => {
    axios.get("tipus_incoterm")
        .then((response) => {
            estaCargando.value = true;
            emit('selectIncoterm');
            modal.hide();
        })
        .catch((error) => {
            estaCargando.value = false;
            alert(error + "Error al cargar los datos de los incoterms");
        })
};

onMounted(() => {
    selectIncoterms();
});
</script>

<style lang="scss" scoped></style>