<script setup>
    import { Link } from '@inertiajs/vue3'
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { ref } from 'vue';

    const props = defineProps({
        plants: {
            type: Array,
            required: true
        },
        garden_id: {
            type: String,
            required: true
        }
    });

    const selectedPlants = ref([]);
    const togglePlantSelection = (plant) => {
        if (selectedPlants.value.includes(plant)) {
            selectedPlants.value = selectedPlants.value.filter(p => p !== plant);
        } else {
            selectedPlants.value.push(plant);
        }
    };
</script>

<template>
    <AppLayout>
        
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 m-5">
            <div v-for="plant in plants" :key="plant.id" class="rounded m-5 shadow">
                <div class="card w-72 bg-base-100 shadow-xl">
                    
                    <figure>
                        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
                    </figure>
                    
                    <div class="card-body">
                        <h2 class="card-title">
                            {{ plant.name }}
                        </h2>
                        <div class="card-actions justify-end">
                            <input type="checkbox" :checked="selectedPlants.includes(plant)" @change="togglePlantSelection(plant)">
                        </div>
                        <div>
                            <!-- Rest of the plant details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Link href="{{ route('plants.index') }}" class="btn btn-primary">Back</Link>
        <Link href="/plants" method="post" :data="{ plants: selectedPlants, garden_id: garden_id }" class="bg-blue-500 text-white p-2 m-5 rounded">
            Add Plants 
        </Link>

    </AppLayout>
</template>