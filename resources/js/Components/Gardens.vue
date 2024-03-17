<script setup>
    import { Link } from '@inertiajs/vue3';
    const props = defineProps({
        gardens: {
            type: Array,
            required: true
        }
    });
</script>
<template>
        <div class="container mx-auto">
            <div class="grid grid-cols-3 gap-4 m-5">
                <div v-for="garden in gardens" :key="garden.id" class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold mb-2">{{ garden.name }}</h2>
                    <p class="m-5">{{ garden.description }}</p>
                    <div class="flex">
                        <Link :href="route('gardens.show', garden.id)" class="bg-blue-500 text-white mx-2 p-2 rounded">
                            View Garden
                        </Link>
                        <Link :href="`/gardens/${garden.id}`" method="DELETE" :data="garden.id" class="bg-red-500 text-white mx-2 p-2 rounded">
                            Delete Garden
                        </Link>
                    </div>


                </div>
            </div>
        </div>
</template>