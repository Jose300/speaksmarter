<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <ApplicationLogo class="block h-12 w-auto" />

            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                Welcome to your Speaksmarter application!
                <br><b>Usuario:</b>{{ $page.props.auth.user.name }}
            </h1>

        </div>
    </div>
</template>
