<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';

    const props = defineProps({
        plant: {
            type: Object,
            required: true
        }
    });
</script>
<template>
    <AppLayout>
        <div>
            <h1>{{ plant.name }}</h1>
            <p>Family: {{ plant.family }}</p>
            <p>Species: {{ plant.species }}</p>
            <p>Variety: {{ plant.variety }}</p>
            <p>Origin: {{ plant.origin }}</p>
            <p>Growth Rate: {{ plant.growth_rate }}</p>
            <p>Watering: {{ plant.watering }}</p>
            <p>Light: {{ plant.light }}</p>
            <p>Soil Type: {{ plant.soil_type }}</p>
            <p>Fertilizer Requirements: {{ plant.fertilizer_requirements }}</p>
            <p>Temperature: {{ plant.temperature }}</p>
            <p>Pest Resistance: {{ plant.pest_resistance }}</p>
            <p>Pest: {{ plant.pest }}</p>
            <p>Care Instructions: {{ plant.care_instructions }}</p>
            <p>Propagation Methods: {{ plant.propagation_methods }}</p>
            <p>Notes: {{ plant.notes }}</p>
            <p>Description: {{ plant.description }}</p>
            <p>Quantity: {{ plant.quantity }}</p>
            <p>Is Fruiting: {{ plant.is_fruiting }}</p>
            <p>Is Edible: {{ plant.is_edible }}</p>
            <p>Flower Color: {{ plant.flower_color }}</p>
            <p>Leaf Color: {{ plant.leaf_color }}</p>
            <p>Seasonality: {{ plant.seasonality }}</p>
            <p>Is Indoor: {{ plant.is_indoor }}</p>
            <p>Is Perennial: {{ plant.is_perennial }}</p>
        </div>
    </AppLayout>

</template>

<style>
/* Add your Tailwind CSS styles here */
</style>