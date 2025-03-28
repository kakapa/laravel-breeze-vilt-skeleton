<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    incidents: Object
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Dashboard
            </h2>
        </template>
        <p v-if="$page.props.flash.message" class="bg-green-300 p-2">
            {{ $page.props.flash.message }}
        </p>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <Link
                            :href="route('create.incident')"
                            class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900"
                            >
                            Create Incident
                        </Link>
                    </div>
                </div>
            </div>
            <table v-if="incidents">
                <thead>
                    <th>Ref</th>
                    <th>Created</th>
                </thead>
                <tbody>
                    <tr v-for="incident in incidents">
                        <td>{{ incident.slug }}</td>
                        <td>{{ incident.created_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AuthenticatedLayout>
</template>
