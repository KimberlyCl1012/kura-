<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <DataTable :value="products" removableSort tableStyle="min-width: 50rem">

                <Column v-for="user in users" :key="user.id" field="code" header="Code" sortable style="width: 25%">
                {{ user.name }}
                </Column>
            </DataTable>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <h1 class="text-gray-500 text-center text-2xl font-bold">Inicio</h1>
                        </div>
                    </div>

                    <div class="p-10 rounded-lg shadow-sm">
                        <div class="flex items-center space-x-2">
                            <div class="card">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
