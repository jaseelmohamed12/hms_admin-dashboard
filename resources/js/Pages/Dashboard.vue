<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3'
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                <!-- Summary Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="bg-white p-4 rounded shadow text-center">
                        <h3 class="text-sm text-gray-500">Total Customers</h3>
                        <p class="text-2xl font-bold text-gray-800">123</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow text-center">
                        <h3 class="text-sm text-gray-500">Total Bookings</h3>
                        <p class="text-2xl font-bold text-gray-800">87</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow text-center">
                        <h3 class="text-sm text-gray-500">Total Sales</h3>
                        <p class="text-2xl font-bold text-gray-800">Rs. 245,000</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow text-center">
                        <h3 class="text-sm text-gray-500">Pending Bookings</h3>
                        <p class="text-2xl font-bold text-yellow-600">5</p>
                    </div>
                </div>

                <!-- Chart Placeholder -->
                <div class="bg-white p-6 rounded shadow mt-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Sales Analytics (Coming Soon)</h3>
                    <div class="h-64 bg-gray-100 rounded flex items-center justify-center text-gray-400">
                        Chart will go here
                    </div>
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
