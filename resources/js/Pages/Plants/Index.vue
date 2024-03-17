<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link } from '@inertiajs/vue3'
    import Plants from '@/Components/Plants.vue'

    const props = defineProps({
        plants: {
            type: Array,
            required: true
        }
    });

    let submit = () => {
        form.post(route('plants.store'));
    };

</script>
<template>
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Plants
            </h2>
        </template>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                        <Plants :plants="plants" />
                    </div>
                </div>
            </div>
    </AppLayout>
</template>