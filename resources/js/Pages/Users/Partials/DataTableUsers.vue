<template>
    <div class="card">
        <DataTable
            v-model:filters="filters"
            :value="datosUsuarios"
            paginator
            :rows="10"
            dataKey="id"
            filterDisplay="row"
            :loading="loading"
            :globalFilterFields="['id', 'name', 'email']"
        >
            <template #header>
                <div class="flex justify-end">
                    <IconField>
                        <InputIcon>
                            <i class="pi pi-search" />
                        </InputIcon>
                        <InputText v-model="filters['global'].value" placeholder="Ingresa texto a buscar" />
                    </IconField>
                </div>
            </template>
            <template #empty> No se encontraron registros en la base de datos. </template>
            <template #loading> Por favor espere, buscando información en la base de datos. </template>

            <Column field="id" header="# Usuario" style="min-width: 12rem" class="text-center">
                <template #body="{ data }">
                    {{ data.id }}
                </template>
                <template #filter="{ filterModel, filterCallback }">
                    <InputText v-model="filterModel.value" type="text" @input="filterCallback()" placeholder="Buscar por id" />
                </template>
            </Column>
            <Column field="name" header="Nombre de usuario" style="min-width: 12rem" class="text-center">
                <template #body="{ data }">
                    {{ data.name }}
                </template>
                <template #filter="{ filterModel, filterCallback }">
                    <InputText v-model="filterModel.value" type="text" @input="filterCallback()" placeholder="Buscar por nombre" />
                </template>
            </Column>
            <Column field="email" header="Email acceso" style="min-width: 12rem" class="text-center">
                <template #body="{ data }">
                    {{ data.email }}
                </template>
                <template #filter="{ filterModel, filterCallback }">
                    <InputText v-model="filterModel.value" type="text" @input="filterCallback()" placeholder="Buscar por email" />
                </template>
            </Column>
        </DataTable>
    </div>
</template>

<script setup>
import { ref, onMounted, defineProps } from 'vue';
import { FilterMatchMode } from '@primevue/core/api';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputText from 'primevue/inputtext';
import FloatLabel from 'primevue/floatlabel';
import InputIcon from 'primevue/inputicon';
import IconField from 'primevue/iconfield';
import Column from 'primevue/column';
import MultiSelect from 'primevue/multiselect';
import Tag from 'primevue/tag';
import Select from 'primevue/select';
import DataTable from 'primevue/datatable';

const props = defineProps({
    datosUsuarios: {
        type: Array,
        required: true,
        default: []
    },
    likes: Number
})

const customers = ref([]);
const filters = ref({
    global: { value: null, matchMode: FilterMatchMode.CONTAINS },
    id: { value: null, matchMode: FilterMatchMode.STARTS_WITH },
    name: { value: null, matchMode: FilterMatchMode.STARTS_WITH },
    email: { value: null, matchMode: FilterMatchMode.STARTS_WITH },
    'country.name': { value: null, matchMode: FilterMatchMode.STARTS_WITH },
    representative: { value: null, matchMode: FilterMatchMode.IN },
    status: { value: null, matchMode: FilterMatchMode.EQUALS },
    verified: { value: null, matchMode: FilterMatchMode.EQUALS }
});
const representatives = ref([
    { name: 'Amy Elsner', image: 'amyelsner.png' },
    { name: 'Anna Fali', image: 'annafali.png' },
    { name: 'Asiya Javayant', image: 'asiyajavayant.png' },
    { name: 'Bernardo Dominic', image: 'bernardodominic.png' },
    { name: 'Elwin Sharvill', image: 'elwinsharvill.png' },
    { name: 'Ioni Bowcher', image: 'ionibowcher.png' },
    { name: 'Ivan Magalhaes', image: 'ivanmagalhaes.png' },
    { name: 'Onyama Limba', image: 'onyamalimba.png' },
    { name: 'Stephen Shaw', image: 'stephenshaw.png' },
    { name: 'XuXue Feng', image: 'xuxuefeng.png' }
]);
const statuses = ref(['unqualified', 'qualified', 'new', 'negotiation', 'renewal', 'proposal']);
const loading = ref(false);

onMounted(() => {
    loading.value = true
    console.log("-----")
    console.log(props.datosUsuarios)
    setTimeout(()=>{
        loading.value = false
    },3000)
});

const getCustomers = (data) => {
    return [...(data || [])].map((d) => {
        d.date = new Date(d.date);
        return d;
    });
};

const getSeverity = (status) => {
    switch (status) {
        case 'unqualified':
            return 'danger';
        case 'qualified':
            return 'success';
        case 'new':
            return 'info';
        case 'negotiation':
            return 'warn';
        case 'renewal':
            return null;
    }
};
</script>
