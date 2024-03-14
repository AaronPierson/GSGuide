<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link } from '@inertiajs/vue3';
    import Gardens from '@/Components/Gardens.vue';
    const props = defineProps({
        gardens: {
            type: Array,
            required: true
        }
    });
</script>

<template>
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Gardens
            </h2>
        </template>
        <div class="py-12 m-5">
            <Link :href="route('gardens.create')" class="bg-blue-500 text-white p-2 rounded">
                    Create Garden
            </Link>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-5">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <Gardens :gardens="gardens" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>