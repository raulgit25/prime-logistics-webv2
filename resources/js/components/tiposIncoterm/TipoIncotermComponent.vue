<template>
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-5 w-72 hover:shadow-lg transition duration-300">
        <!-- Botones -->
        <div class="flex justify-between items-center mb-4">
            <div class="flex gap-2">

                <!-- Editar -->
                <button data-modal-target="update-modal" data-modal-toggle="update-modal" type="button"
                    class="p-2 rounded-lg bg-yellow-500 hover:bg-yellow-600 text-white transition">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                    </svg>
                </button>

                <!-- Eliminar -->
                <button type="button" class="p-2 rounded-lg bg-red-500 hover:bg-red-600 text-white transition">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                    </svg>
                </button>

            </div>
        </div>

        <!-- Datos -->
        <div class="mb-4">

            <h5 class="text-3xl font-bold text-gray-800 mb-2">
                {{ incoterm.codi }}
            </h5>

            <p class="text-gray-600 text-lg">
                {{ incoterm.nom }}
            </p>

        </div>
    </div>
</template>

<script setup>
defineProps({
    incoterm: {
        type: Object,
        required: true
    }
});
</script>