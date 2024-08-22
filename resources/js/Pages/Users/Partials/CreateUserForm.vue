<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Button from 'primevue/button';
import {
    onMounted, ref
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

const modulo = ref(false)

import { usePage } from '@inertiajs/vue3';
const { companies, sites, sexes, users } = usePage().props;

onMounted( function(){
    // console.log(users);
})

</script>

<template>
    <Button type="button" icon="pi pi-refresh" text @click="modulo=!modulo"/>
     <data-table-users  :datos-usuarios="users" v-if="modulo"></data-table-users>
</template>
