<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { ref, computed } from 'vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    name: String,
    users: Object
});

const adminUsers = ref([
    'ADMIN@ADMIN.COM','ADMIN@ADMIN.COM.BR' , 'ADMIN2@ADMIN.COM', 'ADMIN2@ADMIN.COM.BR'
])


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard {{ adminUsers.includes($page.props.auth.user.email.toUpperCase()) ? '/ Admin' : '' }}</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
                    <div class="p-6 text-gray-900 font-semibold ">Bem vindo!</div>
                </div>

                <div v-if="adminUsers.includes($page.props.auth.user.email.toUpperCase())" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-900">
                            <caption class="my-8 "><p class="text-3xl  font-semibold leading-normal">Usuários Cadastrados</p></caption>
                            <thead class="text-xs text-gray-900 uppercase  ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nome
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        data de criação
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="users.id" class="bg-white border-b">
                                    <td  scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ user.id }}
                                    </td>
                                    <td  scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ user.name }}
                                    </td>
                                    <td  scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ user.email }}
                                    </td>
                                    <td  scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ new Intl.DateTimeFormat('pt-Br').format(new Date(user.created_at)) }}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout></template>
