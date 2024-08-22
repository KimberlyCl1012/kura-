<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

import {
    onMounted
} from 'vue';
// import { Head, Link, useForm } from '@inertiajs/vue3';
// import Checkbox from '@/Components/Checkbox.vue';
// import InputError from '@/Components/InputError.vue';
// import InputLabel from '@/Components/InputLabel.vue';
// import PrimaryButton from '@/Components/PrimaryButton.vue';
// import TextInput from '@/Components/TextInput.vue';
// import Aura from '@primevue/themes/aura';
// import InputText from 'primevue/inputtext';
// import FloatLabel from 'primevue/floatlabel';

import DataTableUsers from './DataTableUsers.vue';


import { usePage } from '@inertiajs/vue3';
const { companies, sites, sexes, users } = usePage().props;

onMounted( function(){
    // console.log(users);
})

</script>

<template>
     <data-table-users :datos-usuarios="users"></data-table-users>
</template>
