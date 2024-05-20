<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <ApplicationLogo class="block h-12 w-auto" />

            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                Welcome to your Speaksmarter application! Jesus cardiel
            </h1>

            <button v-if="$page.props.user.permissions.includes('create roles')">Create Roles</button>
            <button v-if="$page.props.user.permissions.includes('create lessons')">Create New Lessons</button>

        </div>
    </div>
</template>


<style>
    button{
        background-color: green;
        color: white;
        padding: 20px;
        margin: 5px;
    }
</style>