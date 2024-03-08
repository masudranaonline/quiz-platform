<script setup>
    import Layout from '@/layouts/admin/Layout.vue';
    import { ref, reactive } from 'vue';
    // import { reactive } from 'vue';
    import axios from 'axios';
    import { onMounted } from 'vue';

    const category = ref('');

    const handelSubmit = () => {
        try {
            // console.log(category.value);
            const response = axios.post('/api/category', { name: category.value});
        } catch (error) {
            console.log(error);
        }
    }

    //All categories

    const categories = ref([]);
    const getCategories = async () => {
        const response = await axios.get('/api/categories');
        categories.value = response.data;
        console.log(categories.value);
    }
    onMounted(() => getCategories());

</script>

<template>
    <Layout>
        <!-- <p>{{ category }}</p> -->
        <div class=" border-2">
            <form  @submit.prevent="handelSubmit" class="mx-auto w-2/4">
                <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Add
                        Category</label>
                    <div class="flex gap-2">
                        <input type="text" id="default-input" v-model="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <button type="submit"  
                            class=" border px-2 py-1 rounded-md bg-blue-400 hover:bg-blue-500 text-white">
                            Add
                        </button>
                    </div>
                </div>
            </form>
        </div>

        

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-8 ">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created by
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="category in categories" :key="category.id" class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{  category.id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ category.name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ category.creator_id }}
                    </td>
                    
                    <td class="flex gap-4 px-6 py-4">
                        <a href="#" class="font-medium text-green-600 dark:text-blue-500 hover:underline">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                          </svg>
                          </a>
                          <a href="#" class="font-medium text-red-600 dark:text-blue-500 hover:underline">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                              </svg>                              
                          </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



       
    </Layout>
</template>
