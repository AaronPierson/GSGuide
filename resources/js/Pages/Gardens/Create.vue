<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link, useForm } from '@inertiajs/vue3';
    let form = useForm({
        garden: {
            name: '',
            description: '',
            location: ''
        }
    });

    let submit = () => {
        form.post(route('gardens.store'));
    };

</script>
<template>
    <AppLayout>
        <template #header>
            <h1 class="class=font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <h1 class="text-2xl font-bold mb-4">Create Garden</h1>
            </h1>
        </template>
        <div>
            <form @submit.prevent="submit" class="max-w-md">
                <div class="mb-4">
                    <label for="name" class="block font-medium">Name:</label>
                    <input type="text" id="name" v-model="form.garden.name" required class="w-full border border-gray-300 rounded-md p-2">
                </div>
                <div class="mb-4">
                    <label for="description" class="block font-medium">Description:</label>
                    <textarea id="description" v-model="form.garden.description" required class="w-full border border-gray-300 rounded-md p-2"></textarea>
                </div>
                <div class="mb-4">
                    <label for="location" class="block font-medium">Location:</label>
                    <input type="text" id="location" v-model="form.garden.location" required class="w-full border border-gray-300 rounded-md p-2">
                </div>
                <div v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</div>
                <div v-if="form.errors.description" class="text-red-500">{{ form.errors.description }}</div>
                <div v-if="form.errors.location" class="text-red-500">{{ form.errors.location }}</div>
                <!-- <div class="flex items
                -center mb-4">
                    <input type="checkbox" id="public" v-model="garden.public" class="mr-2">
                    <label for="public">Public</label>
                </div> -->

                <Link :href="route('gardens.index')" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md mr-2">Cancel</Link>
                <button class="btn bg-blue-500 text-white px-4 py-2 rounded-md" type="submit">Create</button>
            </form>
        </div>
    </AppLayout>
</template>