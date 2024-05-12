<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="An error occured" />
    <GuestLayout>
        <div class="mb-4 font-medium text-sm text-green-600">
            An Error Occurred
        </div>
    </GuestLayout>
</template>
