<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';


</script>



<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Usuarios
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <h1 class="text-gray-500 text-center text-2xl font-bold">Usuarios</h1>
                        </div>
                    </div>

                    <div class="p-10 rounded-lg shadow-sm">

                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
