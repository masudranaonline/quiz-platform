<script setup>
    import Layout from '@/layouts/admin/Layout.vue';
    import { ref } from 'vue';
    import axios from 'axios';
    import { onMounted } from 'vue';

    const users = ref([]);
    const getUsers = async () => {
        const response = await axios.get('/api/users');
        users.value = response.data; 
        console.log(users.value);
    }

    onMounted(() => getUsers());

</script>
<template>
    <Layout>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            User name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody >
                    <tr v-for="user in users" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ user.first_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ user.last_name}}
                        </td>
                        <td class="px-6 py-4">
                            {{ user.email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ user.status }}
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

    </Layout>

</template>
