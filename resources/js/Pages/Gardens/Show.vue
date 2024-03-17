<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue'; // Import the AppLayout component
    import { Link } from '@inertiajs/vue3';
    const props = defineProps({
        garden: {
            type: Object,
            required: true
        },
    });

</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="class=font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ garden.name }}
            </h1>
        </template>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <Link :href="route('create_garden_plant', garden.id)" class="bg-blue-500 text-white p-2 m-5 rounded">
                        Add Plants to garden
                    </Link>

                    <Link :href="route('gardens.edit', garden.id)" class="bg-blue-500 text-white p-2 rounded">
                            Edit Garden
                    </Link>
                    <Link :href="route('gardens.index')" class="bg-blue-500 text-white p-2 m-5 rounded">
                        Back
                    </Link>
            </div>
        </div>


            <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container mx-auto m-5">
                        <p class="m-5"> Garden Description: {{ garden.description }}</p>
                        <p class="m-5"> Location: {{ garden.location }}</p>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>
</template>