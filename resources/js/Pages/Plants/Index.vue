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
            <h1 class="m-5 text-5xl font-bold">Plant Index</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">

                <div v-for="plant in plants" :key="plant.id" class="p-4 rounded shadow">

                    <div class="card w-96 bg-base-100 shadow-xl">
                    <!-- <img :src="plant.image" alt="Plant Image" class="w-full h-auto rounded" /> -->
                    <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="card-title">
                                {{ plant.name }}
                            </h2>
                            <p>                        
                                {{ plant.description }}
                            </p>
                            <div class="card-actions justify-end">
                                
                                <div class="badge badge-outline">Fashion</div> 
                                <div class="badge badge-outline">Products</div>
                            </div>
                            <div>
                                <div class="mt-2">
                                    <div class="flex items-center mb-1">
                                        <span class="font-bold mr-1">Zone:</span>
                                        <span>{{ plant.zone }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="font-bold mr-1">Difficulty:</span>
                                        <span>{{ plant.difficulty }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        {{ plant.light }}
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
                            </div>

                        </div>
                        <Link :href="route('plants.show', plant.id)" class="bg-blue-500 text-white p-2 rounded">
                            View Plant
                        </Link>
                    </div>
                </div>

            </div>
        </div>
    </AppLayout>
</template>