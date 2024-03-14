<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue'; // Import the AppLayout component

    const props = defineProps({
        garden: {
            type: Object,
            required: true
        },
    });

</script>

<template>
    <AppLayout>
        <div class="">
            <h1>User Garden</h1>
            <h1 class="">{{ garden.name }}</h1>
            <p>{{ garden.description }}</p>
            <p>{{ garden.location }}</p>
        </div>
    </AppLayout>
</template>