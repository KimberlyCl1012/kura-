<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Configuración
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <h1 class="text-gray-500 text-center text-2xl font-bold">Configuración</h1>
                        </div>
                    </div>

                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-gray-200 text-[#3C91E6] py-3 px-4 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-gray-100 focus:ring-opacity-50 transition-transform duration-300 ease-in-out transform hover:scale-95"><i
                                    class="fa-regular fa-pen-to-square fa-2x mr-20"></i> Catálogo de tipo de heridas</button>
                        </div>
                    </div>


                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-gray-200 text-[#3C91E6] py-3 px-4 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-gray-100 focus:ring-opacity-50 transition-transform duration-300 ease-in-out transform hover:scale-95"><i
                                    class="fa-regular fa-pen-to-square fa-2x mr-20"></i> Catálogo de Alergias</button>
                        </div>
                    </div>


                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-gray-200 text-[#3C91E6] py-3 px-4 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-gray-100 focus:ring-opacity-50 transition-transform duration-300 ease-in-out transform hover:scale-95"><i
                                    class="fa-regular fa-pen-to-square fa-2x mr-20"></i> Catálogo de Medicamentos</button>
                        </div>
                    </div>

                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-gray-200 text-[#3C91E6] py-3 px-4 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-gray-100 focus:ring-opacity-50 transition-transform duration-300 ease-in-out transform hover:scale-95"><i
                                    class="fa-regular fa-pen-to-square fa-2x mr-20"></i> Kuradores registrados</button>
                        </div>
                    </div>

                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-gray-200 text-[#3C91E6] py-3 px-4 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-gray-100 focus:ring-opacity-50 transition-transform duration-300 ease-in-out transform hover:scale-95"><i
                                    class="fa-regular fa-pen-to-square fa-2x mr-20"></i> Pacientes registrados</button>
                        </div>
                    </div>

                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-gray-200 text-[#3C91E6] py-3 px-4 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-gray-100 focus:ring-opacity-50 transition-transform duration-300 ease-in-out transform hover:scale-95"><i
                                    class="fa-regular fa-pen-to-square fa-2x mr-20"></i> Reasignación de pacientes</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </AppLayout>
</template>
 