<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    plants: {
        type: Array,
        required: true
    }
});

</script>
<template>
    <AppLayout>
        <div>
            <h1 class="">Plant Index</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                <div v-for="plant in plants" :key="plant.id" class="bg-gray-100 p-4 rounded shadow">
                    <img :src="plant.image" alt="Plant Image" class="w-full h-auto rounded" />
                    <h3 class="text-lg font-bold mt-2">{{ plant.name }}</h3>
                    <div class="mt-2">
                        {{ plant.name }}
                        {{ plant.description }}
                        {{ plant.light }}
                        <div class="flex items-center mb-1">
                            <span class="font-bold mr-1">Zone:</span>
                            <span>{{ plant.zone }}</span>
                        </div>
                        <div class="flex items-center">
                            <span class="font-bold mr-1">Difficulty:</span>
                            <span>{{ plant.difficulty }}</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-2">
                        <div class="flex items-center mr-2">
                            <i class="fas fa-sun mr-1"></i>
                            <span>{{ plant.sun }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-tint mr-1"></i>
                            <span>{{ plant.water }}</span>
                        </div>
                    </div>
                    <div>
                        <Link :href="route('plants.show', plant.id)" class="bg-blue-500 text-white p-2 rounded">
                            View Plant
                        </Link>
                    </div>
                </div>

            </div>
        </div>
    </AppLayout>
</template>