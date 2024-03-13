<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link } from '@inertiajs/vue3';
    const props = defineProps({
        gardens: {
            type: Array,
            required: true
        }
    });
</script>

<template>
    <AppLayout>
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-8">Gardens</h1>
                <Link :href="route('gardens.create')" class="bg-blue-500 text-white p-2 rounded">
                    Create Garden
                </Link>
            <div class="grid grid-cols-3 gap-4">
                <div v-for="garden in gardens" :key="garden.id" class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold mb-2">{{ garden.name }}</h2>
                    <p>{{ garden.description }}</p>
                    <Link :href="route('gardens.show', garden.id)" class="bg-blue-500 text-white p-2 rounded mt-4">
                        View Garden
                    </Link>
                    <Link :href="route('gardens.destroy', garden.id)" class="bg-red-500 text-white p-2 rounded mt-4">
                        Delete Garden
                    </Link>
                </div>
            </div>
        </div>
    </AppLayout>
</template>