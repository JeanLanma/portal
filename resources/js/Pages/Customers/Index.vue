<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import CustomersTable from './Partials/CustomersTable.vue';
import MinimalistPagination from '@/Shared/MinimalistPagination.vue';

const props = defineProps({
    customers: {
        type: Object,
    },
    filters: {
        type: Object,
    },
});
console.log(props.customers);
// console.log(props.filters);
</script>
<template>
    <AppLayout title="Clientes">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tickets en cronos
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

                <!-- Filters -->
                <div class="overflow-hidden rounded-lg border bg-white text-left text-sm text-gray-500 shadow-md m-5">
                    <div class="p-4">

                    </div>
                </div>
                <!-- Filters -->

                <!-- Tickets table -->
                <CustomersTable :customers="props.customers.data" />
                <!-- Tickets table -->

                <!-- Pagination -->
                <MinimalistPagination :PaginatedObject="props.customers" />
                <!-- Pagination -->
            </div>
        </div>
    </AppLayout>
</template>
