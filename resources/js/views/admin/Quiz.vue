<script setup>
    import Layout from '@/layouts/admin/Layout.vue';
</script>

<template>
    <Layout>
        <div class=" border-b-2">
            <form action="" class="mx-auto w-2/4">
                <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Add
                        Category</label>
                    <div class="flex gap-2">
                        <input type="text" id="default-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <button type="submit"
                            class=" border px-2 py-1 rounded-md bg-blue-400 hover:bg-blue-500 text-white">
                            Add
                        </button>
                    </div>
                </div>
            </form>
        </div>


        <div class="py-4 px-8">
            <h1 class="text-center text-3xl font-bold">Add Quiz</h1>
            <div class="flex gap-4">
                <form action="">
                    <div class="">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            an
                            option</label>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose a country</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
    
                    <!-- Add Question modal -->
                    
    
    
                    <div class="mb-6">
                        <label for="default-input" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Add
                            Category</label>
                        <div class="flex gap-2">
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 ">
                            <button type="submit"
                                class=" border px-2 py-1 rounded-md bg-blue-400 hover:bg-blue-500 text-white">
                                Add Option
                            </button>
                        </div>
    
                        <div class="flex items-center py-2 mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Default radio
                            </label>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </Layout>
</template>
