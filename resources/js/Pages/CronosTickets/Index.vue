<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import CronosTicketsTable from './Partials/CronosTicketsTable.vue';
import MinimalistPagination from '@/Shared/MinimalistPagination.vue';

const props = defineProps({
    tickets: {
        type: Object,
    },
    filters: {
        type: Object,
    },
});
console.log(props.tickets);
console.log(props.filters);
</script>
<template>
    <AppLayout title="Tickets en cronos">
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
                <CronosTicketsTable :tickets="props.tickets.data" />
                <!-- Tickets table -->

                <!-- Pagination -->
                <MinimalistPagination :ticketsPaginatedObject="props.tickets" />
                <!-- Pagination -->
            </div>
        </div>
    </AppLayout>
</template>
