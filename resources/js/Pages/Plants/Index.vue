<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
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
            <h1>Plant Index</h1>
        </div>
    </AppLayout>
</template>