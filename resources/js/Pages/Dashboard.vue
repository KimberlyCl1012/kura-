<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Inicio
            </h2>
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
                            <input type="text" placeholder="Seguimiento de un paciente..."
                                class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition duration-300 ease-in-out" />
                            <button type="submit"
                                class="flex items-center bg-[#3C91E6] text-white py-2 px-4 rounded-md shadow hover:bg-[#397bbd] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 transition duration-300 ease-in-out">
                                <i class="fa-solid fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-gray-200 text-[#3C91E6] py-3 px-4 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-gray-100 focus:ring-opacity-50 transition-transform duration-300 ease-in-out transform hover:scale-95"><i
                                    class="fa-regular fa-pen-to-square fa-2x mr-20"></i> Nuevo paciente</button>
                        </div>
                    </div>


                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-gray-200 text-[#3C91E6] py-3 px-4 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-gray-100 focus:ring-opacity-50 transition-transform duration-300 ease-in-out transform hover:scale-95"><i
                                    class="fa-regular fa-pen-to-square fa-2x mr-20"></i> Nueva consulta</button>
                        </div>
                    </div>


                    <div class="p-4 rounded-lg shadow-sm">
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-gray-200 text-[#3C91E6] py-3 px-4 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-gray-100 focus:ring-opacity-50 transition-transform duration-300 ease-in-out transform hover:scale-95"><i
                                    class="fa-regular fa-pen-to-square fa-2x mr-20"></i> Reasignar pacientes</button>
                        </div>
                    </div>


                    <div class="p-4 rounded-lg shadow-sm mb-8">
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-gray-200 text-[#3C91E6] py-3 px-4 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-gray-100 focus:ring-opacity-50 transition-transform duration-300 ease-in-out transform hover:scale-95"><i
                                    class="fa-solid fa-list fa-2x mr-20"></i> Mis consultas</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
